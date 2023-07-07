<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Sanitize and validate the data (implement your own validation logic)

  // Construct the email message
  $to = 'idk@gmail.com'; // Replace with the actual recipient email address
  $email_body = "Name: $name\n\nEmail: $email\n\nSubject: $subject\n\nMessage: $message";
  $headers = "From: $email";

  // Send the email
  if (mail($to, $subject, $email_body, $headers)) {
    // Email sent successfully
    echo "Email sent successfully.";
  } else {
    // Email sending failed
    echo "Email sending failed.";
  }
}
?>
