

<?php


$to = "xxxx@gmail.com"; // Replace with the recipient's email address
$subject = "Test Email"; // Email subject
$message = "This is a test email sent using PHP."; // Email body
$headers = "From: 123@gmail.com"; // Replace with sender's email address

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email.";
}


?>
