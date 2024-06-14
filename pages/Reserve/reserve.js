$(document).ready(setInitialNavbarMargin);
$(document).ready(underlineCurrentPage);
$(document).ready(setMinDate);
$(document).ready(setMinMaxTime);
$("input#date").change(setMinMaxTime);
window.addEventListener("resize", updateNavbarMargin, true);

let initialScreenWidth = 0;
let initialNavbarListLeftOffset = 0;

function setInitialNavbarMargin(){
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

function redirectToConfirmation(event){
    event.preventDefault();
    window.location.href = '/finalproject/Reserve/submit-reservation.html';
}

function setMinDate(){
    var today = new Date();
    var dd = String(today.getDate()+1).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();

    today = yyyy + '-' + mm + '-' + dd;
    $('#date').attr("min", today);
}
function setMinMaxTime(){
    let date = document.getElementById("date").value;
    let inputTime = document.getElementById("time");
    console.log(date);
    let chosenDate = new Date (date).getDay();
    if(chosenDate>0 && chosenDate<6){
        inputTime.min = "09:00";
        inputTime.max = "19:00";
    }else{
        inputTime.min = "09:00";
        inputTime.max = "18:00";
    }
}
