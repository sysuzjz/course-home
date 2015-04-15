<?php
    $setting = array(
        "DOMAIN" => "localhost",                    // 域名
        "PATH" => "/IBM-BigData-course-mainpage",   // 路径
        "SESSION_NAME" => "ibm",                    // session name 设置
        "SESSION_LIFETIME" => 3600 * 24 * 30,       // 自动登录时效，单位秒
        "SQL_ADDRESS" => "localhost",               // 数据库地址，值为IP或localhost(127.0.0.1)
        "SQL_UNAME" => "root",                      // 数据库用户名
        "SQL_PASSWORD" => "",                       // 数据库密码
        "DB_NAME" => "ibm",                         // 数据库名
        "SQL_ERROR_LOG" => true,                    // 是否开启数据库错误调试。若选是，则可通过getSqlErr()来获取最新的数据库操作错误
        "SHOW_SQL_ERROR" => false,                  // 是否开启数据库错误输出。注意，若选是，则遇错将中断
        "TIMEOFFSET" => 3600 * 8                    // 与伦敦时区的时间偏差，单位秒。大部分apache时间偏差为八个小时
    );
?>