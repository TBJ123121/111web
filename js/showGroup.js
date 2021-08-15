var url = location.href;
keyValue = url.split('?')[1];
groupId = keyValue.split('=')[1]; 
//console.log("groupId:",groupID);
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("showGroup").innerHTML = this.responseText;
    }
};
xmlhttp.open("GET", "showGroup.php?id=" + groupId, true);
xmlhttp.send();
