<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get admin credentials
    $admin_username = "admin"; // Admin username (set to a fixed value or fetch from DB)
    $admin_password = "password"; // Admin password (set to a fixed value or fetch from DB)

    // Check credentials
    if ($_POST['username'] === $admin_username && $_POST['password'] === $admin_password) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin_dashboard.php"); // Redirect to dashboard
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
           body {
    font-family: Arial, sans-serif;
    background-image: url('https://capecomorinmedia.github.io/ccm/assets/2024/images/DigitalBGI2024.jpg'); /* Replace 'your-image.jpg' with the image's filename */
    background-size: cover; /* Ensures the image covers the entire screen */
    background-repeat: no-repeat; /* Prevents the image from repeating */
    background-attachment: fixed; /* Keeps the background fixed during scrolling */
    background-position: center; /* Centers the image */
    margin: 0;
    padding: 0;
}
        .container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background: rgba( 255, 255, 255, 0.25 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
color: #ffffff;
        }

        h2 {
            text-align: center;
            color: #ffffff;
        }

        label {
            font-weight: bold;
            color: #ffffff;
        }

        input[type="text"], input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #f0b643;
            border: none;
            color: #ffffff;
            padding: 10px 20px;
            text-align: center;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #e0a733;
        }

        .error {
            color: red;
            font-size: 14px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Admin Login</h2>
        <?php if (isset($error)) { echo "<p class='error'>$error</p>"; } ?>
        <form action="login.php" method="POST">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" value="Login">
            <p><a href="index.php">Go back HOme</a></p>
        </form>
    </div>
</body>
</html>
