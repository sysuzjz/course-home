// 绑定删除按钮函数
var tableNode = document.getElementById('table-container');
delegate(tableNode, "delete-btn", "click", function(event) {
    event.preventDefault();
    var func = tableNode.getAttribute("data-func"),
        id = event.target.getAttribute("data-id");
    var form = createForm(func, id);
    form.submit();
})

function createForm(func, id) {
    var form = document.createElement("form");
    form.action = "../presenter/admin.action.php";
    form.method = "post";
    var content =   '<input type="hidden" name="id" value="' + id + '" /> \
                     <input type="hidden" name="func" value="' + func + '" /> \
                     <input type="submit" value="submit" /> \
                    ';
    form.innerHTML = content;
    return form;
}
var node = null;
if(node = document.getElementById("new-user")) {
    node.onclick = showUpdateUserBox;
}
if(node = document.getElementById("update-user-cancel")) {
    node.onclick = hideUpdateUserBox;
}

delegate(tableNode, "edit-btn", "click", function(event) {
    event.preventDefault();
    var currentNode = event.target;
    showUpdateUserBox();
    setUpdateUserBox(currentNode);
})
function setUpdateUserBox(node) {
    if(node) {
        var uname = node.getAttribute("data-uname"),
            level = node.getAttribute("data-level"),
            id = node.getAttribute("data-id");
    }
    var form = document.getElementById("update-user").getElementsByTagName("form")[0];
    form['id'].value = node ? id : "";
    form['uname'].value = node ? uname : "";
    form['password'].value = "";
    form['level'].value = node ? level : "";
}

function showUpdateUserBox() {
    showElementById("cover");
    showElementById("update-user");

}
function hideUpdateUserBox() {
    setUpdateUserBox(null);
    hideElementById("cover");
    hideElementById("update-user");
}