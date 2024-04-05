<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST['send']))
{
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = '1js20cs185@gmail.com';
    $mail->Password = 'hkkl wght nqlm eeus';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('1js20cs185@gmail.com');
    $mail->addAddress($_POST['email']);
    $mail->isHTML(true);
    $mail->Subject = 'courseconnect';
    $mail->Body = 'Congrats! Your msg received';
    $mail->send();

    echo
    "
    <script>
    alert('Email sent successfully!');
    </script>
    ";
}

?>