<!DOCTYPE HTML"><html>
 <head>
 <?php 
	include_once('header.php');	


?>
</head>
<body>
<?php
session_start();

// Assume we have a database connection in $db

// Function to check if the old password matches the stored password
function verifyOldPassword($old, $storedPassword) {
    return password_verify($old, $storedPassword);
}

// Function to update the password
function updatePassword($new, $userNameD) {
    // Hash the new password
    $hashedNewPassword = password_hash($new, PASSWORD_DEFAULT);

    // Update the password in the database
    // This is a placeholder query, adjust it according to your actual database structure
    $updateQuery = "UPDATE student SET password = ? WHERE Idno = ?";
    $updateStmt = $db->prepare($updateQuery);
    $updateStmt->bind_param("ss", $hashedNewPassword, $userNameD);
    $updateStmt->execute();
}

if (isset($_POST['change'])) {
    $old = $_POST['old'];
    $new = $_POST['new'];
    $conf = $_POST['conf'];

    // Retrieve the stored password from the database
    $sql = "SELECT password FROM student WHERE Idno = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("s", $userNameD);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $storedPassword = $row['password'];

    if (verifyOldPassword($old, $storedPassword)) {
        if ($new === $conf) {
            updatePassword($new, $userNameD);
            echo "<p>Password changed successfully!</p>";
        } else {
            echo "<p>New password and confirmation do not match.</p>";
        }
    } else {
        echo "<p>Incorrect old password.</p>";
    }
}
?>
<!-- Your HTML form goes here -->
</body>
</html>

 ?>
 
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
			<a href="manage.php"><b>..:: Change Password ::..</b></a>
		</td>
		<td class="lio">
			<ul>
				<?php
					session_start();
					if(isset($_SESSION["username"]))
					{
						$userNameD = ucfirst($_SESSION["username"]);
				?>
				<li>
					<?php
						$userNameD = ucfirst($_SESSION["username"]);
						$sql="select * from student where Idno='$userNameD'";
						$qr=mysql_query($sql);
						while($row = mysql_fetch_array($qr))
						{
							$sfid=$row['studId'];
							$fn=$row['fullName'];
							$role=$row['role'];
						}
						$sqls="select * from staff where staffId='$sfid'";
						$qrs=mysql_query($sqls);
						while($row = mysql_fetch_array($qrs))
						{
							$sfid=$row['staffId'];
							$fn=$row['Fname'];
							$mn=$row['Mname'];
							$camp=$row['campus'];				
						}
						echo "<a href='$role.php'><div id='un' class='icon-large icon-user'> ".$fn.' '.$mn."</div></a>";
					?>
				</li> 
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
	
<table id="content" align="center" style="width:device-width;"
	<tr>
		<td class="sidebar">
			<div class="menu">
				<font>Menu</font>
				</div>
			<div class="menuList">
			<a href="student.php"><span class="icon-large icon-home"></span> &nbsp;Home</a></br/>
                <a href="studrequest.php"><span class="icon-large icon-home"></span> &nbsp;Send Request</a></br/>
                 <a href="Viewresponse.php"><span class="icon-large icon-home"></span> &nbsp;View Response</a></br/>
				<a href="studentClearance.php"><span class="icon-large icon-eye-open"></span> &nbsp;Current Clearance</a><br/>
                   <a href="chengepassword.php"><span class="icon-large icon-question-sign"></span> &nbsp; Changepassword</a></br>
				   <a href="printt.php"><span class="icon-large icon-question-sign"></span> &nbsp; Save and print</a></br>
			</div>

			</div>
		</td>
		<td class="login_area">
			<table width="100%">
				<tr>
				<td class="userl">
					<p><?php echo $role ?> Page</p>		
				</td>
				</tr>
			</table>			
			<div class="regform">
			<div style="float:left;width:50%">
			<table   cellpadding='4'  cellspacing="0" style="margin-left:25%;width:70%;border-radius:10px; border:5px solid rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);">
			<thead>
				<thead >
					<tr  bgcolor="lightblue"><th border="1" colspan="3" style="bgcolor:lightblue"><font>Change password</font><a href="student.php"><span style="color:red;margin-left:60%;" class="icon-large icon-remove" align="right" title="close"></span></a></th></tr>
				<tr>
			<form action="#" method="post">
				<tr>
					<td><font color="red">*</font><label>old password</label></td>
					<td><input type="password" name="old" required pattern="[A-Z a-z0-9]+"/></td>
				</tr>
				<tr>
					<td><font color="red">*</font><label>new password</label></td>
					<td><input type="password" name="new"  required pattern="[A-Z a-z0-9]+"/></td>
				</tr>
				<tr>
					<td><font color="red">*</font><label>confirm password</label></td>
					<td><input type="password" name="conf" required pattern="[A-Z a-z0-9]+"/></td>
				</tr>
				
			<tr><td></td>
				<td><input type="submit" name="change" value="change"/>
				<input type="reset" value="Reset"/>
				</td>
			</tr>
				
			</form>
			<?php 
			
			$sql=mysql_query("select * from student where Idno='$userNameD'");
				$row=mysql_fetch_array($sql);
				$pass=$row['password'];
				
			if(isset($_POST['change']))
			{
				$old=$_POST['old'];				
				$new=$_POST['new'];				
				$conf=$_POST['conf'];
				if($pass==$old && $new == $conf)
				{
					$up=mysql_query("update student set password='$new' where Idno='$userNameD'");
				}
				if($up)
					{
					echo"<tr><td colspan=2>	<div class='alert alert-warning' style='width:70%; float: left; margin-left: 10%;'>
										sucessfully changed
									</div></td></tr>";
					}
					else
						if($old!=$pass)
					{
					echo"<tr><td colspan=2>	<div class='alert alert-warning' style='width:70%; float: left; margin-left: 10%;'>
										incorrect old password
									</div></td></tr>";
					}
					else
					if($new!=$conf)
					{
					echo"<tr><td colspan=2>	<div class='alert alert-warning' style='width:70%; float: left; margin-left: 10%;'>
										the confirm password does not much
									</div></td></tr>";
					}
					
					
	}
			

			
			?>
			
		
	
			</table>
			


</div>


			
		</div>
		</td>
		</tr>
    </table>
	<script>
	$("#mydata").dataTable();
	</script>
	<table id="footer" align="center" style="width:device-width;">
	<tr >
		<td><p class="f">Copyright &copy; reserved 2024-JJU-CMS</p></td>
	</tr>
	</table>
 </body>
</html>