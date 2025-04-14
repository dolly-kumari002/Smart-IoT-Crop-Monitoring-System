<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $password = trim($_POST["password"]);
    $confirmPassword = trim($_POST["confirmPassword"]);
    $username = htmlspecialchars(trim($_POST["Username"]));

    $errors = [];

    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters.";
    }

    if ($password !== $confirmPassword) {
        $errors[] = "Passwords do not match.";
    }

    if (empty($username)) {
        $errors[] = "Username is required.";
    }
    if (empty($errors)) {
        echo "<!DOCTYPE html>
        <html>
        <head>
            <title>Signup Success</title>
            <meta http-equiv='refresh' content='5;url=dashboard.html'>
            <style>
            h2{text-align:center;}
            p{text-align:center;}
            </style>
        </head>
        <body>
            <h2 style='color: green;'>Signup successful!</h2>
            <p>Welcome, <strong>" . $username . "</strong></p>
            <p>Redirecting to <strong> Dashboard </strong> shortly..</p>
        </body>
        </html>";
        
    } else {
        echo "<h2 style='color: red;'>Signup failed:</h2><ul>";
        foreach ($errors as $error) {
            echo "<li>" . $error . "</li>";
        }
        echo "</ul>";
    }
} else {
    echo "Invalid request.";
}
?>
