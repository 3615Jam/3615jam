<?php
// ==========================================
// test pour s'assurer du fonctionnement : 
echo "Email : " . htmlspecialchars($_POST['input_email']);
echo "<br>";
echo "Message : " . htmlspecialchars($_POST['input_message']);

// ==========================================
// envoi d'un mail avec les infos du formulaire : 

// L'expéditeur :
$sender = htmlspecialchars($_POST['input_email']);

// Le message :
$message = htmlspecialchars($_POST['input_message']) . "\r\n";

// Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap() :
$message = wordwrap($message, 70, "\r\n");

// Le sujet : 
$subject = 'From ' . $sender . ' via 3615jam contact form';

// Envoi du mail : 
mail('garciajeanmarc@gmail.com', $subject, $message);

mail('garciajeanmarc@gmail.com', 'test_php_mail', 'blah blah blah\r\n');

echo $message;
echo $sender;
echo $subject;
