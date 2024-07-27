<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim(htmlspecialchars($_POST['username']));
    $password = trim(htmlspecialchars($_POST['password']));

    // Set the expected credentials
    $expected_username = "Selma@Azubi";
    $expected_password = "Anya@123";

    // Check if the submitted credentials match the expected credentials
    if ($username === $expected_username && $password === $expected_password) {
        echo "Login successful. Welcome, " . $username . "!";
    } else {
        echo "Invalid username or password. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
?>






