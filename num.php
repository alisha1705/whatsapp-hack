<?php
// Capture the phone number and country code from the form submission
$country_code = $_POST['country-code'];
$phone_number = $_POST['phone-number'];

// Display or process the phone number
echo "Phone number: " . $country_code . $phone_number;
?>
