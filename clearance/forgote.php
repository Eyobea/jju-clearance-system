<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
</head>
<body>
    <h1>Forgot Password</h1>
    <?php
   include 'header.php';
    

    // Process the form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve form data
        $idno = $_POST['idno'];
        $favoriteFood = $_POST['favorite_food'];
        $primarySchool = $_POST['primary_school'];
        $bornPlace = $_POST['born_place'];
        $newPassword = $_POST['new_password'];

        // Validate the input values (you can add more validation as per your requirements)
        if (empty($idno) || empty($favoriteFood) || empty($primarySchool) || empty($bornPlace) || empty($newPassword)) {
            echo "Please fill in all the fields.";
        } else {
            // Query the database to check if the provided values match the records
            $sql = "SELECT * FROM student WHERE Idno = '$idno' AND favorite_food = '$favoriteFood' AND primary_school = '$primarySchool' AND born_place = '$bornPlace'";
            $result = mysqli_query($connection, $sql);
            if (mysqli_num_rows($result) === 1) {
                // Update the password without hashing
                $updateSql = "UPDATE student SET password = '$newPassword' WHERE Idno = '$idno'";
                if (mysqli_query($connection, $updateSql)) {
                    echo "Password updated successfully.";
                } else {
                    echo "Error updating password: " . mysqli_error($connection);
                }
            } else {
                echo "Invalid credentials. Please check your input values.";
            }
        }
    }

    // Close the database connection
    mysqli_close($connection);
    ?>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="idno">ID Number:</label>
        <input type="text" id="idno" name="idno" required><br>

        <label for="favorite_food">Favorite Food:</label>
        <input type="text" id="favorite_food" name="favorite_food" required><br>

        <label for="primary_school">Primary School:</label>
        <input type="text" id="primary_school" name="primary_school" required><br>

        <label for="born_place">Place of Birth:</label>
        <input type="text" id="born_place" name="born_place" required><br>

        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password" required><br>

        <button type="submit">Reset Password</button>
    </form>
</body>
</html>