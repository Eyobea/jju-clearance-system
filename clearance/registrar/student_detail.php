<!DOCTYPE html>
<html>
<head>
    <title>Update Student Clearance Form</title>
</head>
<body>
    <h1>Update Student Clearance Form</h1>
    
    <?php
        // Display the date and navigation
        echo '
        <table id="navigation" align="center" style="width:device-width;">
            <tr>
                <td class="time">
                    <font color="white" style="font-family:times new roman">
                        ' . date('l, F d, Y') . '
                    </font>
                </td>
                <td class="nav">
                    <b>..::Student Clearance Form ::..</b>
                </td>
                <td class="lio">
                    <ul>
                        ';
        
        // Check if user is logged in and display the appropriate navigation links
        session_start();
        if(isset($_SESSION["username"])) {
            $userNameD = ucfirst($_SESSION["username"]);
            echo '<li class="lo"><a href="../index.php?logged=out">Logout</a></li>';
        } else {
            echo '<li class="lo"><a href="../index.php?logged=out">Logout</a></li> ';
        }
        
        echo '
                    </ul>
                </td>
            </tr>
        </table>
        ';
    
        // Include the header.php file if needed
        include_once('header.php');

        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "clearance";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $db);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Check if form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve form data
            $fname = $_POST['fname'];
            $mname = $_POST['mname'];
            $lname = $_POST['lname'];
            $sex = $_POST['sex'];
            $idno = $_POST['idno'];
            $password = $_POST['password'];
            $status = $_POST['status'];
            $role = $_POST['role'];
            $program = $_POST['program'];
            $faculty = $_POST['faculty'];
            $academicYear = $_POST['academicYear'];
            $phone = $_POST['phone'];
            $mothersFatherName = $_POST['mothersFatherName'];
            $campus = $_POST['campus'];
            $favoriteFood = $_POST['favoriteFood'];
            $primarySchool = $_POST['primarySchool'];
            $bornPlace = $_POST['bornPlace'];

            // Update data in the student table
            $sql = "UPDATE student SET Fname='$fname', Mname='$mname', Lname='$lname', Sex='$sex', password='$password', status='$status', role='$role', program='$program', faculty='$faculty', acadamicYear='$academicYear', phone='$phone', mothersFatherName='$mothersFatherName', campus='$campus', favorite_food='$favoriteFood', primary_school='$primarySchool', born_place='$bornPlace' WHERE Idno='$idno'";

            if (mysqli_query($conn, $sql)) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }

        // Close connection
        mysqli_close($conn);
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" style="width: 50%; margin-left:auto; margin-right:auto;">
        <a href="registrar.php">Back</a>
        <input type="text" name="fname" id="fname" placeholder="First Name" required><br>
        <input type="text" name="mname" id="mname" placeholder="Middle Name" required><br>
        <input type="text" name="lname" id="lname" placeholder="Last Name" required><br>
        <select name="sex" id="sex" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br>
        <input type="text" name="idno" id="idno" placeholder="ID Number" required><br>
        <input type="password" name="password" id="password" placeholder="Password" required><br>
        <input type="text" name="status" id="status" placeholder="Status" required><br>
        <input type="text" name="role" id="role" placeholder="Role" required><br>
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
        <input type="submit" value="Update">
    </form>
</body>
</html>