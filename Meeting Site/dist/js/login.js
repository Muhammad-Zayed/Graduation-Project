"use strict";

//////validation for login form
var emailInput = document.querySelector('#email');
var passwordInput = document.querySelector('#password');
var emailErroriIcon = document.querySelector('#email_error_icon');
var emailErroriMess = document.querySelector('#email_error_mess');
var passwordErroriIcon = document.querySelector('#password_error_icon');
var passwordErroriMess = document.querySelector('#password_error_mess');
emailInput.addEventListener('keyup', function (e) {
  return emailValidation(e);
});
passwordInput.addEventListener('keyup', function (e) {
  return passwordValidation(e);
}); //email validation

var emailValidation = function emailValidation(e) {
  if (emailInput.value == "") {
    e.target.offsetParent.classList.remove('active');
    emailErroriMess.textContent = "";
    emailErroriIcon.classList.remove('fa-check-circle');
    emailErroriIcon.classList.remove('fa-exclamation-circle');
  } else {
    var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if (re.test(emailInput.value)) {
      e.target.offsetParent.classList.remove('active');
      emailErroriIcon.classList.remove('fa-exclamation-circle');
      emailErroriMess.textContent = "";
      emailErroriIcon.classList.add('fa-check-circle');
    } else {
      e.target.offsetParent.classList.add('active');
      emailErroriIcon.classList.remove('fa-check-circle');
      emailErroriIcon.classList.add('fa-exclamation-circle');
      emailErroriMess.textContent = "email sould be ex@ex.ex";
    }
  }
}; //password validation


var passwordValidation = function passwordValidation(e) {
  if (passwordInput.value == "") {
    e.target.offsetParent.classList.remove('active');
    passwordErroriMess.textContent = "";
    passwordErroriIcon.classList.remove('fa-check-circle');
    passwordErroriIcon.classList.remove('fa-exclamation-circle');
  } else {
    var re = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

    if (re.test(passwordInput.value)) {
      e.target.offsetParent.classList.remove('active');
      passwordErroriIcon.classList.remove('fa-exclamation-circle');
      passwordErroriMess.textContent = "";
      passwordErroriIcon.classList.add('fa-check-circle');
    } else {
      e.target.offsetParent.classList.add('active');
      passwordErroriIcon.classList.remove('fa-check-circle');
      passwordErroriIcon.classList.add('fa-exclamation-circle');
      passwordErroriMess.textContent = "password sould be Minimum eight characters, at least one letter and one number";
    }
  }
};