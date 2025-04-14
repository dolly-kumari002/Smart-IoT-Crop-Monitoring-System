<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars(trim($_POST["email"]));

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h2 style='color: red;'>Invalid email address.</h2>";
    } else {
        echo "<!DOCTYPE html>
        <html>
        <head>
            <title>Reset Link Sent</title>
            <meta http-equiv='refresh' content='5;url=index.html'>
            <style>
                body { font-family: sans-serif; padding: 20px; text-align: center; background-image: url(image8.jpeg); background-repeat: no-repeat; background-size: cover; background-position: center; height: 100vh;}
                .message { color: white; font-size: 24px; margin-top: 50px; }
            </style>
        </head>
        <body>
            <div class='message'><p>A reset password link has been sent to <strong>$email</strong>.</p><p>Redirecting to login page shortly...</p></div>
        </body>
        </html>";
    }
} else {
    echo "Invalid request.";
}
?>
