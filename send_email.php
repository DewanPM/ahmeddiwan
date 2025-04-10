<?php
header('Content-Type: application/json');  // Set content type to JSON
<form id="contact-form" action="send_email.php" method="POST">
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    $to = "ahmeddewan1995@gmail.com"; // Your email address
    $subject = "New Contact Form Submission from $name";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(["status" => "success", "message" => "Message sent!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Message sending failed."]);
    }
}
?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: application/json');  // Set content type to JSON

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Your existing code goes here
}
?>
