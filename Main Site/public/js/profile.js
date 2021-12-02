"use strict";

var showBtn = document.querySelectorAll('.show');
var copyBtn = document.querySelector('.copy_invite');
showBtn.forEach(function (btn) {
  btn.addEventListener('click', function (e) {
    return showPass(e);
  });
});

var showPass = function showPass(e) {
  if (e.target.previousSibling.getAttribute('type') == "text") {
    e.target.previousSibling.setAttribute('type', 'password');
  } else {
    e.target.previousSibling.setAttribute('type', 'text');
  }
};

function copy() {
  var inviteText = document.querySelector('#invite_code');
  inviteText.removeAttribute('disabled');
  inviteText.select();
  document.execCommand("copy");
  inviteText.setAttribute('disabled', 'disabled');
}

copyBtn.addEventListener('click', copy);