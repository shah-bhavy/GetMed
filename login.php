<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - GetMed</title>
    <link rel="stylesheet" href="sl.css"> <!-- Assuming you have a CSS file for styling -->
</head>
<body>
    <div class="sl">
    <div class="container">
        <h2>Login to GetMed</h2>
        <form action="login_process.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" value="Login">
        </form>
        <p>New to GetMed? <a href="signup.php">Sign up here</a></p>
    </div>
    </div>
</body>
</html>
