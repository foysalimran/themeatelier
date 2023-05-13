/**
 * Table of contents
 * -----------------------------------
 * 1.FIXED HEADER
 */
"use strict";

const PATH = {};

/******************** FIXED HEADER ********************/
PATH.HeaderFixed = function () {
  const varHeaderFix = window.pageYOffset >= 70,
    navbar = document.querySelector(".ta-header");
  if (varHeaderFix) {
    navbar.classList.add("ta-sticky-menu");
  } else {
    navbar.classList.remove("ta-sticky-menu");
  }
};

/******************** TOGGLE MENU ********************/
const menuButton = document.getElementById("menu-button");
const toggleMenu = document.getElementById("menu");

menuButton.addEventListener("click", function () {
  toggleMenu.classList.toggle("menu-active");
});
/******************** NEW YEAR ********************/
document.getElementById("currentYear").innerHTML = new Date().getFullYear();

/******************** WINDOW ON SCROLL FUNCTION ********************/
window.addEventListener("scroll", function () {
  PATH.HeaderFixed();
});
