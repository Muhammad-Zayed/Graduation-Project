"use strict";

var loadPageCont = document.querySelector('.loading_container');
window.addEventListener('load', function (e) {
  return loadPage(e);
});

var loadPage = function loadPage(e) {
  loadPageCont.classList.add('active');
};