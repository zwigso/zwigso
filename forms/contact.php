<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $subject = htmlspecialchars($_POST['subject']);
  $message = htmlspecialchars($_POST['message']);

  $to = "support@zwigso.com";
  $email_subject = "New Contact Message from $name";
  $body = "Name: $name\n";
  $body .= "Email: $email\n";
  $body .= "Phone Number: $phone\n";
  $body .= "Subject: $subject\n";
  $body .= "Message: $message\n";

  $headers = "From: support@zwigso.com"; // <-- Must match your domain

  if (mail($to, $email_subject, $body, $headers)) {
    echo "OK"; // <-- This is what the JS expects
  } else {
    http_response_code(500);
    echo "Email sending failed.";
  }
}
?>

