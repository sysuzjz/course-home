function showLogin() {
    showElementById("cover");
    showElementById("login");
}

function hideLogin() {
    hideElementById("cover");
    hideElementById("login");
}

function select () {
    var url = window.location.pathname;
    url = url.split("/");
    url = url[url.length - 1];
    if(!url) {
        url = "index.php";
    }
    url = url.split(".");
    var key = url[0];
    var arr = document.getElementById("menu").getElementsByTagName("a");
    for(var i = 0; i < arr.length; i++) {
        if(arr[i].href.indexOf(key) > 0) {
            addClassName(arr[i].parentNode, "selectedItem");
        }
    }
}

function init() {
    var node = null; 
    if(node = document.getElementById('button-login')) {
        node.onclick = showLogin;
    }
    if(node = document.getElementById('button-cancel')) {
        node.onclick = hideLogin;
    }
    select();
}

window.onload = init;