<?php
    include_once("./head.php");
    if(!isAdmin()) {
        redirectErrorPage("您的权限不够", 5);
    }
    $teachers = getTeachers();
?>
    <h2>用户管理</h2>
    <div class="subhead clear-float">
        <a href="#" id="new-user" class="float-left">新建用户</a>
    </div>
    <table id="table-container" data-func="deleteTeacher">
        <thead>
            <tr>
                <th>管理</th>
                <th class="align-left">用户名</th>
                <th>权限</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($teachers as $teacher) { ?>
                <tr>
                    <td class="align-center">
                        <a href="#" class="edit-btn" data-id="<?=$teacher['id']?>" data-uname="<?=$teacher['uname']?>" data-level="<?=$teacher['level']?>">编辑</a>
                        <a href="#" class="delete-btn" data-id="<?=$teacher['id']?>">删除</a>
                    </td>
                    <td><?= $teacher["uname"] ?></td>
                    <td class="align-center"><?= $teacher["level"] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div id="update-user">
        <form action="../presenter/admin.action.php" method="post">
            <input type="hidden" name="func" value="updateUser" />
            <input type="hidden" id="update-user-id" name="id" value="" />
            <div>
                <label class="inform">用户名：</label>
                <input type="text" id="update-user-uname" name="uname" placeholder="用户名" required="required" />
            </div>
            <div>
                <label class="inform">密码：</label>
                <input type="password" name="password" placeholder="密码" required="required" />
            </div>
            <div>
                <label class="inform">权限：</label>
                <input type="text" id="update-user-level" name="level" placeholder="权限" required="required" />
            </div>
            <div class="submit">
                <input type="submit" value="提交" />
                <input type="button" value="取消" id="update-user-cancel" />
            </div>
        </form>
    </div>
<?php include_once("./foot.php"); ?>