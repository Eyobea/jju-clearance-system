<?php
// Database connection parameters
$q = "localhost";
$w = "root";
$r = "";
$db = "clearance";

// Initialize variables for form data
$material_id = $material_name = $quantity = $unit_price = "";
$message = "";
include 'header.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $id = $_POST['id'];
    $material_id = $_POST['material_id'];
    $material_name = $_POST['material_name'];
    $quantity = $_POST['quantity'];
    $unit_price = $_POST['unit_price'];

    // Validate student name (only characters allowed)
    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $message = "Invalid student name. Only characters and spaces are allowed.";
    }
    // Validate material name (only characters allowed)
    elseif (!preg_match("/^[a-zA-Z ]*$/", $material_name)) {
        $message = "Invalid material name. Only characters and spaces are allowed.";
    }
    // Validate quantity (must be a non-negative integer)
    elseif (!filter_var($quantity, FILTER_VALIDATE_INT) || $quantity < 0) {
        $message = "Invalid quantity. Quantity must be a non-negative integer.";
    }
    // Validate unit price (must be a non-negative integer or float)
    elseif (!filter_var($unit_price, FILTER_VALIDATE_FLOAT) || $unit_price < 0) {
        $message = "Invalid unit price. Price must be a non-negative number.";
    } else {
        // Connect to the database
        $conn = mysqli_connect($q, $w, $r, $db);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Check if student clearance exists
        $sel = "SELECT * FROM studentclearance WHERE stud_id='$id'";
        $rrr = mysqli_query($conn, $sel);
        $row = mysqli_fetch_array($rrr);
        $csid = $row['id'];
        if ($row['stud_id'] != $id) {
            die("Student clearance not found");
        }

        // Update student clearance
        $up = "UPDATE studentclearance SET dormitory=1 WHERE stud_id='$id'";
        if (mysqli_query($conn, $up)) {
            // SQL query to insert data into the database
            $sql = "INSERT INTO dormitory (name, id, Material_Id, Material_Name, Quantity, Price) VALUES ('$name', '$id', '$material_id', '$material_name', '$quantity', '$unit_price')";

            // Execute the query
            if (mysqli_query($conn, $sql)) {
                $message = "Material registered successfully";
            } else {
                $message = "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        } else {
            $message = "Error updating student clearance: " . mysqli_error($conn);
        }

        // Close the database connection
        mysqli_close($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Material Registration</title>
    <style>
        /* CSS styles for the form */
        body {
            text-align: center; /* Align form center horizontally */
        }
        form {
            width: 500px; /* Set form width to 500px */
            margin: 0 auto; /* Center form horizontally */
        }
        label {
            display: block; /* Display labels as block elements */
            margin-bottom: 10px; /* Add space below labels */
        }
        input[type="text"],
        input[type="number"] {
            width: 100%; /* Set input fields to full width */
            padding: 8px; /* Add padding */
            margin-bottom: 20px; /* Add space below input fields */
        }
        input[type="submit"] {
            width: 100%; /* Set submit button to full width */
            padding: 10px; /* Add padding */
            background-color: #4CAF50; /* Green background color */
            color: white; /* White text color */
            border: none; /* Remove border */
            border-radius: 4px; /* Add border radius */
            cursor: pointer; /* Add pointer cursor */
        }
        input[type="submit"]:hover {
            background-color: #45a049; /* Darker green background color on hover */
        }
        .message {
            margin-bottom: 20px; /* Add space below message */
            color: #4CAF50; /* Green text color for success message */
        }
        .error {
            margin-bottom: 20px; /* Add space below message */
            color: #f44336; /* Red text color for error message */
        }
    </style>
</head>
<body>
    <h2>Register Material</h2>
    <!-- Display message -->
    <h4><a href="officer.php">Back to home</a></h4>
    <?php
    if (!empty($message)) {
        echo "<p class='" . ($message == "Material registered successfully" ? "message" : "error") . "'>$message</p>";
    }
    ?>
    
    <!-- Material registration form -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" id="name" name="name" placeholder="Student Name:" required>
        <input type="text" id="id" name="id" placeholder="Student ID:" required>
        <input type="text" id="material_id" name="material_id" placeholder="Material ID:" value="<?php echo $material_id; ?>" required>
        <input type="text" id="material_name" name="material_name" placeholder="Material Name:" value="<?php echo $material_name; ?>" required>
        <input type="number" id="quantity" name="quantity" placeholder="Quantity" value="<?php echo $quantity; ?>" required>
        <input type="number" id="unit_price" name="unit_price" step="0.01" placeholder="Unit Price" value="<?php echo $unit_price; ?>" required>
        
        <input type="submit" value="Register Material">
    </form>
</body>
</html>
