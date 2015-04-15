<?php
    $errorMsg = isset($_COOKIE["errorMsg"]) ?  $_COOKIE["errorMsg"] : "未知错误";
    $redirectTime = isset($_COOKIE["redirectTime"]) ? $_COOKIE["redirectTime"] : "5";
    $redirectUrl = isset($_COOKIE["redirectUrl"]) ? $_COOKIE["redirectUrl"] : "./";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $errorMsg ?></title>
</head>
<body>
    <h1><?= $errorMsg ?></h1>
    <h2>页面将在<span id="redirectTime"><?= $redirectTime ?></span>秒后跳转，或<a href="<?=$redirectUrl?>">点此返回</a></h2>
</body>
<script type="text/javascript">
    window.onload = function() {
        var timeNode = document.getElementById("redirectTime"),
            time = parseInt(timeNode.innerHTML);
        countDown(time);
        function countDown(timeout) {
            timeNode.innerHTML = timeout;
            if(timeout <= 0) {
                window.location.href = "<?= $redirectUrl ?>";
                return;
            }
            setTimeout(function() {
                return countDown(timeout - 1);
            }, 1000);
        }
    }

</script>
</html>