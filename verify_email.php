<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    
    // Generate a random verification code
    $verificationCode = generateVerificationCode();
    
    // Email subject
    $subject = "Email Verification Code";
    
    // Email message
    $message = "Your verification code is: " . $verificationCode;
    
    // Send email using the mail() function
    if (mail($email, $subject, $message)) {
        echo "Verification email sent to " . $email;
    } else {
        echo "Failed to send verification email.";
    }
}

function generateVerificationCode() {
    // Generate a random verification code
    return rand(1000, 9999);
}
?>

