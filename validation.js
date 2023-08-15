function sendVerificationCode() {
    var email = document.getElementById("email").value;
    
    // Simulate sending verification code to user's email (not shown here)
    var verificationCode = generateVerificationCode();
    alert("Verification code sent to " + email + ": " + verificationCode);
    
    // Display the verification code input form
    document.getElementById("verification_form").style.display = "block";
    
    return false; // Prevent form submission
}

function generateVerificationCode() {
    // Generate a random verification code
    return Math.floor(1000 + Math.random() * 9000);
}
