<?php
    include_once("./head.php");
    if(!isTeacher()) {
        redirectErrorPage("您的权限不够", 5);
    }
    if(isset($_GET['id'])) {
        $inform = getInformById($_GET['id']);
    }
?>
    <h2>通知编辑</h2>
    <form action="../presenter/admin.action.php" method="post">
        <input type="hidden" name="func" value="updateInform" />
        <input type="hidden" name="id" value="<?= isset($_GET['id']) ? $_GET['id'] : '' ?>">
        <label class="inform">标题：</label>
        <input type="text" name="title" value="<?= isset($_GET['id']) ? $inform['title'] : "" ?>" required="required" />
        <script id="container" name="content" type="text/plain"><?= isset($_GET['id']) ? $inform['content'] : "" ?></script>
        <input type="submit" value="提交" />
    </form>
<?php include_once("./foot.php"); ?>