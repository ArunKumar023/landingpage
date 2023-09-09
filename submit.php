<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];


    // Display a thank you message
    echo "<h2>Thank you, $name!</h2>";
    echo "<p>We have received your message:</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Message: $message</p>";
} else {
    // Handle invalid requests
    echo "Invalid request.";
}
?>
