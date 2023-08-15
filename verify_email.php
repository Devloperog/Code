<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["email"])) {
        $email = $_POST["email"];
        
        // Generate a random verification code
        $verificationCode = generateVerificationCode();
        
        // Email subject
        $subject = "Email Verification Code";
        
        // Email message
        $message = "Your verification code is: " . $verificationCode;
        
        // Set headers
        $headers = 'From: your_email@example.com' . "\r\n" .
            'Reply-To: your_email@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        
        // Send email using the mail() function
        if (mail($email, $subject, $message, $headers)) {
            echo "Verification email sent to " . $email;
        } else {
            echo "Failed to send verification email.";
        }
    } elseif (isset($_POST["verification_code"])) {
        $verificationCode = $_POST["verification_code"];
        
        // Verify the entered verification code (not shown here)
        
        echo "Verification successful!";
    }
}

function generateVerificationCode() {
    // Generate a random verification code
    return rand(1000, 9999);
}
?>
