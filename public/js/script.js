// Navbar fixed
// window.onscroll = function () {
//     const header = document.querySelector('header');
//     const fixedNav = header.offsetTop;

//     if (window.pageYOffset > fixedNav) {
//         header.classList.add('navbar-fixed');
//     } else {
//         header.classList.remove('navbar-fixed');
//     }
// };
window.addEventListener('scroll', (e) => {
    const nav = document.querySelector('.header');
    if (window.pageYOffset > 0) {
        nav.classList.add('navbar-fixed');
    } else {
        nav.classList.remove('navbar-fixed');
    }
});

//Nav Active
let section = document.querySelectorAll('section');
let navActive = document.querySelectorAll('.list');

window.onscroll = () => {
    section.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop;
        let id = sec.getAttribute('id');

        if (top >= offset - 70) {
            navActive.forEach(active => {
                active.classList.remove('nav-active');
                document.querySelector('.header [href*=' + id + ']').classList.add(
                    'nav-active');
            });
        };
    });
};

// Hamburger
const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');

hamburger.addEventListener('click', function () {
    hamburger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('hidden');
});
