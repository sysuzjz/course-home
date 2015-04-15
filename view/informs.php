<?php
    include_once("./head.php");
    $informs = getInforms();
?>
    <h2>通知列表</h2>
    <?php if(isTeacher()) { ?>
        <div class="subhead clear-float">
            <a href="edit_inform.php" class="float-left">新建通知</a>
        </div>
    <?php } ?>
    <table id="table-container" data-func="deleteInform">
        <thead>
            <tr>
                <?php if(isTeacher()) { ?>
                    <th>管理</th>
                <?php } ?>
                <th>标题</th>
                <th>时间</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($informs as $inform) { ?>
                <tr>
                    <?php if(isTeacher()) { ?>
                        <td class="align-center">
                            <a href="edit_inform.php?id=<?=$inform['id']?>">编辑</a>
                            <a href="#" class="delete-btn" data-id="<?=$inform['id']?>">删除</a>
                        </td>
                    <?php } ?>
                    <td><a href="inform.php?id=<?=$inform['id']?>"><?= $inform["title"] ?></a></td>
                    <td class="align-center"><?= date("Y-m-d H:i:s",$inform["time"]); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

<?php include_once("./foot.php"); ?>