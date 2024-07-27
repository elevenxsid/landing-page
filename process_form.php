<?php
// Replace with your email address
$to = "elevenxsid@gmail.com";
$subject = "Contact Form Submission";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Replace with your email server settings (optional)
    $headers = "From: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo '<div class="success-message">Thank you for your message! We will get back to you soon.</div>';
    } else {
        echo '<div class="error-message">Error sending email. Please try again later.</div>';
    }
} else {
    // Handle invalid request method (optional)
    http_response_code(405);
    echo "Method Not Allowed";
}
