<!DOCTYPE HTML">
<html>
<head>
    <?php 
        include_once('header.php');	 
    ?>
</head>
<body>
    <table id="navigation" align="center" style="width:device-width;">
        <!-- Navigation Table Content -->
    </table>

    <table id="content" align="center" style="width:device-width;">
        <!-- Content Table Content -->
    </table>

    <table id="footer" align="center" style="width:device-width;">
        <tr>
            <td>
                <h2>Clearance Report</h2>
                <table border="1">
                    <tr>
                        <th>Offices</th>
                        <th>Status</th>
                    </tr>
                    <?php
                    // Connect to your database and retrieve clearance data
                    $conn = mysqli_connect("localhost", "username", "password", "database");
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $username = $_SESSION['username'];
                    $sql_clr = "SELECT * FROM studentclearance WHERE stud_id='$username'";
                    $result = $conn->query($sql_clr);

                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>Faculty</td>";
                            if ($row["faculty"] == '0') {
                                echo "<td>Cleared</td>";
                            } else {
                                echo "<td>Not Cleared</td>";
                            }
                            echo "</tr>";

                            // Repeat the above process for other offices
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
