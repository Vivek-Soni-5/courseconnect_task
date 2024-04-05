<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST['send']))
{

    $b = "username: " . $_POST['name'] . PHP_EOL . " email: " . $_POST['email'] . PHP_EOL . " phone: " . $_POST['phone'] . PHP_EOL . " Received";

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
    $mail->Body = "Hi " . $_POST['name'] . "\nThanks for the enquiry!";
    $mail->send();

    $mail_admin = new PHPMailer(true);

    $mail_admin->isSMTP();
    $mail_admin->Host = 'smtp.gmail.com';
    $mail_admin->SMTPAuth = true;
    $mail_admin->Username = '1js20cs185@gmail.com';
    $mail_admin->Password = 'hkkl wght nqlm eeus';
    $mail_admin->SMTPSecure = 'ssl';
    $mail_admin->Port = 465;

    $mail_admin->setFrom('1js20cs185@gmail.com');
    $mail_admin->addAddress('1js20cs185@gmail.com');
    $mail_admin->isHTML(true);
    $mail_admin->Subject = 'courseconnect';
    $mail_admin->Body = $b;
    $mail_admin->send();

    echo
    "
    <script>
    alert('Email sent successfully!');
    </script>
    ";
}

?>