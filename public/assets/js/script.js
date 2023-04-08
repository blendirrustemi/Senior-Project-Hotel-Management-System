const menuIcon = document.querySelector(".menu-icon")
const navbarLinks = document.querySelector(".navbar-links")
const contactInfo = document.querySelector(".contact-info")

menuIcon.addEventListener('click', () => {
    navbarLinks.classList.toggle('mobile-menu')
    contactInfo.classList.toggle('mobile-menu')
})