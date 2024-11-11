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

if (isset($_POST['check_id'])) {
    $input_id = $_POST['input_id'];

    // Sanitize user input (optional but recommended)
    $input_id = mysqli_real_escape_string($conn, $input_id);

    // Check if the input ID exists in the request table
    $checkSql = "SELECT * FROM request WHERE id = '$input_id'";
    $checkResult = $conn->query($checkSql);

    if ($checkResult->num_rows > 0) {
        $display_row = $checkResult->fetch_assoc();
    } else {
        $display_row = null;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registeral</title>
    <style>
        /* CSS styles for the table */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        /* Additional styles */
        h1 {
            color: #333;
        }

        form {
            margin-bottom: 20px;
            width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        p {
           
        }
    </style>
</head>
<body>
    <h4><a href="student.php">back to home</a></h4>
    <h1>Registral</h1>
    <form method="post" action="">
        <label for="input_id">Enter ID:</label>
        <input type="text" name="input_id" id="input_id">
        <input type="submit" name="check_id" value="Check ID">
    </form>
    <br>
    <?php if ($display_row) { ?>
        <h1><?php echo "from Registeral"; ?></h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Reason of Clearance</th>
                    <th>Request Date</th>
                    <th>Response</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $display_row["id"]; ?></td>
                    <td><?php echo $display_row["name"]; ?></td>
                    <td><?php echo $display_row["reason_of_clearance"]; ?></td>
                    <td><?php echo $display_row["request_date"]; ?></td>
                    <td><?php echo $display_row["response"]; ?></td>
                </tr>
            </tbody>
        </table>
    <?php } elseif (isset($_POST['check_id'])) { ?>
        <p>No data available for the entered ID.</p>
    <?php } ?>
</body>
</html>
<?php
include_once('librariy.php');
include_once('cafe.php');
include_once('sport.php');
include_once('department.php');
include_once('dormitory.php');
?>