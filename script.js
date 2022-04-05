/**
 * ==========================================
 * SUBMIT FORM USING FETCH :
 *
 * Lors de la soumission du formulaire de contact sur la page "pro.html",
 * ce script empêche le changement de page (vers une page vide)
 * ==========================================
 */

function fetchpost() {
    // (A) GET FORM DATA
    let data = new URLSearchParams();
    data.append("input_email", document.getElementById("input_email").value);
    data.append("input_message", document.getElementById("input_message").value);

    // (B) FETCH
    fetch("contact_form.php", {
        method: "post",
        body: data,
    })
        .then(function (response) {
            return response.text();
        })
        .then(function (text) {
            // console.log(text);
            // alert("C'est bien envoyé ! Merci ;)");
            // si tout se passe correctement, on cache la modal du formulaire ...
            let modalForm = bootstrap.Modal.getInstance(document.getElementById("contact_form_modal"));
            modalForm.hide();
            // ... et on affiche la modal d'envoi avec succès pendant 3 secondes avant de la cacher
            let modalSuccess = new bootstrap.Modal(document.getElementById("contact_form_modal_success"));
            modalSuccess.show();
            setTimeout(function () {
                modalSuccess.hide();
            }, 3000);
        })
        .catch(function (error) {
            console.log(error);
            // alert("Oups ! Il y a eu une erreur, veuillez recommencer svp...");
            // en cas d'erreur, on affiche une modal informative ("veuillez recommencer") pendant 3 secondes
            let modalFail = new bootstrap.Modal(document.getElementById("contact_form_modal_fail"));
            modalFail.show();
            setTimeout(function () {
                modalFail.hide();
            }, 3000);
        });

    // (C) PREVENT HTML FORM SUBMIT
    return false;
}

/**
 * ==========================================
 * Modifier image de fond minitel au survol des boutons "dev" et "apple"
 * ==========================================
 */

let image = document.getElementById("main_pix");
let start = image.src;
document.getElementById("dev").onmousemove = function () {
    image.src = "img/dev_logo_pixel.png";
};
document.getElementById("dev").onmouseout = function () {
    image.src = start;
};
document.getElementById("apple").onmousemove = function () {
    image.src = "img/apple_logo_pixel.png";
};
document.getElementById("apple").onmouseout = function () {
    image.src = start;
};

/**
 * ==========================================
 * UNDERCONSTRUCTION :
 *
 * Pendant la maintenance, empêche de cliquer sur les boutons (liens)
 * et affiche l'image de sablier
 * ==========================================
 */

// const minitelKeyboard = document.getElementById("keyboard");
// const minitelScreen = document.getElementById("screen");
// const minitelImage = document.getElementById("main_pix");
// let originalImage = minitelImage.src;
// let allLinks = document.getElementsByTagName("a");

// Array.from(allLinks).forEach((element) => {
//     element.addEventListener(
//         "click",
//         function (event) {
//             event.preventDefault();
//             alert("En cours de construction, de retour très vite ;)");
//         },
//         false
//     );
// });

// keyboard.onmousemove = function () {
//     minitelScreen.setAttribute("class", "screen_white");
//     minitelImage.src = "img/sablier.gif";
// };
// keyboard.onmouseout = function () {
//     minitelScreen.setAttribute("class", "screen_black");
//     minitelImage.src = originalImage;
// };
