let burgerbutton = document.getElementById('buttonOpen');
let closebutton = document.getElementById('buttonClose');
let sidenav = document.getElementById('menu-mobile');

function openMenu() {
    sidenav.classList.add('active');
}

function closeMenu() {
    sidenav.classList.remove('active');
}

burgerbutton.addEventListener('click', openMenu);
closebutton.addEventListener('click', closeMenu);