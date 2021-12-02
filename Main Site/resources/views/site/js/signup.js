"use strict";

//////validation for sign up form
var nameInput = document.querySelector('#user_name');
var emailInput = document.querySelector('#email');
var passwordInput = document.querySelector('#password');
var confPasswordInput = document.querySelector('#confirm_password');
var nameErroriIcon = document.querySelector('#name_error_icon');
var nameErroriMess = document.querySelector('#name_error_mess');
var emailErroriIcon = document.querySelector('#email_error_icon');
var emailErroriMess = document.querySelector('#email_error_mess');
var passwordErroriIcon = document.querySelector('#password_error_icon');
var passwordErroriMess = document.querySelector('#password_error_mess');
var confirmPasswordErroriIcon = document.querySelector('#confirm_password_error_icon');
var confirmPasswordErroriMess = document.querySelector('#confirm_password_error_mess');
nameInput.addEventListener('keyup', function (e) {
  return nameValidation(e);
});
emailInput.addEventListener('keyup', function (e) {
  return emailValidation(e);
});
passwordInput.addEventListener('keyup', function (e) {
  return passwordValidation(e);
});
confPasswordInput.addEventListener('keyup', function (e) {
  return confirmPasswordValidation(e);
}); //name validation 

var nameValidation = function nameValidation(e) {
  if (nameInput.value == "") {
    e.target.offsetParent.classList.remove('active');
    nameErroriMess.textContent = "";
    nameErroriIcon.classList.remove('fa-check-circle');
    nameErroriMess.classList.remove('fa-exclamation-circle');
  } else {
    var re = /^[A-Za-z ]+$/;

    if (re.test(nameInput.value)) {
      e.target.offsetParent.classList.remove('active');
      nameErroriIcon.classList.remove('fa-exclamation-circle');
      nameErroriMess.textContent = "";
      nameErroriIcon.classList.add('fa-check-circle');
    } else {
      e.target.offsetParent.classList.add('active');
      nameErroriIcon.classList.remove('fa-check-circle');
      nameErroriIcon.classList.add('fa-exclamation-circle');
      nameErroriMess.textContent = "name souldn't contain numbers";
    }
  }
}; //email validation


var emailValidation = function emailValidation(e) {
  if (emailInput.value == "") {
    e.target.offsetParent.classList.remove('active');
    emailErroriMess.textContent = "";
    emailErroriIcon.classList.remove('fa-check-circle');
    emailErroriIcon.classList.remove('fa-exclamation-circle');
  } else {
    var re = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;

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
}; //confirm password validation


var confirmPasswordValidation = function confirmPasswordValidation(e) {
  if (confPasswordInput.value == "") {
    e.target.offsetParent.classList.remove('active');
    confirmPasswordErroriMess.textContent = "";
    confirmPasswordErroriIcon.classList.remove('fa-check-circle');
    confirmPasswordErroriIcon.classList.remove('fa-exclamation-circle');
  } else {
    var re = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

    if (passwordInput.value === confPasswordInput.value) {
      e.target.offsetParent.classList.remove('active');
      confirmPasswordErroriIcon.classList.remove('fa-exclamation-circle');
      confirmPasswordErroriMess.textContent = "";
      confirmPasswordErroriIcon.classList.add('fa-check-circle');
    } else {
      e.target.offsetParent.classList.add('active');
      confirmPasswordErroriIcon.classList.remove('fa-check-circle');
      confirmPasswordErroriIcon.classList.add('fa-exclamation-circle');
      confirmPasswordErroriMess.textContent = "password not match!";
    }
  }
};