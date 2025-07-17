<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Form Submitted</h2>";
    echo "Name: " . htmlspecialchars($_POST["name"]) . "<br>";
    echo "Email: " . htmlspecialchars($_POST["email"]) . "<br>";
    echo "Message: " . nl2br(htmlspecialchars($_POST["message"])) . "<br>";
} else {
    echo "Invalid Request.";
}
?>

