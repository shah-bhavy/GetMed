<?php
session_start(); // Start session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('dbconnect.php'); // Include your database connection file

    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query the database to check if username and password match
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Username and password match, set session variable and redirect to dashboard or home page
        $_SESSION['user_id'] = $row['user_id']; // Assuming 'user_id' is the primary key in your users table
        $_SESSION['username']=$username;
        header("Location: services.php"); // Redirect to dashboard or home page
        exit();
    } else {
        // Username and password do not match, display error message or redirect to login page with error
        header("Location: login.php?error=invalid_credentials"); // Redirect to login page with error message
        exit();
    }
} else {
    // Invalid request method, redirect to login page
    header("Location: login.php");
    exit();
}
?>
