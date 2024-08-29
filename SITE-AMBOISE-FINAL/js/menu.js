// Variables pour le menu
const menu = document.querySelector(".menu");
const menuMain = menu.querySelector(".menu-main");
const goBack = menu.querySelector(".go-back");
const menuTrigger = document.querySelector(".mobile-menu-trigger");
const closeMenu = menu.querySelector(".mobile-menu-close");
let subMenu;

// Variables pour le header et le logo
const header = document.querySelector('.header');
const logo = document.querySelector('.logo img');

// Variables pour la vidéo
const video = document.querySelector('.hero-video');
let videoTimeout;  // Pour stocker le timeout de la vidéo
let lastScrollY = window.scrollY;

// Gestion du menu principal
menuMain.addEventListener("click", (e) => {
    if (!menu.classList.contains("active")) {
        return;
    }
    if (e.target.closest(".menu-item-has-children")) {
        const hasChildren = e.target.closest(".menu-item-has-children");
        showSubMenu(hasChildren);
    }
});
goBack.addEventListener("click", () => {
    hideSubMenu();
});
menuTrigger.addEventListener("click", () => {
    toggleMenu();
});
closeMenu.addEventListener("click", () => {
    toggleMenu();
});
document.querySelector(".menu-overlay").addEventListener("click", () => {
    toggleMenu();
});
function toggleMenu() {
    menu.classList.toggle("active");
    document.querySelector(".menu-overlay").classList.toggle("active");
}
function showSubMenu(hasChildren) {
    subMenu = hasChildren.querySelector(".sub-menu");
    subMenu.classList.add("active");
    subMenu.style.animation = "slideLeft 0.5s ease forwards";
    const menuTitle = hasChildren.querySelector("i").parentNode.childNodes[0].textContent;
    menu.querySelector(".current-menu-title").innerHTML = menuTitle;
    menu.querySelector(".mobile-menu-head").classList.add("active");
}
function hideSubMenu() {
    subMenu.style.animation = "slideRight 0.5s ease forwards";
    setTimeout(() => {
        subMenu.classList.remove("active");
    }, 300);
    menu.querySelector(".current-menu-title").innerHTML = "";
    menu.querySelector(".mobile-menu-head").classList.remove("active");
}

// Redimensionnement de la fenêtre
window.onresize = function () {
    if (this.innerWidth > 991) {
        if (menu.classList.contains("active")) {
            toggleMenu();
        }
    }
};

// Gestion du scroll
function handleScroll() {
    if (window.scrollY === 0) {
        header.classList.add('transparent');
        logo.classList.add('enlarged');
    } else {
        header.classList.remove('transparent');
        logo.classList.remove('enlarged');
    }

    if (window.scrollY > lastScrollY) {
        // L'utilisateur défile vers le bas
        header.classList.remove('visible');
        header.classList.add('hidden');
    } else {
        // L'utilisateur défile vers le haut
        header.classList.remove('hidden');
        header.classList.add('visible');
    }

    lastScrollY = window.scrollY;
}

// Appliquer les classes correctes au chargement
document.addEventListener('DOMContentLoaded', () => {
    header.classList.add('visible');
    if (window.scrollY === 0) {
        header.classList.add('transparent');
        logo.classList.add('enlarged');
    }
});


// Ecouter le scroll
window.addEventListener('scroll', handleScroll);
