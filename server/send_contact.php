<?php
$to = "vishwakarmakrishna186@gmail.com";

// Validate and sanitize inputs
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$phone_number = filter_input(INPUT_POST, 'phone_number', FILTER_SANITIZE_STRING);
$msg_subject = filter_input(INPUT_POST, 'msg_subject', FILTER_SANITIZE_STRING);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

// Check required fields
if (!$name || !$email || !$phone_number || !$msg_subject || !$message) {
    header("Location: ../index.php?error=missing_fields");
    exit();
}

// Prepare email headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Email content
$subject = "New Contact Form Submission: $msg_subject";
$body = "You have received a new message from your website contact form:\n\n" .
        "Name: $name\n" .
        "Phone: $phone_number\n" .
        "Email: $email\n" .
        "Subject: $msg_subject\n\n" .
        "Message:\n$message\n";

// Send email
if (mail($to, $subject, $body, $headers)) {
    header("Location: ../thankyou.php");
    exit();
} else {
    echo "Error: Unable to send your message. Please try again later.";
}
?>
