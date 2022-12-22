<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'mutiabudiutami@gmail.com';
    $mail->Password = 'nwdbnktbygnlftbh';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    $mail->setForm('mutiabudiutami@gmail.com', 'Mutia');

    $mail->addAddress($_POST['email']);
    
    $mail->isHTML(true);
 
    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];

    $mail->send();

    
if (!$mail->send()) {
    echo "ERROR! Email is not sent!";
}
else{
    echo "Email has been sent successfully";
}
}else{
    echo "Email error : ";
}
?>