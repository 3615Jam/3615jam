const nav = document.getElementById("navnav");
const centralDisplay = document.getElementById("central_display");

function toggleNavMenu() {
    window.innerWidth < 1080 ? nav.classList.toggle("slide_down") : centralDisplay.classList.toggle("slide_right");
    console.log("##### toggleNavMenu OK #####");
}

// ------------------------------------------------------------
// mise à jour de l'afficheur de résolution de la fenêtre :

const widthDisplay = document.getElementById("width");

function updateWidthDisplay() {
    widthDisplay.textContent = window.innerWidth;
}

updateWidthDisplay();

window.addEventListener("resize", updateWidthDisplay);
