<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'sachin01.000webhostapp.com';

$email_subject = 'new form submission';

$email_body = "user Name: $name.\n".
                "user Email: $visitor_email.\n".
                  "Subject: $subject.\n".
                    "user Message: $message .\n.";


$to = 'sachinkuravanweb21@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");
?>