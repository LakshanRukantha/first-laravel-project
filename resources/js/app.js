import "./bootstrap";

// Navbar Menu

const navBtn = document.getElementById("nav-btn");

const toggleNavMenu = async() => {
    const mobileMenu = document.getElementById("mobile-menu");
    mobileMenu.classList.toggle('top-[3.8rem]');
};

navBtn.addEventListener("click", toggleNavMenu);