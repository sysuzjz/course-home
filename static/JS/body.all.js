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