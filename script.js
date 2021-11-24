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
            console.log(text);
            // alert("C'est bien envoyé ! Merci ;)");
            let modal = bootstrap.Modal.getInstance(document.getElementById("contact_form_modal"));
            modal.hide();
        })
        .catch(function (error) {
            console.log(error);
            alert("Oups ! Il y a eu une erreur, veuillez recommencer svp...");
        });

    // (C) PREVENT HTML FORM SUBMIT
    return false;
}
