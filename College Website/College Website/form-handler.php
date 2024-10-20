<?php
$name = $_POST["name"];
$visitor_email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$email_from = 'info@svpoly.com';
$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "User Subject: $subject.\n". 
              "User Message: $Message.\n";

$to = 'yashvant7singh@gmail.com';
$headers = "From: $email_from \r\n";
$headers = "Reply_To: $visitor_email \r\n";
mail($to, $email_subject, $email_body, $headers);
header("Location: contact.html");              
?>