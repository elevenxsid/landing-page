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
  // You can find these details from your email provider's documentation
  $headers = "From: $email\r\n"; // This sets the sender email address

  if (mail($to, $subject, $body, $headers)) {
    // Display confirmation message using JavaScript (approach 1)
    echo "<script>alert('Thank you for your message! We will get back to you soon.');</script>";

    // OR Display confirmation message within the page (approach 2)
    // echo "<h3>Thank you for your message! We will get back to you soon.</h3>";
  } else {
    echo "Error sending email!";
  }
}
?>
