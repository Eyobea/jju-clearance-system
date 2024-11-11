<?php 
include_once('header.php');
session_start();

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

// Function to upload image
function uploadImage($image) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($image["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is an actual image or fake image
    $check = getimagesize($image["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($image["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($image["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $image["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

// Handle image upload
if(isset($_POST["submit_image"])) {
    uploadImage($_FILES["form_image"]);
}

// Handle clearance form printing
if(isset($_POST["print_clearance"])) {
    // Retrieve clearance information from database
    // Print the clearance form
    // This is a placeholder for the actual print functionality
    echo "<script>alert('Printing clearance form...');</script>";
}

// Rest of your existing code...
?>

<!-- HTML form for uploading an image -->
<form method="post" action="your_script.php" enctype="multipart/form-data">
    <label for="form_image">Upload Image:</label>
    <input type="file" id="form_image" name="form_image" required>
    <input type="submit" name="submit_image" value="Upload Image">
</form>

<!-- HTML form for printing the clearance form -->
<form method="post" action="your_script.php">
    <input type="submit" name="print_clearance" value="Print Clearance Form">
</form>
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
