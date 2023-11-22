<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
 
    $to = 'prathameshkulkarni0729@gmail.com'; 
    $subject = 'Message from Contact Form';
    $headers = 'From: ' . $email . "\r\n" .
               'Reply-To: ' . $email . "\r\n" .
               'X-Mailer: PHP/' . phpversion();
    
    $email_body = "Name: $name\nEmail: $email\nMessage: $message";
    
    // Send email
    if (mail($to, $subject, $email_body, $headers)) {
        echo 'Your message has been sent successfully.';
    } else {
        echo 'Sorry, there was an error sending your message.';
    }
}
?>