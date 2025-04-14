<?php
$valid_username = "jaycob44";
$valid_password = "Utk@93990";
$valid_username_0="rahul5693";
$valid_password_0="rahul@";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['Username'];
    $password = $_POST['password'];

    if (($username === $valid_username && $password === $valid_password)||($username===$valid_username_0&&$password===$valid_password_0)) {

        header("Location: dashboard.html");
        exit();
    } else {
        echo "<!DOCTYPE html>
        <html>
        <head>
            <title>Wrong-Password Entered..</title>
            <style>
                body { font-family: sans-serif; background-image: url(image8.jpeg); background-repeat: no-repeat; background-size: cover; background-position: center; height: 100vh;}
                h3{ color: white; font-size: 24px;}
                a{color: snow; font-size:18px; margin-top: 20px;}
                
            </style>
        </head>
        <body>
            <h3>Invalid username or password!</h3>
            <p><a href='index.html'><strong>Try again</strong></a></p>
        </body>
        </html>";
    }
} else {
    echo "Invalid request method.";
}
?>
