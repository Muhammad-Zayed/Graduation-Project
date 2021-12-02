/*************************  start grid height configration ******************************/
const gridHightConfigration = () => {
    let content = document.querySelector('.content');
    let meetAside = document.querySelector('.meet_aside');
    let meetHead = document.querySelector('.meet_head');
    let message = document.querySelector('.messages');
    let users = document.querySelector('.users');
    let usersContainer = document.querySelector('.users_container');
    let messagesContainer = document.querySelector('.messages_container');
    let windowHeight = window.innerHeight;
    
    content.style.height = (windowHeight - meetHead.offsetHeight)+"px";
    meetAside.style.height = (windowHeight - meetHead.offsetHeight)+"px";
    message.style.height = (windowHeight - meetHead.offsetHeight)/2+"px";
    users.style.height = (windowHeight - meetHead.offsetHeight)/2+"px";
    usersContainer.style.height =  (windowHeight - meetHead.offsetHeight)/2-32+"px";
    messagesContainer.style.height =  (windowHeight - meetHead.offsetHeight)/2-32-55+"px";
}
gridHightConfigration();

window.onresize = e => gridHightConfigration();
/*************************  end grid height configration ******************************/




/*********************metting header information****************/
const mettInfBtn = document.querySelector('.metting_info_btn');
const mettInf = document.querySelector('.metting_info');
mettInfBtn.addEventListener('click', (e) => {
    mettInfBtn.classList.toggle('active');
    mettInf.classList.toggle('active');
})
/*********************metting header information****************/


let asideToggle = document.querySelector('.toggle_aside');
let meetAside = document.querySelector('.meet_aside');

asideToggle.addEventListener('click', e => {
    asideToggle.classList.toggle('active');
    meetAside.classList.toggle('active');
})

/****************metting option events****************/
const options = document.querySelectorAll('.meet_options>.option');

options.forEach(option => {
    option.addEventListener('click', (e) => {
        const ele = e.target.classList;
        //for mic
        if (ele[1].includes('microphone')) {
            e.target.parentNode.classList.toggle('active');
            ele.toggle('fa-microphone');
            ele.toggle('fa-microphone-slash');
        }
        //for videos
        else if (ele[1].includes('video')) {
            e.target.parentNode.classList.toggle('active');
            ele.toggle('fa-video');
            ele.toggle('fa-video-slash');
        }
    })
})
/****************metting option events****************/




