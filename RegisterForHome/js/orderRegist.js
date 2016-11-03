document.getElementById("regisBtn").addEventListener("click", function () {
    var userName = document.getElementById("usr").value;
    var passWord = document.getElementById("pwd").value;
    var email = document.getElementById("eml").value;
    document.getElementById("usr").value = "";
    document.getElementById("pwd").value = "";
    document.getElementById("eml").value = "";
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            alert("it is ok");
        }  
    }
    xmlhttp.open("GET", "RegistRequest.php?u=" + userName + "&p=" + passWord + "&e=" + email, true);
    xmlhttp.send(null);

});