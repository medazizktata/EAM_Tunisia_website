<?php
// Fetch form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Set up email parameters
$to = 'mohamedaziz.ktata@etudiant-enit.utm.tn'; // Replace with your desired email address
$subject = 'New contact form submission: ' . $subject;
$headers = "From: $name <$email>" . "\r\n";
$message = "Name: $name\nEmail: $email\n\n$message";

// Send email
$mailSent = mail($to, $subject, $message, $headers);

// Check if the email was sent successfully
if ($mailSent) {
    echo 'Thank you for your message. We will get back to you shortly.';
} else {
    echo 'Oops! An error occurred. Please try again later.';
}
?>
