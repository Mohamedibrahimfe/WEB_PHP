const menu = document.querySelector('#mobile-menu');
const navBarLinks = document.querySelector('.navbar-menu');
const navLogo = document.querySelector('#navbar-logo');
const documentBody = document.querySelector('body');
const mobileMenu = function () {
    menu.classList.toggle('is-active');
    navBarLinks.classList.toggle('is-active');
    documentBody.classList.toggle('active');
};
menu.addEventListener('click', mobileMenu)
// 
// 
// 
const articlesDropdown = document.querySelector('.dropdown-toggle.nav-link');

articlesDropdown.addEventListener('click', function(event) {
    event.preventDefault();
    const dropdownMenu = this.nextElementSibling;
    dropdownMenu.classList.toggle('is-active');
});
// 
// 
// 
