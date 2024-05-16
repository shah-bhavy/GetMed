<?php

session_start(); // Start session if not already started
include('dbconnect.php'); // Include your database connection file

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page or display a message
    header("Location: login.php"); // Replace 'login.php' with your actual login page
    exit(); // Stop further execution
}

// User is logged in, continue with displaying the services and booking functionality
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - GetMed</title>
    <link rel="stylesheet" href="services.css">
</head>

<body>
    <div class="content">

        <section class="services">
            <div class="container">
                <h2>Available Services</h2>
                <form action="process_selection.php" method="POST">
                    <?php
                    include('dbconnect.php');

                    // Fetch test data from database
                    $sql = "SELECT test_name, price FROM tests";
                    $result = mysqli_query($conn,$sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<label class="card">';
                            echo '<input type="checkbox" name="selected_tests[]" value="' . $row["test_name"] . '">';
                            echo '<div class="card-content">';
                            echo '<h3>' . $row["test_name"] . '</h3>';
                            echo '<p>Price: ₹' . $row["price"] . '</p>';
                            echo '</div>';
                            echo '</label>';
                        }
                    } else {
                        echo "No tests available.";
                    }
                    ?>
                    <button type="submit" class="btn">Book Selected Tests</button>
                </form>
            </div>
        </section>

        <footer>
            <div class="container">
                <p>&copy; 2024 GetMed. All rights reserved.</p>
            </div>
        </footer>
    </div>
</body>

</html>
