const darkModeSwitch = document.getElementById("dark_mode_switch");
const formZoneText = document.getElementsByClassName("form_zone_text");
const legendLogo = document.getElementsByClassName("legend_logo");
const icoMail = document.getElementById("ico_mail");
const icoPhone = document.getElementById("ico_phone");

function switchMode() {
    // switch le body en mode dark
    document.body.classList.toggle("dark_mode");

    // [V1] cache l'élément 'lune' en mode dark ou l'élément 'soleil' en mode light
    // Array.from(darkModeSwitch).forEach((element) => {
    //     element.classList.toggle("hidden");
    // });
    // [V2] change la source de l'image 'lune' pour celle de l'image 'soleil'
    darkModeSwitch.classList.toggle("sun");

    // swtich les zones de texte et input en mode dark
    Array.from(formZoneText).forEach((element) => {
        element.classList.toggle("dark_mode_input");
    });

    // switch les logos noir en blanc en mode dark :

    // [V1] : en applicant un filtre 'invert' à chaque élément
    // Array.from(legendLogo).forEach((element) => {
    //     element.classList.toggle("dark_mode_img");
    // });

    // [V2] : en changeant la source de chaque image
    if (icoMail) {
        icoMail.classList.toggle("ico_mail_white");
        icoPhone.classList.toggle("ico_phone_white");
        console.log("coucou icoMail !");
    }
}
