<?php 
    include_once("./head.php");
    if(isset($_GET["id"])) {
        $inform = getInformById($_GET["id"]);
    }
    if(!isset($_GET["id"]) || empty($inform)) {
        redirectErrorPage("该通知不存在或已被删除", 5);
    }
?>
    <h2><?= $inform["title"] ?></h2>
    <div class="subhead clear-float">
        <?php if(isTeacher()) { ?>
            <a href="edit_inform.php?id=<?=$inform['id']?>" class="float-left">编辑</a>
        <?php } ?>
        <span class="float-right">发布时间：<?= date("Y:m:d H:i:s", $inform["time"]) ?></span>
    </div>
    <div>
        <?= $inform["content"] ?>
    </div>
<?php include_once("./foot.php"); ?>