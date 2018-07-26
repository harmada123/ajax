function init() {
    let ajaxConnection = new XMLHttpRequest();
    ajaxConnection.open("POST","javascript.php",true)
    ajaxConnection.setRequestHeader('Content-type','application/x-www-form-urlencoded');

    ajaxConnection.onreadystatechange = function(){
        if(ajaxConnection.readyState == 4 && ajaxConnection.status == 200){
            document.getElementById('container').innerHTML = ajaxConnection.responseText;
        }
    }
    ajaxConnection.send('username=harold&email=h.l.armada');
}

