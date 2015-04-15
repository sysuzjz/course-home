<?php
    include_once("./head.php"); 
    if(!isTeacher()) {
        redirectErrorPage("您的权限不够", 5);
    }
?>
    <h2>上传资源</h2>
    <form action="../presenter/admin.action.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="func" value="upload" />
        <input type="file" name="file" accept="*" />
        <input type="submit" value="提交" />
    </form>

<?php include_once("./foot.php"); ?>