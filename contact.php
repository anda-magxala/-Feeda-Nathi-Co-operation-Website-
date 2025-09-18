<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Save inquiry to inquiries.txt
    $data = "Name: $name\nEmail: $email\nMessage: $message\n---\n";
    file_put_contents('inquiries.txt', $data, FILE_APPEND);
    
    // Redirect back to contact page with success message
    header("Location: contact.html?status=success");
} else {
    echo "Invalid request.";
}
?>