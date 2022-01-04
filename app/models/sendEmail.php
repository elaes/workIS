<?php

// require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// require 'PHPMailer-master/src/Exception.php';
// require 'PHPMailer-master/src/PHPMailer.php';
// require 'PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = $_ENV['EMAIL_USER'];
$mail->Password   = $_ENV['EMAIL_PASS'];

$mail->IsHTML(true);
$mail->AddAddress($this->to, $this->to);
$mail->SetFrom("lassana.traore2022@gmail.com", "Lassana TRAORE");
$mail->AddReplyTo("lassana.traore2022@gmail.com", "Lassana TRAORE");
// $mail->AddCC("lassana.traore2022@gmail.com", "cc-recipient-name");
$mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";

ob_start();
include '../app/views/email/content.php';
$this->content = ob_get_clean();

$mail->MsgHTML($content); 
if(!$mail->Send()) {
  $this->result = "Error while sending Email.";
  // var_dump($mail);
} else {
  $this->result = "Email sent successfully";
}