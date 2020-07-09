document.querySelector('.hamburger__menu').addEventListener('click', showMobileMenu);
document.querySelector('.close-mobile-menu').addEventListener('click', closeMobileMenu);

function showMobileMenu(params) {
  document.querySelector('#mobile-menu').classList.add('mobile-menu-active')
  window.onscroll = function () { window.scrollTo(0, 0); };
}

function closeMobileMenu(params) {
  document.querySelector('#mobile-menu').classList.remove('mobile-menu-active')
  window.onscroll=function(){};
}