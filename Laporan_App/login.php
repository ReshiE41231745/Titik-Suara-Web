<?php
// dashboard.php

// Start session
session_start();

// Dummy credentials for demonstration
$valid_username = "admin";
$valid_password = "password123";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    if ($username === $valid_username && $password === $valid_password) {
        // Redirect to dashboard
        header("Location: dashboard.php"); // Change to your actual dashboard page
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>