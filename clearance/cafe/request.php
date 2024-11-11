<?php
// Database connection parameters
$q = "localhost";
$w = "root";
$r = "";
$db = "clearance";

// Create connection
$conn = new mysqli($q, $w, $r, $db);
include_once('header.php');	
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to count distinct students who have loaned material
$sql = "SELECT COUNT(DISTINCT id) AS num_students FROM dormitory";

// Execute the query
$result = $conn->query($sql);

// Check if there are any records
if ($result->num_rows > 0) {
    // Fetch the result
    $row = $result->fetch_assoc();
    $numStudents = $row["num_students"];
} else {
    $numStudents = 0;
}

// Close the result set
$result->close();

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Report</title>
</head>
<body>
    <h2>Loan Report</h2>
    <p>Number of students who have loaned material: <?php echo $numStudents; ?></p>
</body>
</html>
