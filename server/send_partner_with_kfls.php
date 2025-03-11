<?php 
$to = "vishwakarmakrishna186@gmail.com";

// Check if required fields are set
if (!isset($_POST['name'], $_POST['phone_number'], $_POST['email'], $_POST['city'])) {
    header("Location: ../index.php?error=missing_fields");
    exit();
}

// Get form data with basic sanitization
$name = trim(htmlspecialchars($_POST['name']));
$phone_number = trim(htmlspecialchars($_POST['phone_number']));
$email = trim($_POST['email']);
$city = trim(htmlspecialchars($_POST['city']));

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format. Please go back and enter a valid email.";
    exit();
}

// Validate required fields
if (empty($name) || empty($phone_number) || empty($email) || empty($city)) {
    header("Location: ../index.php?error=empty_fields");
    exit();
}

// Email headers
$headers = "From: " . filter_var($email, FILTER_SANITIZE_EMAIL) . "\r\n";
$headers .= "Reply-To: " . filter_var($email, FILTER_SANITIZE_EMAIL) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Email subject and body
$subject = "New Submission from 'Partner with KLFS' Section";
$body = "We have received the following information:\n\n" .
        "Name: $name \n" .
        "Phone No: $phone_number \n" .
        "Email ID: $email \n" .
        "City: $city";

// Send email and handle the result
if (mail($to, $subject, $body, $headers)) {
    header("Location: ../thankyou.php");
    exit();
} else {
    echo "We encountered an error sending your mail, please contact support@kalpalabdhi.com";
}
?>
