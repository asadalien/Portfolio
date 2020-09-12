<?php

$name= $_POST['name'];
$visitor_email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$email_from= 'bsem-f16-231@superior.edu.pk';

$email_subject= "New Form Submission";
$email_body= "User name: $name.\n".
               "User Email: $visitor_email.\n".
               "User Subject: $subject.\n".
               "User Message: $message.\n";
               
$to= "asad.iftikhar234@gmail.com";
$headers= "From: $email_from \r\n";
$headers .= "Reply To: $visitor_email \r\n";
mail($to, $email_subject, $email_body, $headers);
header("Location: index.html");
?>