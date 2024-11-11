<?php
include_once('header.php');

$q = "localhost";
$w = "root";
$r = "";
$db = "clearance";
$conn = mysqli_connect($q, $w, $r, $db);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize form data
    $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_SPECIAL_CHARS);
    $mname = filter_input(INPUT_POST, 'mname', FILTER_SANITIZE_SPECIAL_CHARS);
    $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_SPECIAL_CHARS);
    $sex = filter_input(INPUT_POST, 'sex', FILTER_SANITIZE_SPECIAL_CHARS);
    $idno = filter_input(INPUT_POST, 'idno', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
    $status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_SPECIAL_CHARS);
    $faculty = mysqli_real_escape_string($conn, $_POST['faculty']);
    $role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_SPECIAL_CHARS);
    $program = filter_input(INPUT_POST, 'program', FILTER_SANITIZE_SPECIAL_CHARS);
    $academicYear = filter_input(INPUT_POST, 'academicYear', FILTER_SANITIZE_SPECIAL_CHARS);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);
    $mothersFatherName = filter_input(INPUT_POST, 'mothersFatherName', FILTER_SANITIZE_SPECIAL_CHARS);
    $campus = filter_input(INPUT_POST, 'campus', FILTER_SANITIZE_SPECIAL_CHARS);
    $favoriteFood = filter_input(INPUT_POST, 'favoriteFood', FILTER_SANITIZE_SPECIAL_CHARS);
    $primarySchool = filter_input(INPUT_POST, 'primarySchool', FILTER_SANITIZE_SPECIAL_CHARS);
    $bornPlace = filter_input(INPUT_POST, 'bornPlace', FILTER_SANITIZE_SPECIAL_CHARS);

    // Validate input data
    if (!preg_match('/^[a-zA-Z]+$/', $fname) || !preg_match('/^[a-zA-Z]+$/', $mname) || !preg_match('/^[a-zA-Z]+$/', $lname)) {
        echo "Error: First name, middle name, and last name must contain only letters.";
        exit;
    }

    if (strlen($phone) !== 10 || !ctype_digit($phone)) {
        echo "Error: Phone number must be exactly 10 digits.";
        exit;
    }

    // Prepare the SQL statements
    $sql = "INSERT INTO student (Fname, Mname, Lname, Sex, Idno, password, role, program, acadamicYear, phone, mothersFatherName, campus, favorite_food, primary_school, born_place) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $sql1 = "INSERT INTO studentclearance (stud_id, department, library, bookstore, cafeteria, dormitory, sport) VALUES (?, 0, 0, 0, 0, 0, 0)";

    // Prepare and execute the SQL statements
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssssssss", $fname, $mname, $lname, $sex, $idno, $password, $role, $program, $academicYear, $phone, $mothersFatherName, $campus, $favoriteFood, $primarySchool, $bornPlace);
    $stmt1 = $conn->prepare($sql1);
    $stmt1->bind_param("s", $idno);

    if ($stmt->execute() && $stmt1->execute()) {
        echo "Record inserted successfully";
    } else {
        echo "Error inserting record: " . $stmt->error . " " . $stmt1->error;
    }

    $stmt->close();
    $stmt1->close();
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Clearance Form</title>
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
            <h4><a href="registrar.php">Back to Home</a></h4>
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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" style="width: 50%; margin-left:auto; margin-right:auto;">
       
        <input type="text" name="fname" id="fname" placeholder="First Name" required><br>
        <input type="text" name="mname" id="mname" placeholder="Middle Name" required><br>
        <input type="text" name="lname" id="lname" placeholder="Last Name" required><br>
        <select name="sex" id="sex" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br>
        <input type="text" name="idno" id="idno" placeholder="ID Number" required><br>
        <input type="password" name="password" id="password" placeholder="Password" required><br>
        <input type="text" name="role" id="role" placeholder="Role" required><br>
        <input type="text" name="status" id="status" placeholder="Status" required><br>
        <input type="text" name="campus" id="campus" placeholder="Campus" required><br>
        <input type="text" name="faculty" id="faculty" placeholder="Faculty" required><br>
        <input type="text" name="academicYear" id="academicYear" placeholder="Academic Year" required><br>
        <input type="text" name="phone" id="phone" placeholder="Phone" required><br>
        <input type="text" name="mothersFatherName" id="mothersFatherName" placeholder="Mother's Father Name" required><br>
        <select name="program" id="program" required>
            <option value="Regular">Regular</option>
            <option value="Extension">Extension</option>
        </select><br>
        <input type="text" name="favoriteFood" id="favoriteFood" placeholder="Favorite Food" required><br>
        <input type="text" name="primarySchool" id="primarySchool" placeholder="Primary School" required><br>
        <input type="text" name="bornPlace" id="bornPlace" placeholder="Place of Birth" required><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>