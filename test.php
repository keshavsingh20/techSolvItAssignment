<?php
$to = "keshavyadav200018@gmail.com"; // Replace with your email address
$subject = "Test Email";
$message = "This is a test email sent from PHP.";
$headers = "From: keshavsingh200020@gmail.com"; // Replace with a valid email address

if (mail($to, $subject, $message, $headers)) {
    echo "Test email sent successfully.";
} else {
    echo "Failed to send the test email.";
}
?>
