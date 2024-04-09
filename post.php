<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve login details from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // You can perform further validation and authentication here
    // For demonstration purposes, let's just echo the received data
    echo "Username: " . $username . "<br>";
    echo "Password: " . $password;
}
?>
  
