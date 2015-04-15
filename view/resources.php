<?php
    include_once("./head.php");
    $resources = getResources();
?>
    <h2>资源列表</h2>
    <?php if(isTeacher()) { ?>
        <div class="subhead clear-float">
            <a href="upload.php" class="float-left">上传资源</a>
        </div>
    <?php } ?>
    <table id="table-container" data-func="deleteResource">
        <thead>
            <tr>
                <?php if(isTeacher()) { ?>
                    <th>管理</th>
                <?php } ?>
                <th>名称</th>
                <th>时间</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resources as $resource) { ?>
                <tr>
                    <?php if(isTeacher()) { ?>
                        <td class="align-center">
                            <a href="#" class="delete-btn" data-id="<?=$resource['id']?>">删除</a>
                        </td>
                    <?php } ?>
                    <td><a href="<?=$resource['path']?>"><?= $resource["name"] ?></a></td>
                    <td class="align-center"><?= date("Y-m-d H:i:s",$resource["time"]); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

<?php include_once("./foot.php"); ?>