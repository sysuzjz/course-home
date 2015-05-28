<?php
    include_once("../model/public.php");
    include_once("../model/actionModel.php");
    function isAdmin() {
        return isset($_SESSION["level"]) && $_SESSION["level"] == 2;
    }

    function isLogin() {
        return isset($_SESSION["uname"]) && !empty($_SESSION["uname"]);
    }

    function isTeacher($id = 0) {
        return (isset($_SESSION["level"]) && $_SESSION["level"] == 1) || isAdmin();
    }

    function getOverview() {
        return ActionModel::getOverview();
    }

    function getInforms() {
        $informs = ActionModel::getInforms();
        return $informs;
    }

    function getInformById($id) {
        $inform = ActionModel::getInformById($id);
        return $inform;
    }

    function getResources() {
        $resources = ActionModel::getUploads();
        return $resources;
    }

    function getTeachers() {
        if(!isAdmin()) {
            redirectErrorPage("权限不足", 2);
            die();
        }
        $teachers = ActionModel::getTeachers();
        return $teachers;
    }

    function redirectErrorPage($errorMsg, $redirectTime, $redirectUrl = "./") {
        setcookie("errorMsg", $errorMsg, time() + 60, "/");
        setcookie("redirectTime", $redirectTime, time() + 60, "/");
        setcookie("redirectUrl", $redirectUrl, time() + 60, "/");
        var_dump($_COOKIE);
        header("Location: ../view/error.php");
    }
?>