const darkModeSwitch = document.getElementsByClassName("dark_mode_switch");
const formZoneText = document.getElementsByClassName("form_zone_text");
const legendLogo = document.getElementsByClassName("legend_logo");

function switchMode() {
    // switch le body en mode dark
    document.body.classList.toggle("dark_mode");
    // cache l'élément 'lune' en mode dark ou l'élément 'soleil' en mode light
    Array.from(darkModeSwitch).forEach((element) => {
        element.classList.toggle("hidden");
    });
    // swtich les zones de texte et input en mode dark
    Array.from(formZoneText).forEach((element) => {
        element.classList.toggle("dark_mode_input");
    });
    // switch les logos noir en blanc en mode dark
    Array.from(legendLogo).forEach((element) => {
        element.classList.toggle("dark_mode_img");
    });
}
