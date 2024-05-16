<?php
// Establish database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "getmed";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . $conn->connect_error);
    }
?>