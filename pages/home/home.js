$(document).ready(setInitialNavbarMargin);
$(document).ready(underlineCurrentPage);

window.addEventListener("resize", updateNavbarMargin, true);

document.querySelector("#scrollDownButton").addEventListener("click", scrollDown);

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
    window.scrollTo(0, 691);
}

function underlineCurrentPage() {
    if(document.URL.includes("home.html")) {
        document.querySelector("a#home-link").classList.add("active");
    } else if(document.URL.includes("about.html")) {
        document.querySelector("a#home-link").classList.add("active");
    } else if(document.URL.includes("home.html")) {
        document.querySelector("a#home-link").classList.add("active");
    }
}
