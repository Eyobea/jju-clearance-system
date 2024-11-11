<!DOCTYPE HTML">
<html>
 <head>
 <?php 
	include_once('header.php');
	session_start();
    if(isset($_GET['logged']))
	{
		Header("location:index.php");
		session_destroy();
		
	}
 ?>
 </head>
 <body>
 	<table id="navigation" align="center" style="width:device-width;">
		<tr>
		<td class="time">
			<font>
				<?php
					$Today=date('y:m:d');
					$new=date('l, F d, Y',strtotime($Today .'-1 day'));
					echo $new;
				?>
			</font> 
		</td>
		<td class="nav">
			<b> Contact Us </b>
		</td>
		<td class="login">
			<a href="Login.php"><b>Login</b></a>
		</td>
		</tr>
	</table>
	<table id="content" align="center" style="width:device-width;">
		<tr>
			<td width="15%" class="lsidebar">
				<div class="menu">
					<font>Menu</font>
				</div>
				<div class="menuList">
					<a href="index.php" > <span class="icon-large icon-home"> </span> &nbsp;Home</a></br/>
					<a href="About.php"><span class="icon-large icon-file-text"> </span> &nbsp;About Us</a><br/>
					<a href="contact.php"><span class="icon-large icon-user"> </span> &nbsp;Contact Us</a><br/>
					<a href="http://www.JJU.edu.et"><span class="icon-large icon-globe"></span> &nbsp;jju Site</a></br/>
				</div>	
			</td>
			<td class="content_area">
			<table width="100%"><tr>
			<td class="userl">
				<p class="logimg"><span class="icon-large icon-phone" style="color:#206BA4"> User contact</span></p>	
			</td>
			</tr>
			</table>
			<div style="width:100% ">
			<table  class="table table-striped table-bordered table-hover"  cellpadding='10'  cellspacing="0" border="2" width="100%" id="mydata">
				<thead >
					<tr>
						<th>No</th>
						<th>Full Name</th>
						<th> Office</th>
						<th>Phone Number</th>
						<th>Position</th>
					</tr>				
				</thead>
				<tbody>
					<?php	
						 $all=mysql_query("select * from staff");
						 $i=0;
						while($row=mysql_fetch_array($all))
						{	
						
							// $id=$row['officerId'];
							$fn=$row['Fname'];
							$mn=$row['Mname'];
							$ln=$row['Lname'];
							$eml=$row['role'];
							$ca=$row['contactAddress'];
							$camp=$row['position'];
								$i=$i+1;
							echo '<tr>';
								echo '<td>'.$i.'</td>';
								echo '<td>'.$fn.' '.$mn.' '.$ln.'</td>';						
								
								echo '<td>'.$eml.'</td>';
								echo '<td>'.$ca.'</td>';
								echo '<td>'.$camp.'</td>';
							echo '</tr>';
						}
					?>

					</tr>
				</tbody>
				
			</table>
			</div>
			</td>
			<td class="rsidebar">
				<div class="menu">
					<font>About Clearance</font>
				</div>
				
			
				<div>
					
					<p style="width:90%;margin-left:5%;font-size:18px;">
						Clearance System is the system which clears the Jigjiga University student by ensuring that they return the properties pertaining to the University. 
					</p>
				</div>
			</td>
		</tr>
    </table>
	<table id="footer" align="center" style="width:device-width;"
	<tr >
		<td><p class="f">Copyright &copy; reserved 2024-JJU-CMS</p></td>
	</tr>
	</table>
	<script>
	$("#mydata").dataTable();
	</script>
 </body>
</html>