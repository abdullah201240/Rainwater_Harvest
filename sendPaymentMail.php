<?php
session_start();


$to_email = "rabibhaque200@gmail.com";
$subject = "Payment Slip";
$body = "Hi, This is test email send by PHP Script Total Amount Paid:";
$headers = "From: rainwh3@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
?>