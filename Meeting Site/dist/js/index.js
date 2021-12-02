"use strict";

//variables
var navBar = document.querySelector(".navbar");
var navs = document.querySelector(".navs");
var header = document.querySelector(".header");
var headerContent = document.querySelector(".header_content");
var scrollToTop = document.querySelector(".scroll_to_top");
var menuBtn = document.querySelector(".toggle_menu_btn"); //// start make navbar fixed when scroll ////

window.onscroll = function (e) {
  console.log();

  if (e.currentTarget.scrollY >= 300) {
    navBar.classList.add("fix");
    headerContent.classList.add("fix");
    scrollToTop.style.display = "block";
  } else {
    navBar.classList.remove("fix");
    headerContent.classList.remove("fix");
    scrollToTop.style.display = "none";
  }
}; //// end make navbar fixed when scroll ////
////********start custom scroll bar**********//////


$(document).ready(function () {
  $("html body").niceScroll({
    cursorcolor: "#000",
    cursorwidth: "5px",
    cursorborder: "#000",
    cursorborderradius: 0
  });
}); ////********end custom scroll bar**********//////

/** start toggle menu button **/

menuBtn.addEventListener("click", function (e) {
  menuBtn.classList.toggle("active");
  navs.classList.toggle("active");
});
/** end toggle menu button **/