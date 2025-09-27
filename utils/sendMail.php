<?php

// Autoload the required files
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/SMTP.php';

// Load configuration
$config = require '../config/config.php';

// Create an instance of PHPMailer
$mail = new \PHPMailer\PHPMailer\PHPMailer();

try {
    //Server settings
    $mail->isSMTP();  // Send using SMTP
    $mail->Host = $config['mailConfig']['host'];  // Set the SMTP server to Gmail
    $mail->SMTPAuth = true;  // Enable SMTP authentication
    $mail->Username = $config['mailConfig']['email'];  // Your Gmail address
    $mail->Password = $config['mailConfig']['password'];  // Your Gmail app password (not your Gmail account password)
    $mail->SMTPSecure = \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;  // Enable TLS encryption
    $mail->Port = $config['mailConfig']['port'];  // TCP port to connect to

    //Recipients
    $mail->setFrom($_POST['email'], $_POST['name']);
    $mail->addAddress($config['mailConfig']['email'], $config['app_name']);  // Add a recipient

    // Content
    $mail->isHTML(true);  // Set email format to HTML
    $mail->Subject = "Web Inquiry - " . $_POST['subject'];
    $mail->Body    = '<b>Name: </b>'.$_POST['name'].'<br><b>Email: </b>'.$_POST['email'].'<br><b>Message: </b>'.$_POST['message'];
    $mail->AltBody = 'New customer message received from webapp';

    // Send email
    $mail->send();
    echo 0;
} catch (Exception $e) {
    echo 1;
}
?>
