<?php
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');
require('PHPMailer-master/PHPMailerAutoload.php');
include("PHPMailer-master/class.smtp.php");
require_once('PHPMailer-master/class.phpmailer.php');
include_once('../model/FlisolModel.php');

    $email = new FlisolModel();
    $email->setNome($_POST['nome']);
    $email->setEmail(strtolower($_POST['email']));
    $email->getNome();
    $email->getEmail();

//Create a new PHPMailer instance
$mail = new PHPMailer;
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "ceflisol@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "flisol@2016@admin";
//Set who the message is to be sent from
$mail->setFrom('ceflisol@gmail.com', 'Flisol Ceará 2016');
//Set an alternative reply-to address
$mail->addReplyTo('ceflisol@gmail.com', 'Flisol Ceará 2016');
//Set who the message is to be sent to
$mail->addAddress($email->email, $email->nome);
//$mail->addAddress('luis.maia@brainupti.com.br', 'Luis Guilherme');
//Set the subject line
$mail->Subject = 'Confirmação de inscrição Flisol Ceará 2016';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('ModeloViewEmail-2.php'), dirname(__FILE__));
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Adicionar anexo
//$mail->addAttachment('../public/img/logo-2016.png');
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
