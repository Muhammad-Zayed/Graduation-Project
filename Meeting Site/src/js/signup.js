//////validation for sign up form
const nameInput = document.querySelector('#user_name');
const emailInput = document.querySelector('#email');
const passwordInput = document.querySelector('#password');
const confPasswordInput = document.querySelector('#confirm_password');
const nameErroriIcon = document.querySelector('#name_error_icon');
const nameErroriMess = document.querySelector('#name_error_mess');
const emailErroriIcon = document.querySelector('#email_error_icon');
const emailErroriMess = document.querySelector('#email_error_mess');
const passwordErroriIcon = document.querySelector('#password_error_icon');
const passwordErroriMess = document.querySelector('#password_error_mess');
const confirmPasswordErroriIcon = document.querySelector('#confirm_password_error_icon');
const confirmPasswordErroriMess = document.querySelector('#confirm_password_error_mess');


nameInput.addEventListener('keyup', e => nameValidation(e));
emailInput.addEventListener('keyup', e => emailValidation(e));
passwordInput.addEventListener('keyup', e => passwordValidation(e));
confPasswordInput.addEventListener('keyup', e => confirmPasswordValidation(e));


//name validation 
const  nameValidation = (e) => {
    if (nameInput.value == "") {
        e.target.offsetParent.classList.remove('active');
        nameErroriMess.textContent= "";
        nameErroriIcon.classList.remove('fa-check-circle');
        nameErroriMess.classList.remove('fa-exclamation-circle');
    }else{
        let re = /^[A-Za-z ]+$/;
        if (re.test(nameInput.value)) {
            e.target.offsetParent.classList.remove('active');
            nameErroriIcon.classList.remove('fa-exclamation-circle');
            nameErroriMess.textContent= "";
            nameErroriIcon.classList.add('fa-check-circle');
        }else{
            e.target.offsetParent.classList.add('active');
            nameErroriIcon.classList.remove('fa-check-circle');
            nameErroriIcon.classList.add('fa-exclamation-circle');
            nameErroriMess.textContent= "name souldn't contain numbers";
        }
    }
}


//email validation
const  emailValidation = (e) => {
    if (emailInput.value == "") {
        e.target.offsetParent.classList.remove('active');
        emailErroriMess.textContent= "";
        emailErroriIcon.classList.remove('fa-check-circle');
        emailErroriIcon.classList.remove('fa-exclamation-circle');
    }else{
        let re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        if (re.test(emailInput.value)) {
            e.target.offsetParent.classList.remove('active');
            emailErroriIcon.classList.remove('fa-exclamation-circle');
            emailErroriMess.textContent= "";
            emailErroriIcon.classList.add('fa-check-circle');
        }else{
            e.target.offsetParent.classList.add('active');
            emailErroriIcon.classList.remove('fa-check-circle');
            emailErroriIcon.classList.add('fa-exclamation-circle');
            emailErroriMess.textContent= "email sould be ex@ex.ex";
        }
    }
}

//password validation
const  passwordValidation = (e) => {
    if (passwordInput.value == "") {
        e.target.offsetParent.classList.remove('active');
        passwordErroriMess.textContent= "";
        passwordErroriIcon.classList.remove('fa-check-circle');
        passwordErroriIcon.classList.remove('fa-exclamation-circle');
    }else{
        let re = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
        if (re.test(passwordInput.value)) {
            e.target.offsetParent.classList.remove('active');
            passwordErroriIcon.classList.remove('fa-exclamation-circle');
            passwordErroriMess.textContent= "";
            passwordErroriIcon.classList.add('fa-check-circle');
        }else{
            e.target.offsetParent.classList.add('active');
            passwordErroriIcon.classList.remove('fa-check-circle');
            passwordErroriIcon.classList.add('fa-exclamation-circle');
            passwordErroriMess.textContent= "password sould be Minimum eight characters, at least one letter and one number";
        }
    }
}

//confirm password validation
const  confirmPasswordValidation = (e) => {
    if (confPasswordInput.value == "") {
        e.target.offsetParent.classList.remove('active');
        confirmPasswordErroriMess.textContent= "";
        confirmPasswordErroriIcon.classList.remove('fa-check-circle');
        confirmPasswordErroriIcon.classList.remove('fa-exclamation-circle');
    }else{
        let re = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
        if (passwordInput.value === confPasswordInput.value) {
            e.target.offsetParent.classList.remove('active');
            confirmPasswordErroriIcon.classList.remove('fa-exclamation-circle');
            confirmPasswordErroriMess.textContent= "";
            confirmPasswordErroriIcon.classList.add('fa-check-circle');
        }else{
            e.target.offsetParent.classList.add('active');
            confirmPasswordErroriIcon.classList.remove('fa-check-circle');
            confirmPasswordErroriIcon.classList.add('fa-exclamation-circle');
            confirmPasswordErroriMess.textContent= "password not match!";
        }
    }
}

