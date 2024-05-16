
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - GetMed</title>
    <link rel="stylesheet" href="sl.css"> <!-- Assuming you have a CSS file for styling -->
</head>
<body>
    <div class="container">
        <h2>Contact Us</h2>
        <form action="contact_process.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea><br>

            <input type="submit" value="Send Message">
        </form>
        <p>Reach out to us for any inquiries or feedback.</p>
    </div>
</body>
</html>
