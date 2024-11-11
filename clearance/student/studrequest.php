<?php
include_once('header.php');
?>

<?php
$q = "localhost";
$w = "root";
$r = "";
$db = "clearance";
$conn = mysqli_connect($q, $w, $r, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function registerRequest()
{
    global $conn;

    $name = $_POST['name'];
    $idno = $_POST['idno'];
    $reason_of_clearance = $_POST['reason_of_clearance'];
    $date_submitted = date('Y-m-d');
    $response = "null";

    // Validate the name field
    if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        echo "Error: Name can only contain letters.";
        return;
    }

    $sql = "INSERT INTO request (name, id, reason_of_clearance, requaste_date, responce)
    VALUES ('$name', '$idno', '$reason_of_clearance', '$date_submitted', '$response')";

    if ($conn->query($sql) === TRUE) {
        echo "Request submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    registerRequest();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Clearance Registration Program</title>
    <style>
        /* CSS styles for the form */
    </style>
</head>
<body>
    <h4><a href="student.php">Back to home</a></h4>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"style="width:500px; margin-left:auto; margin-right:auto;">
        <h1>Student Request</h1>
        <input type="text" name="name" placeholder="Name" required><br>
        <input type="text" name="idno" id="idno" placeholder="ID Number" required><br>
        <input type="text" name="reason_of_clearance" id="role" placeholder="Reason of Clearance" required><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>