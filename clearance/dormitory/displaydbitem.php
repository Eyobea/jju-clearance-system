<?php
// Database connection parameters
$q = "localhost";
$w = "root";
$r = "";
$db = "clearance";

// Create connection
$conn = new mysqli($q, $w, $r, $db);
include 'header.php';
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select all records from the dormitory table
$sql = "SELECT * FROM sport";

// Execute the query
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dormitory Records</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h4><a href="officer.php">Back to home</a></h4>
<table id="navigation" align="center" style="width:device-width;">
	<tr>
		<td class="time">
			<font  color="white" style="font-family:times new roman">
				<?php
					$Today=date('y:m:d');
					$new=date('l, F d, Y',strtotime($Today));
					echo $new;
				?>
			</font> 
		</td>
		<td class="nav">
			<b>..::Student Clearance Form ::..</b>
		</td>
		<td class="lio">
			<ul>
				<?php
					session_start();
					if(isset($_SESSION["username"]))
					{
						$userNameD = ucfirst($_SESSION["username"]);
				?>
				<li class="lo"><a href="../index.php?logged=out">Logout</a></li> 
				<?php
				}
				else
				{ 
					?> 
						<li class="lis"><a href="#login">Login</a></li>               
					<?php
				}
				?>
					
			</ul>
		</td>
		</tr>
	</table>
    <h2>Dormitory Records</h2>
    <table>
        <tr>
            <th>Student Name</th>
            <th>Student ID</th>
            <th>Material ID</th>
            <th>Material Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Action</th> <!-- Add column for reset button -->
        </tr>
        <?php
        // Check if there are any records
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["Material_Id"] . "</td>";
                echo "<td>" . $row["Material_Name"] . "</td>";
                echo "<td>" . $row["quantity"] . "</td>";
                echo "<td>" . $row["price"] . "</td>";
                // Add reset button within each row
                echo "<td><form action='' method='post' onsubmit='return resetRow();'><input type='hidden' name='row_id' value='" . $row["id"] . "'><input type='submit' value='Reset'></form></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No records found</td></tr>";
        }
        ?>
    </table>
    <!-- JavaScript to handle reset action and auto refresh -->
    <script>
        function resetRow() {
            // Confirm before resetting
            if (confirm("Are you sure you want to reset and remove Material ID and Material Name for this row?")) {
                // Reload the page after confirmation
                return true;
            }
            return false;
        }
    </script>
</body>
</html>

<?php
// Handle reset request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['row_id'])) {
    // Get the row ID
    $row_id = $_POST['row_id'];

    // SQL query to delete the row from the database using prepared statement
    $delete_sql = "DELETE FROM sport WHERE id = ?";
    
    // Prepare the statement
    $stmt = $conn->prepare($delete_sql);
    
    if ($stmt) {
        // Bind parameters
        $stmt->bind_param("i", $row_id); // 'i' indicates integer type
        
        // Execute the query
        if ($stmt->execute()) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $stmt->error;
        }
        
        // Close statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
}

// Close connection
$conn->close();
?>
