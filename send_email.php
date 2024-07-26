<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Your email address
    $to = "richamillea@gmail.com";
    $subject = "New message from your portfolio";
    
    // Email content
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";
    
    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
} else {
    echo "Invalid request method.";
}
?>
