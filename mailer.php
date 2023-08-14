<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {

  require 'vendor/autoload.php';

  $mail = new PHPMailer(true);

  //$mail->SMTPDebug = 3;                               // Enable verbose debug output

  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'sandbox.smtp.mailtrap.io';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = '1a9a9fddf56007';                 // SMTP username
  $mail->Password = '5079e6d667ac99';                    // SMTP password
  $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 2525;                                    // TCP port to connect to

  $mail->setFrom($_POST['from'], 'Mailer');

  $mail->addAddress($_POST['to']);               // Name is optional
  $mail->addReplyTo($_POST['from']);
  
  $mail->Subject = $_POST['subject'];



  $mail->Body    = $_POST['message'];
  $mail->AltBody = 'Coming Soon';

  if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
    echo 'Message has been sent';
  }
}
?>
