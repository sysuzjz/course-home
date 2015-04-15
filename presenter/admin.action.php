<?php
    include_once("../presenter/public.action.php");
    $postParam = $_POST;
    if(isset($postParam["func"]) && function_exists($postParam["func"])) {
        $funcName = $postParam["func"];
        unset($postParam["func"]);
        $result = call_user_func($funcName, $postParam);

        if(isset($result["isRedirect"]) && !$result["isRedirect"]) {
            unset($result["isRedirect"]);
            echo $result;
        } else {
            $redirectTime = isset($result["redirectTime"]) ? $result["redirectTime"] : 3;
            $redirectUrl = isset($result["redirectUrl"]) ? $result["redirectUrl"] : "./";
            if(isset($result["status"]) && $result["status"]) {
                $redirectMsg = isset($result["redirectMsg"]) ? $result["redirectMsg"] : "操作成功";
            } else {
                $redirectMsg = isset($result["redirectMsg"]) ? $result["redirectMsg"] : "操作失败";
            }
            redirectErrorPage($redirectMsg, $redirectTime, $redirectUrl);
        }
    } else {
        redirectErrorPage("函数名错误", 5);
    }
    function login($param) {
        $con = array("uname" => $param["uname"], "password" => md5($param["password"]));
        $result = select("teacher", "uname", $con, "", 1);
        if(!empty($result)) {
            $_SESSION["uname"] = $param["uname"];
            $_SESSION["level"] = 1;
            if(isset($param["autoLogin"]) && !empty($param["autoLogin"])) {
                setcookie(session_name(), session_id(), time() + TIMEOFFSET + SESSION_LIFETIME, PATH, DOMAIN);
            }
        }
        return array("status" => !empty($result), "isRedirect" => true, "redirectTime" => 2);
    }

    function logout() {
        $_SESSION = array();
        return array("status" => true, "isRedirect" => true, "redirectMsg" => "退出成功", "redirectTime" => 2);
    }

    function updateOverview($param) {
        $time = time() + TIMEOFFSET;
        $result = ActionModel::updateOverview($param["title"], $param["content"], $time);
        return array("status" => $result, "isRedirect" => true, "redirectUrl" => "../view/index.php");
    }

    function updateInform($param) {
        $time = time() + TIMEOFFSET;
        if(!isset($param["id"]) || empty($param["id"])) {
            $result = ActionModel::insertInform($param["title"], $param["content"], $time);
        } else {
            $result = ActionModel::updateInformById($param["id"], $param["title"], $param["content"], $time);
        }
        return array("status" => $result, "isRedirect" => true, "redirectUrl" => "../view/informs.php");
    }

    function upload($param) {
        if(!isset($_FILES["file"])) {
            return array("status" => false, "isRedirect" => true, "redirectMsg" => "文件不能为空", "redirectTime" => 2);
        }
        if($_FILES["file"]["error"]) {
            return array("status" => false, "isRedirect" => true, "redirectMsg" => $_FILES["file"]["error"], "redirectTime" => 2);   
        }
        // $allowType = array();
        $uploadDir = $GLOBALS["DIR"]['UPLOAD'];
        $newName = iconv("utf-8", "gb2312", $_FILES["file"]["name"]);
        $result = move_uploaded_file($_FILES["file"]["tmp_name"], $uploadDir.$newName);
        if($result) {
            $time = time() + TIMEOFFSET;
            $result = ActionModel::uploadFile($_FILES["file"]["name"], $uploadDir.$_FILES["file"]["name"], $_SESSION["uname"], $time);
        }
        return array("status" => $result, "isRedirect" => true, "redirectUrl" => "../view/resources.php", "redirectTime" => 3);
    }

    function deleteInform($param) {
        $id = $param["id"];
        $result = ActionModel::deleteById("inform", $id);
        return array("status" => $result, "isRedirect" => true, "redirectUrl" => "../view/informs.php","redirectTime" => 3);
    }

    function deleteResource($param) {
        $id = $param["id"];
        $result = ActionModel::deleteById("upload", $id);
        return array("status" => $result, "isRedirect" => true, "redirectUrl" => "../view/resources.php","redirectTime" => 3);
    }

?>