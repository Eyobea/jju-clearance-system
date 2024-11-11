<!DOCTYPE HTML"><html>
 <head>
 <?php 
	include_once('header.php');	 
 ?>
 </head>
 <body>

<table id="content" align="center" style="width:device-width;">
	<tr>
		<td class="sidebar">
			<div class="menu">
				<font>Menu</font>
			</div>
			<div class="menuList">
				<a href="officer.php"><span class="icon-large icon-home"></span> &nbsp;Home</a></br/>		
				   <a href="issuloan.php">view loin student</a>
				   <a href="manageItem.php"><span class="icon-large icon-tags"></span> &nbsp;Registor Material</a><br/-->
				   <a href="changepassword.php"><span class="icon-large icon-tags"></span> &nbsp;change password</a><br/-->
				<a href="http://www.jju.edu.et"><span class="icon-large icon-globe"></span> &nbsp;jju Site </a></br/>
			</div>
		</td>
		<td class="login_area">
				<table width="100%">
				<tr>
				<td class="userl">
					<p><?php echo $role ?> Page dormtary</p>		
				</td>
				</tr>
				</table>
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
						<li class="lo"><a href="../index.php?logged=out">Logout</a></li>               
					<?php
				}
				?>
					
			</ul>
		</td>
		</tr>
	</table>
    <h2>Loan Report</h2>
    <p>Number of students who have loaned material: <?php echo $numStudents; ?></p>
	
</body>
</html>

 </body>
</html>