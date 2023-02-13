const showNavButton = document.getElementById("show_nav_menu_button");
const nav = document.getElementById("header_nav");
const menuOpen = document.getElementById("menu_open");
const menuClose = document.getElementById("menu_close");
const menuText = document.getElementById("menu_text");

function toggleNavMenu() {
    console.log("toggleNavMenu OK !");
    console.log(menuText.textContent);

    // #1 : changer le bouton 'menu' en bouton 'fermer'
    menuText.textContent === "☰" ? (menuText.textContent = "X") : (menuText.textContent = "☰");

    // #2 : animer la disparition du menu
    if (window.innerWidth < 1080) {
        nav.classList.toggle("slide_down");
    } else {
        nav.classList.toggle("slide_right");
    }

    // #3 : en fonction de la taille du viewport
    console.log(window.innerHeight, window.innerWidth);
}
