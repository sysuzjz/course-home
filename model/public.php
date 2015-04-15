<?php
    require_once("setting.php");
    $DIR = array("CSS" => "../static/CSS/", "JS" => "../static/JS/", "IMG" => "../static/IMG/", "UPLOAD" => "../upload/");
    $defaultSetting = array(
        "DOMAIN" => "localhost",
        "PATH" => "/",
        "SESSION_NAME" => "",
        "SESSION_LIFETIME" => 3600 * 24 * 30,
        "SQL_ADDRESS" => "localhost",
        "SQL_UNAME" => "root",
        "SQL_PASSWORD" => "",
        "DB_NAME" => "",
        "SQL_ERROR_LOG" => true,
        "SHOW_SQL_ERROR" => false,
        "TIMEOFFSET" => 3600 * 8
    );
    setSettings($setting);
    function setSettings($settings) {
        global $defaultSetting;
        foreach ($settings as $key => $value) {
            if(isset($defaultSetting[$key])) {
                $defaultSetting[$key] = $value;
            }
        }
        foreach ($defaultSetting as $key => $value) {
            define($key, $value);
        }

        session_name(SESSION_NAME);
        session_start();
        $con = mysql_connect(SQL_ADDRESS, SQL_UNAME, SQL_PASSWORD);
        if(!$con) {
            die("can't connect to the server");
        }
        mysql_select_db(DB_NAME, $con);
    }
    
?>