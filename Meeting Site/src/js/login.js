//////validation for login form
const emailInput = document.querySelector('#email');
const passwordInput = document.querySelector('#password');
const emailErroriIcon = document.querySelector('#email_error_icon');
const emailErroriMess = document.querySelector('#email_error_mess');
const passwordErroriIcon = document.querySelector('#password_error_icon');
const passwordErroriMess = document.querySelector('#password_error_mess');



emailInput.addEventListener('keyup', e => emailValidation(e));
passwordInput.addEventListener('keyup', e => passwordValidation(e));



//email validation
const  emailValidation = (e) => {
    if (emailInput.value == "") {
        e.target.offsetParent.classList.remove('active');
        emailErroriMess.textContent= "";
        emailErroriIcon.classList.remove('fa-check-circle');
        emailErroriIcon.classList.remove('fa-exclamation-circle');
    }else{
        let re =/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
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


