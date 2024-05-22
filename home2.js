$(document).ready(setInitialNavbarMargin);

window.addEventListener("resize", updateNavbarMargin, true);

let initialScreenWidth;
let initialNavbarListLeftOffset;

function setInitialNavbarMargin() {
    let navbarBrand = document.getElementById("navbar-brand");
    let navbarList = document.querySelectorAll("div .navbar-list")[0];

    initialScreenWidth = window.innerWidth;
    let navbarBrandWidth = navbarBrand.getBoundingClientRect().width;

    let navbarBrandLeftCoordinate = navbarBrand.offsetLeft;
    
    initialNavbarListLeftOffset = (initialScreenWidth / 2) - navbarBrandLeftCoordinate - (navbarBrandWidth / 2) + 10;

    console.log(initialNavbarListLeftOffset);
    console.log(document.body.getBoundingClientRect().width);
    console.log(navbarBrandLeftCoordinate);

    navbarList.style["left"] = initialNavbarListLeftOffset + "px";
}

function updateNavbarMargin() {
    let navbarList = document.querySelectorAll("div .navbar-list")[0];

    let currentScreenWidth = window.innerWidth;
    let currentNavbarListLeftOffset;

    currentNavbarListLeftOffset = initialNavbarListLeftOffset - ((initialScreenWidth - currentScreenWidth) / 2)

    console.log(currentNavbarListLeftOffset);
    console.log(initialScreenWidth);
    console.log(currentScreenWidth);
    

    navbarList.style["left"] = currentNavbarListLeftOffset + "px";
}


