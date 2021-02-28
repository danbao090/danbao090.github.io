<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent=" From: $name \n Message: $message";
$recipient = "sangdidoge1101@hotmil.com";
$subject = "Get in touch";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='generic.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
