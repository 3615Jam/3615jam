const darkModeSwitch = document.getElementsByClassName("dark_mode_switch");

function switchMode() {
    document.body.classList.toggle("dark_mode");
    Array.from(darkModeSwitch).forEach((element) => {
        element.classList.toggle("hidden");
    });
}
