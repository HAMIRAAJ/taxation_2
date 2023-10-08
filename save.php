<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'vendor/phpmailer/src/Exception.php';
require 'vendor/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the content of the hidden div sent from the AJAX request
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    // send email to admin
    $to = "rajpoothamza041@gmail.com";
    $subject = "Gamarra, CPA Inc.Tax Services";
    $message = "<div>NAME:". $name ."</div>"."<div>EMAIL:".$email."</div>"."<div>MESSAGE:". $message."</div>";
    $from = "rajpoothamza041@gmail.com ";


    // Create a new PHPMailer instance
    $mail = new PHPMailer;

    // Set up SMTP (if using SMTP for sending)
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP host
    $mail->SMTPAuth = true;
    $mail->Username = 'rajpoothamza041@gmail.com'; // Replace with your SMTP username
    $mail->Password = 'pfac hbac hgba zybz'; // Replace with your SMTP password
    $mail->SMTPSecure = 'ssl'; // Use 'tls' or 'ssl' as per your server configuration
    $mail->Port = 465; // Replace with the appropriate SMTP port

    // Set up email content
    $mail->setFrom($from, 'Gamarra, CPA Inc.Tax Services'); // Replace with your sender email and name
    $mail->addAddress($to, 'Gamarra, CPA Inc.Tax Services'); // Replace with the recipient email and name
    $mail->Subject = $subject;

    // Set the email body as HTML content
    $mail->isHTML(true);
    $mail->Body = $message;

    // Send the email
    if ($mail->send()) {
        // echo 'Email sent successfully!';
        header("Location: http://localhost/taxation/email_success.html");
    } else {
        echo 'Error: Unable to send email. ' . $mail->ErrorInfo;
    }
}
?>