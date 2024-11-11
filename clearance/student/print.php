<?php
// Database connection - replace with your actual database credentials
$dbHost = 'localhost';
$dbUsername = 'username';
$dbPassword = 'password';
$dbName = 'database_name';

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Function to generate a random token
function generateToken() {
    return bin2hex(random_bytes(50));
}

// Function to send email (dummy function for demonstration)
function sendRecoveryEmail($email, $token) {
    // In a real application, you would send the email here
    // The email should contain a link to a page where the user can reset their password using the token
    echo "Recovery email would be sent to: $email with token: $token";
}

// If the user requested a password reset
if (isset($_POST['request_reset'])) {
    $email = $_POST['email'];

    // Generate a unique token
    $token = generateToken();

    // Save the token in the database with an expiration time
    $stmt = $db->prepare("UPDATE users SET reset_token = ?, token_expiry = DATE_ADD(NOW(), INTERVAL 1 HOUR) WHERE email = ?");
    $stmt->bind_param("ss", $token, $email);
    $stmt->execute();

    // Send the recovery email
    sendRecoveryEmail($email, $token);
    echo "<p>Please check your email for the password recovery instructions.</p>";
}

// If the user visited the reset password page
if (isset($_POST['reset_password'])) {
    $token = $_POST['token'];
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    if ($newPassword === $confirmPassword) {
        // Retrieve the email from the database using the token
        $stmt = $db->prepare("SELECT email FROM users WHERE reset_token = ? AND token_expiry > NOW()");
        $stmt->bind_param("s", $token);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            $email = $row['email'];

            // Hash the new password
            $hashedNewPassword = password_hash($newPassword, PASSWORD_DEFAULT);

            // Update the password in the database
            $updateStmt = $db->prepare("UPDATE users SET password = ?, reset_token = NULL, token_expiry = NULL WHERE email = ?");
            $updateStmt->bind_param("ss", $hashedNewPassword, $email);
            $updateStmt->execute();

            echo "<p>Your password has been updated successfully.</p>";
        } else {
            echo "<p>Invalid or expired token.</p>";
        }
    } else {
        echo "<p>Passwords do not match.</p>";
    }
}
?>

<!-- HTML form for requesting a password reset -->
<form method="post" action="password_recovery.php">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <input type="submit" name="request_reset" value="Request Password Reset">
</form>

<!-- HTML form for resetting the password -->
<!-- This form would typically be on a separate page linked from the recovery email -->
<form method="post" action="password_reset.php">
    <label for="new_password">New Password:</label>
    <input type="password" id="new_password" name="new_password" required>

    <label for="confirm_password">Confirm New Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" required>

    <input type="hidden" name="token" value="<?php echo $_GET['token']; ?>">
    <input type="submit" name="reset_password" value="Reset Password">
</form>
