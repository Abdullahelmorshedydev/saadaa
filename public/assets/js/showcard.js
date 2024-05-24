var indoor = document.querySelector(".indoor");
var outdoor = document.querySelector(".outdoor");
var outdoorbtn = document.querySelector(".what-we-do-btn4");
var indoorbtn = document.querySelector(".what-we-do-btn3");
var what_we_do_inbtn = document.querySelector("#what-we-do-inbtn");
var what_we_do_outbtn = document.querySelector("#what-we-do-outbtn");

function showoutdoor() {
	outdoor.style.display = "block";
	outdoorbtn.style.display = "block";
	what_we_do_outbtn.style.justifyContent = "space-around";
	indoorbtn.style.display="none";
	what_we_do_inbtn.style.justifyContent = "flex-end";
	indoor.style.display = "none";

}
function showindoor() {
    indoor.style.display = "block";
	indoorbtn.style.display = "block";
	what_we_do_inbtn.style.justifyContent = "space-around";
	outdoorbtn.style.display="none";
	what_we_do_outbtn.style.justifyContent = "flex-end";
    outdoor.style.display = "none";
}





let nav_items = document.querySelector(".nav_items");
let nav_Icon = document.querySelector("#NAV-icon");


document.addEventListener("click", function (e) {
	if (e.target !== nav_items && e.target !== nav_Icon) {
		nav_items.style.right = "-100%";
	}
});

function showsidebar() {
	const sideBar = document.querySelector("#sidebar");
	nav_items.style.right = "0";
}



