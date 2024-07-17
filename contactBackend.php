<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "petanimilenial.indo@gmail.com"; // Ganti dengan alamat email Anda
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $email_subject = "Contact Form Submission: " . $subject;
    $email_body = "<h2>Contact Form Submission</h2>
                  <p><strong>Name:</strong> {$name}</p>
                  <p><strong>Email:</strong> {$email}</p>
                  <p><strong>Subject:</strong> {$subject}</p>
                  <p><strong>Message:</strong><br>{$message}</p>";

    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message sending failed.";
    }
} else {
    echo "Invalid request.";
}
