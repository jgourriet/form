<?php
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        $to = 'jgourriet@gmail.com';
        $subject = 'New message from contact form';
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = 'From: ' . $email . "\r\n" .
                   'Reply-To: ' . $email . "\r\n" .
                   'X-Mailer: PHP/' . phpversion();
        
        if(mail($to, $subject, $body, $headers)) {
            echo 'Your message has been sent.';
        } else {
            echo 'There was a problem sending your message. Please try again.';
        }
    } else {
        echo 'No POST data received.';
    }
?>