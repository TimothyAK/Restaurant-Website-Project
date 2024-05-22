var navbar = document.getElementById("navbar");
var carousel_img_container = document.getElementsByClassName("carousel-inner");
var body_element = document.getElementsByTagName("body");

var carousel_img_height = window.innerHeight - navbar.offsetHeight;

console.log("height: " + carousel_img_height + "px")
console.log("width: " + window.innerWidth + "px")

carousel_img_container[0].setAttribute("style","height: " + carousel_img_height + "px")

var navbar_list = document.getElementsByClassName("navbar-nav")[0];
var navbar_brand = document.getElementsByClassName("navbar-brand")[0].getBoundingClientRect();

var navbar_margin_left = (window.innerWidth / 2) - navbar_brand.right + 10 + (navbar_brand.width / 2);

navbar_list.setAttribute("style", "margin-left: " + navbar_margin_left + "px");

console.log(navbar_brand.left + " = " + (window.innerWidth / 2));