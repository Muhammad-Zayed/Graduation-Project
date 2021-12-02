"use strict";

var hidBtns = document.querySelectorAll('.hide_not');
hidBtns.forEach(function (b) {
  b.addEventListener('click', function (e) {
    e.target.parentNode.style.display = 'none';
  });
});