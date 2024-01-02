<?php

$email = $_POST['email'];
$name  = $_POST['name'];
$phone = $_POST['phone'];
$text = $_POST['textarea'];

if (!empty($email) && !empty($text)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $receiver = 'ibrahim.elmliji01@gmail.com';
        $subject = "From: $name <$email>";
        $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $text";
        $sender = "From: $email"; //sender email

        if (mail($receiver, $subject, $body, $sender)) {
            echo "Your message has been sent";
        } else {
            echo "Sorry, failed to send message";
        }
    } else {
        echo "invalid Email adresse";
    }
} else {
    echo "Email and message are required";
}
