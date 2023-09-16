<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$website = $_POST['website'];
$message = $_POST['message'];

if (!empty($email) && !empty($message)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $receiver = 'ahm.hem.1@gmail.com';
        $subject = "From $name <$email>";
        $body = "Name: $name\n"
            . "Email: $email\n"
            . "Phone: $phone\n"
            . "Website: $website\n"
            . "Message: $message\n"
            . "\nRegards, \n$name";
        $header = "From: $email";

        if (mail($receiver, $subject, $body, $sender)) {
            echo 'Your message has been sent!';
        } else {
            echo 'Sorry, Failed to send your message!';
        }
    } else {
        echo 'Enter a valid email address!';
    }
} else {
    echo 'Email and message fields are required!';
}
