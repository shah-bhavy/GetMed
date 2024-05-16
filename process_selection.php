<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process Selection</title>
    <link rel="stylesheet" href="selection.css">
</head>

<body>
    <div class="content">
        <section class="confirmation">
            <div class="container">
                <h2>Confirmation</h2>
                <p>Your selected tests:</p>
                <ul>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["selected_tests"])) {
                        $selectedTests = $_POST["selected_tests"];
                        foreach ($selectedTests as $test) {
                            echo '<li>' . $test . '</li>';
                        }
                    } else {
                        echo '<li>No tests selected.</li>';
                    }
                    ?>
                </ul>
                <p>Your order is submitted dear <?php session_start(); echo $_SESSION['username'];?>. Our coordinator will reach your doorstep soon...</p>
            </div>
                </section>
    </div>
</body>

</html>
