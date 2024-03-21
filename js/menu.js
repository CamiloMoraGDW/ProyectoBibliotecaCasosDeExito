function toggleMenu() {
    var menu = document.querySelector('.menu');
    menu.classList.toggle('menu-open');

    var footerMenu = document.querySelector('.footer-menu');
    footerMenu.style.display = (menu.classList.contains('menu-open')) ? 'block' : 'none';
}