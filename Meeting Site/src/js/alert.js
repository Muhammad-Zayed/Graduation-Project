let hidBtns = document.querySelectorAll('.hide_not');



hidBtns.forEach(b => {
    b.addEventListener('click', e => {
        e.target.parentNode.style.display = 'none';
    });
})

