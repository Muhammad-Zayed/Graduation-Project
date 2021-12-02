"use strict";

var joinMeet = document.querySelector('#join_meeting');
var closeBtn = document.querySelector('.close_btn');
var joinBox = document.querySelector('.join_box_container');
joinMeet.addEventListener('click', function (e) {
  return open(e);
});
closeBtn.addEventListener('click', function (e) {
  return close(e);
});

var open = function open(e) {
  joinBox.classList.toggle('nonactive');
  joinBox.classList.toggle('active');
};

var close = function close(e) {
  joinBox.classList.toggle('nonactive');
  joinBox.classList.toggle('active');
};