<?php
include_once('header.php');

$q = "localhost";
$w = "root";
$r = "";
$db = "clearance";
$conn = mysqli_connect($q, $w, $r, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select all data from the request table
$sql = "SELECT * FROM request";
$result = $conn->query($sql);

// Update the response column for each name
if (isset($_POST['update_responce'])) {
    $names = $_POST['name'];
    $new_responce = $_POST['new_responce'];

    for ($i = 0; $i < count($names); $i++) {
        $updateSql = "UPDATE request SET responce = '$new_responce[$i]' WHERE name = '$names[$i]'";
        if ($conn->query($updateSql) === TRUE) {
            echo "Response updated for " . $names[$i] . "<br>";
        } else {
            echo "Error updating response for " . $names[$i] . ": " . $conn->error . "<br>";
        }
    }

    // Redirect to refresh the page
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Clearance Registration Program</title>
    <style>
        /* CSS styles for the table */
    </style>
</head>
<body>
	
    
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
			<b>..::Clearance Registration Requests ::..</b>
            <h4><a href="registrar.php">Back to home</a></h4>
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
						<li class="lo"><a href="../index.php?logged=out">Logout</a></li>                
					<?php
				}
				?>
					
			</ul>
		</td>
		</tr>
	</table>
    <form method="post" action="" style="margin-left:5rem; ">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Reason of Clearance</th>
                    <th>Request Date</th>
                    <th>Response</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["reason_of_clearance"] . "</td>";
                        echo "<td>" . $row["requaste_date"] . "</td>";
                        echo "<td>" . $row["responce"] . "</td>";
                        echo "<td><input type='text' name='new_responce[]' value='" . $row["responce"] . "'></td>";
                        echo "<td><input type='hidden' name='name[]' value='" . $row["name"] . "'><input type='submit' name='update_responce' value='Update'></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No data available</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </form>
</body>
</html>