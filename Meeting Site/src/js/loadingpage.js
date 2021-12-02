const loadPageCont = document.querySelector('.loading_container');
window.addEventListener('load',  e => loadPage(e));

let loadPage = e => {
    loadPageCont.classList.add('active');
}