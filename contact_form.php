<?php
// ==========================================
// envoi d'un mail avec les infos du formulaire : 

// Expéditeur (après nettoyage des caractères spéciaux) :
$sender = htmlspecialchars($_POST['input_email']);

// Message (après nettoyage des caractères spéciaux) :
$message = htmlspecialchars($_POST['input_message']) . "\r\n";

// Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap() :
$message = wordwrap($message, 70, "\r\n");

// Destinataire : 
$to  = 'garciajeanmarc@gmail.com';

// Sujet : 
$subject = '3615jam - Contact via formulaire : ' . $sender;

// Mise en forme de l'email : 
$message_body = '
    <html>
        <head>
            <title>3615jam : nouveau contact via formulaire</title>
        </head>
    <body>
        <fieldset style="margin: 1rem">
            <legend>Destinataire : </legend>
            <p>
                <a href="mailto:' . $sender . '">' . $sender . '</a>
            </p>
        </fieldset> 
        <fieldset style="margin: 1rem">
            <legend>Message : </legend>
            <p>' . $message . '</p>
        </fieldset> 
    </body>
    </html>
    ';

// Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// En-têtes additionnels
// $headers[] = 'From: 3615jam - Contact Form';
// $headers[] = 'To: Mary <mary@example.com>, Kelly <kelly@example.com>';
// $headers[] = 'Cc: anniversaire_archive@example.com';
// $headers[] = 'Bcc: anniversaire_verif@example.com';

// Envoi
mail($to, $subject, $message_body, implode("\r\n", $headers));
