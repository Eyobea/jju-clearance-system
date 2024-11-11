<!DOCTYPE html>
<html>
<head>
    <title>Fetch Data from Database</title>
</head>
<body>
    <h2>Department</h2>

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
        $sql = "SELECT * FROM departmente WHERE id = '" . $conn->real_escape_string($id) . "'";

        // Execute the query
        $result = $conn->query($sql);

        if ($result) {
            if ($result->num_rows > 0) {
                // Data found, display in a table
                ?>
                <table>
                    <thead>
                        <tr>
                            <th>Material ID</th>
                            <th>Material Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Name</th>
                            <th>ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Loop through each row of data
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $row['Material_Id']; ?></td>
                                <td><?php echo $row['Material_Name']; ?></td>
                                <td><?php echo $row['quantity']; ?></td>
                                <td><?php echo $row['price']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['id']; ?></td>
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
        
        <input type="hidden" id="id" name="id" required>
        <input type="hidden" name="submit" value="Fetch Data">
    </form>

    <br>
  

</body>
</html>

<?php
$conn->close();
?>