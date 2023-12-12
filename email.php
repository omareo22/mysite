<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $subject = $_POST["subject"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // You can customize the email message here
    $mailMessage = "Name: $name\n";
    $mailMessage .= "Subject: $subject\n";
    $mailMessage .= "Email: $email\n\n";
    $mailMessage .= "Message:\n$message";

    // Replace 'your-email@example.com' with your actual email address
    $to = "omar.mahmoud32@gmail.com";
    $subject = "New Contact Form Submission";

    // Additional headers
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send the email
    mail($to, $subject, $mailMessage, $headers);
    
    // Redirect to a thank-you page or display a success message
    header("Location: thank-you.html");
    exit();
}
?>
