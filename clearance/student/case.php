<?php
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Fetch Data from Database</title>
</head>
<body>
    

    <?php
    // Database connection configuration
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "clearance";

    // Establishing connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Checking connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if form is submitted
    if (isset($_POST['submit'])) {
        // Get the ID from the form
        $id = $_POST['id'];

        // Prepare the SQL statement with proper escaping of the ID
        $sql = "SELECT * FROM studentclearance WHERE stud_id = '" . $conn->real_escape_string($id) . "'";

        // Execute the query
        $result = $conn->query($sql);

        if ($result) {
            if ($result->num_rows > 0) {
                // Data found, display in a table
                ?>
                <table style="margin-left:auto; margin-right:auto;">
                    <thead>
                        <tr>
                            <th>stud_id</th>
                            <th>faculty</th>
                            <th>department</th>
                            <th>library</th>
                            <th>cafeteria</th>
                            <th>dormitory</th>
                            <th>sport</th>
                            <th>Clearance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Loop through each row of data
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $row['stud_id']; ?></td>
                                <td><?php echo $row['faculty']; ?></td>
                                <td><?php echo $row['library']; ?></td>
                                <td><?php echo $row['cafeteria']; ?></td>
                                <td><?php echo $row['dormitory']; ?></td>
                                <td><?php echo $row['sport']; ?></td>
                                <td><?php echo $row['department']; ?></td>
                                <td><?php echo $row['Clearance']; ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            <?php } else { ?>
                <p>No data found for the given ID.</p>
            <?php }
        } else {
            // Query execution failed
            echo "Error executing the query: " . $conn->error;
        }
    }
    ?>

    <br>
    <form method="post" action="">
        <label for="id">Enter ID:</label>
        <input type="text" id="id" name="id" style="width:300px;" required>
        <input type="submit" name="submit" value="Fetch Data">
    </form>

    <br>
  

</body>
</html>

<?php
$conn->close();
?>