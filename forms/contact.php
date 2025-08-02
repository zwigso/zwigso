<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST["name"]);
    $email   = htmlspecialchars($_POST["email"]);
    $phone   = htmlspecialchars($_POST["phone"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "your-email@example.com";  // 📨 Replace this with your actual email
    $email_subject = "New Contact Form Message from Zwigso: $subject";

    $body = "You received a new message:\n\n"
          . "Name: $name\n"
          . "Email: $email\n"
          . "Phone: $phone\n"
          . "Subject: $subject\n"
          . "Message:\n$message\n";

    $headers = "From: noreply@yourdomain.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $email_subject, $body, $headers)) {
        echo json_encode(["success" => true]);
    } else {
        http_response_code(500);
        echo json_encode(["error" => "Message could not be sent."]);
    }
} else {
    http_response_code(403);
    echo json_encode(["error" => "Invalid request"]);
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST["name"]);
    $email   = htmlspecialchars($_POST["email"]);
    $phone   = htmlspecialchars($_POST["phone"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "your-email@example.com";  // 📨 Replace this with your actual email
    $email_subject = "New Contact Form Message from Zwigso: $subject";

    $body = "You received a new message:\n\n"
          . "Name: $name\n"
          . "Email: $email\n"
          . "Phone: $phone\n"
          . "Subject: $subject\n"
          . "Message:\n$message\n";

    $headers = "From: noreply@yourdomain.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $email_subject, $body, $headers)) {
        echo json_encode(["success" => true]);
    } else {
        http_response_code(500);
        echo json_encode(["error" => "Message could not be sent."]);
    }
} else {
    http_response_code(403);
    echo json_encode(["error" => "Invalid request"]);
}
?>
