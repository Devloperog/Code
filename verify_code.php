<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $verificationCode = $_POST["verification_code"];
    
    // Verify the entered verification code (not shown here)
    
    echo "Verification successful!";
}
?>
