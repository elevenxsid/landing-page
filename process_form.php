<?php
// Replace with your email address
$to = "elevenxsid@gmail.com";
$subject = "Contact Form Submission";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $body = "Name: $name\nEmail: $email\nMessage:\n$message";

  // Replace with your email server settings
  $headers = "From: $email\r\n";

  if (mail($to, $subject, $body, $headers)) {
    echo "<script>alert('Thank you for your message!');</script>";
  } else {
    echo "Error sending email!";
  }
}
?>