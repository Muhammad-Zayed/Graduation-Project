"use strict";

/*************************  start grid height configration ******************************/
var gridHightConfigration = function gridHightConfigration() {
  var content = document.querySelector('.content');
  var meetAside = document.querySelector('.meet_aside');
  var meetHead = document.querySelector('.meet_head');
  var message = document.querySelector('.messages');
  var users = document.querySelector('.users');
  var usersContainer = document.querySelector('.users_container');
  var messagesContainer = document.querySelector('.messages_container');
  var windowHeight = window.innerHeight;
  content.style.height = windowHeight - meetHead.offsetHeight + "px";
  meetAside.style.height = windowHeight - meetHead.offsetHeight + "px";
  message.style.height = (windowHeight - meetHead.offsetHeight) / 2 + "px";
  users.style.height = (windowHeight - meetHead.offsetHeight) / 2 + "px";
  usersContainer.style.height = (windowHeight - meetHead.offsetHeight) / 2 - 32 + "px";
  messagesContainer.style.height = (windowHeight - meetHead.offsetHeight) / 2 - 32 - 55 + "px";
};

gridHightConfigration();

window.onresize = function (e) {
  return gridHightConfigration();
};
/*************************  end grid height configration ******************************/

/*********************metting header information****************/


var mettInfBtn = document.querySelector('.metting_info_btn');
var mettInf = document.querySelector('.metting_info');
mettInfBtn.addEventListener('click', function (e) {
  mettInfBtn.classList.toggle('active');
  mettInf.classList.toggle('active');
});
/*********************metting header information****************/

var asideToggle = document.querySelector('.toggle_aside');
var meetAside = document.querySelector('.meet_aside');
asideToggle.addEventListener('click', function (e) {
  asideToggle.classList.toggle('active');
  meetAside.classList.toggle('active');
});
/****************metting option events****************/

var options = document.querySelectorAll('.meet_options>.option');
options.forEach(function (option) {
  option.addEventListener('click', function (e) {
    var ele = e.target.classList; //for mic

    if (ele[1].includes('microphone')) {
      e.target.parentNode.classList.toggle('active');
      ele.toggle('fa-microphone');
      ele.toggle('fa-microphone-slash');
    } //for videos
    else if (ele[1].includes('video')) {
        e.target.parentNode.classList.toggle('active');
        ele.toggle('fa-video');
        ele.toggle('fa-video-slash');
      }
  });
});
/****************metting option events****************/