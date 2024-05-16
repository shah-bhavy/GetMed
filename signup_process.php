<?php
session_start(); // Start session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('dbconnect.php'); // Include your database connection file

    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];

    // Sanitize input to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    $email = mysqli_real_escape_string($conn, $email);
    $address = mysqli_real_escape_string($conn, $address);
    $contact = mysqli_real_escape_string($conn, $contact);

    // Check if username or email already exists in the database
    $checkSql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
    $checkResult = mysqli_query($conn, $checkSql);

    if (mysqli_num_rows($checkResult) > 0) {
        // Username or email already exists, display error message or redirect to signup page with error
        header("Location: signup.php?error=existing_user"); // Redirect to signup page with error message
        exit();
    } else {
        // Insert new user into database
        $insertSql = "INSERT INTO users (username, password, email, address, contact_number) 
                      VALUES ('$username', '$password', '$email', '$address', '$contact')";
        mysqli_query($conn, $insertSql);

        // Redirect to login page or dashboard after successful signup
        header("Location: login.php?signup=success"); // Redirect to login page with success message
        exit();
    }
} else {
    // Invalid request method, redirect to signup page
    header("Location: signup.php");
    exit();
}
?>
