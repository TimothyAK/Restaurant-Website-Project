$(document).ready(setInitialNavbarMargin);

window.addEventListener("resize", updateNavbarMargin, true);

let initialScreenWidth = 0;
let initialNavbarListLeftOffset = 0;

function setInitialNavbarMargin() {
    let navbarBrand = document.getElementById("navbar-brand");
    let navbarList = document.querySelectorAll(".navbar-list")[0];

    initialScreenWidth = window.innerWidth;
    let navbarBrandWidth = navbarBrand.getBoundingClientRect().width;

    let navbarBrandLeftCoordinate = navbarBrand.offsetLeft;
    
    initialNavbarListLeftOffset = (initialScreenWidth / 2) - navbarBrandLeftCoordinate - (navbarBrandWidth / 2);

    console.log("B");

    navbarList.style["left"] = initialNavbarListLeftOffset + "px";
}

function updateNavbarMargin() {
    let navbarList = document.querySelectorAll(".navbar-list")[0];

    let currentScreenWidth = window.innerWidth;
    let currentNavbarListLeftOffset;

    currentNavbarListLeftOffset = initialNavbarListLeftOffset - ((initialScreenWidth - currentScreenWidth) / 2);

    console.log("A");
    

    navbarList.style["left"] = currentNavbarListLeftOffset + "px";
}

function scrollDown() {
    // console.log("test");
    // $("body").animate({
    //     scrollTop:  681
    // }, 200)
    window.scrollTo(0, 691);
}
