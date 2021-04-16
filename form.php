<?php

$name = $_POST['name'];
$email = $_POST['email'];
$num = $_POST['number'];
$txt = $_POST['text'];
$msg = $_POST['description'];


$to = 'secretary@edusoftech.eu';
$subject = 'Contact Form';
$message = "Name: " . $name . "\n" . "Email: " . $email . "\n" . "School Name: " . $txt . "\n" . "Number of Students: " . $num . "\n" . "Message: " . $msg;
$headers = "";

mail($to, $subject, $message, $headers);
Header("Location: http://myeducare.ro/");
exit();
