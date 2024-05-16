
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - GetMed</title>
    <link rel="stylesheet" href="sl.css"> <!-- Assuming you have a CSS file for styling -->
</head>
<body>
    <div class="sl">
    <div class="container">
        <h2>Sign Up for GetMed</h2>
        <form action="signup_process.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required><br><br>

            <label for="contact">Contact Number:</label>
            <input type="text" id="contact" name="contact" required><br><br>

            <input type="submit" value="Sign Up">
        </form>
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
    </div>
</body>
</html>
