let joinMeet  = document.querySelector('#join_meeting');
let closeBtn  = document.querySelector('.close_btn');
let joinBox   = document.querySelector('.join_box_container');

joinMeet.addEventListener('click', e => open(e));
closeBtn.addEventListener('click', e => close(e));

let open = e => {
    joinBox.classList.toggle('nonactive');
    joinBox.classList.toggle('active');
}
let close = e => {
    joinBox.classList.toggle('nonactive');
    joinBox.classList.toggle('active');
}