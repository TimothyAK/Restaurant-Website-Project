var navbar = document.getElementById("home-navbar");
var carousel_img_container = document.getElementsByClassName("carousel-inner");
var body_element = document.getElementsByTagName("body");

var carousel_img_height = window.screen.height - navbar.offsetHeight;

console.log("height: " + window.screen.height + "px")

carousel_img_container[0].setAttribute("style","height: " + carousel_img_height + "px")

