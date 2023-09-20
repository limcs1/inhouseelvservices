<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Validate and sanitize the input data (you should add more validation)
    $name = htmlspecialchars($name);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars($subject);
    $message = htmlspecialchars($message);

    // Send the email (you'll need to configure your server's email settings)
    $to = "contact@example.com";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $mailBody = "Name: $name\n";
    $mailBody .= "Subject: $subject\n";
    $mailBody .= "Message:\n$message";

    mail($to, $subject, $mailBody, $headers);

    // Redirect back to a thank you page or a confirmation message
    header("Location: thank_you.html");
}
?>
