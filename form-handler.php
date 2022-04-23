<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='info@yourwebsite.com';
$email_subject='New Form Submission';
$email_body="User name: $name.\n".
            "User Email: $vistor_email.\n".
            "Subject: $subject.\n".
            "User Message: $message.\n";
$to = 'weihr1011@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location:contact.html");

?>