
var outdoorbtn = document.querySelector(".what-we-do-btn4");
var indoorbtn = document.querySelector(".what-we-do-btn3");
var indoor = document.querySelector(".indoor");
var outdoor = document.querySelector(".outdoor");
var what_we_do_inbtn = document.querySelector("#what-we-do-inbtn");
var what_we_do_outbtn = document.querySelector("#what-we-do-outbtn");
function hideoutdoor() {
    outdoor.style.display = "block";
    outdoorbtn.style.display = "none";
    what_we_do_outbtn.style.justifyContent = "flex-end";
    outdoor.style.display = "none";
}

function hideindoor() {
    
    indoor.style.display = "block";
    indoorbtn.style.display = "none";
    what_we_do_inbtn.style.justifyContent = "flex-end";
    indoor.style.display = "none";
    
}

