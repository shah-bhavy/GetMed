<?php

include('dbconnect.php'); // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Sanitize input to prevent SQL injection
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $message = mysqli_real_escape_string($conn, $message);

    // Insert contact details into 'contacts' table
    $insertSql = "INSERT INTO contacts (name, email, message)
                  VALUES ('$name', '$email', '$message')";
    mysqli_query($conn, $insertSql);

    // Redirect or display success message
    header("Location: contact.php?status=success"); // Redirect to contact page with success status
    exit();
} else {
    // Invalid request method, redirect to contact page with error status
    header("Location: contact.php?status=error"); // Redirect to contact page with error status
    exit();
}
?>
