<?php 

$name = $_POST['name'];
$telefon = $_POST['telefon'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "mosnegutu_cosmin@yahoo.com";
$subject = "MCDesign.RO";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("location: http://mcdesign.ro");
?>



