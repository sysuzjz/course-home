<?php
    include_once("./head.php");
    $overview = getOverview();
?>
    <h2>课程概括</h2>
    <div class="subhead clear-float">
        <?php if(isTeacher()) { ?>
            <a href="./edit_overview.php" class="float-left">编辑概括</a>
        <?php } ?>
	    <span class="float-right">发表时间：<?=date("Y-m-d H:i:s",$overview["time"])?></span>
        
    </div>
	    <div><p><?=$overview["content"]?></p></div>

<?php include_once("./foot.php"); ?>