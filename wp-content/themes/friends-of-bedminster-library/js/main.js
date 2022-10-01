
showMenu = () => {
  mobileMenu = document.getElementById('site-menu-small');
  hamburger = document.getElementById('hamburger-menu');
  logo = document.getElementById('logo');

  mobileMenu.classList.toggle("open");
  hamburger.classList.toggle("greenify");
  logo.classList.toggle("greenify");
  document.body.classList.toggle("disable-scroll");
}

showMenuContact = () => {
  mobileMenu = document.getElementById('site-menu-small');
  hamburgerContactMenu = document.getElementById('hamburger-menu-green');
  contactLogo = document.getElementById('contact-logo');

  mobileMenu.classList.toggle("open");
  hamburgerContactMenu.classList.toggle("darkgreenify")
  contactLogo.classList.toggle("darkgreenify");
  document.body.classList.toggle("disable-scroll");

}
