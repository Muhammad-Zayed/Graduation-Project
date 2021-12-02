const showBtn = document.querySelectorAll('.show');
const copyBtn = document.querySelector('.copy_invite');

showBtn.forEach(btn => {
    btn.addEventListener('click', e => showPass(e));
})

const showPass = (e) => {
    if(e.target.previousSibling.getAttribute('type') == "text") {
        e.target.previousSibling.setAttribute('type', 'password');
    }else{
        e.target.previousSibling.setAttribute('type', 'text');
    }
}


function copy() {
    const inviteText = document.querySelector('#invite_code');
    inviteText.removeAttribute('disabled');
    inviteText.select();
    document.execCommand("copy");
    inviteText.setAttribute('disabled','disabled');
}

copyBtn.addEventListener('click', copy);