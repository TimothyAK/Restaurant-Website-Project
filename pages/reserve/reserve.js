$(document).ready(function() {
    setInitialNavbarMargin();
    underlineCurrentPage();
    setDateMonthBoundaries();
    $(window).resize(updateNavbarMargin);
    $("input#available-months").change(updateDateMonthBoundaries);
});


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

function underlineCurrentPage() {
    if(document.URL.includes("home.html")) {
        document.querySelector("a#home-link").classList.add("active");
    } else if(document.URL.includes("about.html")) {
        document.querySelector("a#about-link").classList.add("active");
    } else if(document.URL.includes("reserve.html")) {
        document.querySelector("a#reserve-link").classList.add("active");
    }
}

function setDateMonthBoundaries() {
    const today = new Date();
    const minDate = today.getDate() + 1;
    const maxDate = new Date(today.getFullYear(), today.getMonth() + 1, 0).getDate();
    const thisMonth = today.getMonth()+1;

    let dateInputForm = document.getElementById("available-dates");
    let monthInputForm = document.getElementById("available-months");

    dateInputForm.setAttribute("min", minDate);
    dateInputForm.setAttribute("max", maxDate);

    monthInputForm.setAttribute("min", thisMonth);
    monthInputForm.setAttribute("max", 12);
}

function updateDateMonthBoundaries() {
    const today = new Date();
    const thisMonth = today.getMonth() + 1;

    let dateInputForm = document.getElementById("available-dates");
    let monthInputForm = document.getElementById("available-months");

    let currentMonth = monthInputForm.value;
    let minDate = new Date(today.getFullYear(), currentMonth, 1).getDate();
    let maxDate = new Date(today.getFullYear(), currentMonth, 0).getDate();

    if(currentMonth != thisMonth) {
        dateInputForm.setAttribute("min", minDate);
        dateInputForm.setAttribute("max", maxDate);
    } else if (currentMonth == thisMonth) {
        setDateMonthBoundaries();
    }
}
