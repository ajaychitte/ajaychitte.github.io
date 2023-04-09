function getContent(url, containerId){
    var container = document.getElementById(containerId);
    var xhr = new XMLHttpRequest;
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status==200){
            container.innerHTML = xhr.responseText;
        }
    };
    xhr.open('GET',url,true);
    xhr.send();
}

function showPopup(){
    var popup = document.getElementById("popup-box");
    popup.style.display = "block";

    var cancelBtn = document.getElementById("cancel-btn");
    cancelBtn.onclick = function(){
        popup.style.display = "none";
    };
}

function showPopup1() {

    var popup = document.getElementById("popup-box1");
    popup.style.display = "block";

    var cancelBtn = document.getElementById("cancel-btn");
    cancelBtn.onclick = function(){
        popup.style.display = "none";
    };
} 
