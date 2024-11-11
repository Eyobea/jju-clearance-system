<?php
// Database connection parameters
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "clearance";

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);
include 'header.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle delete request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id']) && isset($_POST['delete'])) {
    // Get the row ID
    $row_id = $_POST['id'];

    // SQL query to delete the row from the sport table
    $delete_sql = "DELETE FROM dormitory WHERE id = ? LIMIT 1";

    // Prepare the statement
    $stmt = $conn->prepare($delete_sql);

    if ($stmt) {
        // Bind parameters
        $stmt->bind_param("i", $row_id); // 'i' indicates integer type

        // Execute the query
        if ($stmt->execute()) {
            // Redirect to the same page to refresh the table
            header("Location: ".$_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "Error deleting record: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
}

// SQL query to select all records from the sport table
$sql = "SELECT * FROM dormitory";

// Execute the query
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dormitory Material Records</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h4><a href="officer.php">Back to home</a></h4>
    <h2>dormitory Material Records</h2>
    <table>
        <tr>
            <th>Student Name</th>
            <th>Student ID</th>
            <th>Material ID</th>
            <th>Material Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        <?php
        // Check if there are any records
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                $id = $row["id"];
                $up = "UPDATE studentclearance SET dormitory=0 WHERE stud_id='$id'";
                $rr = mysqli_query($conn, $up);
                
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["Material_Id"] . "</td>";
                echo "<td>" . $row["Material_Name"] . "</td>";
                echo "<td>" . $row["quantity"] . "</td>";
                echo "<td>" . $row["price"] . "</td>";
                // Add delete button for each row
                echo "<td><form action='".$_SERVER['PHP_SELF']."' method='POST'><input type='hidden' name='id' value='" . $row["id"] . "'><input type='submit' name='delete' value='Delete'></form></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No records found</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
// Close connection
$conn->close();
?>