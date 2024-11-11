<!DOCTYPE HTML"><html>
 <head>
 <?php 
	include_once('header.php');	 
 ?>
 <script>
  function isendis()
  {
   var d = confirm('Are you sure you want to Delete !!');
   if(!d)
   {
    alert(window.location='manageaccount.php');
   }
   else
   {
   return false;
    
   }
  }
  </script>
 </head>
 <body>
  	<table id="navigation" align="center" style="width:1300px;">
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
			<a href="registrar.php"><b>..:: Registrar Page ::..</b></a>
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
						$sql="select * from role where username='$userNameD'";
						$qr=mysql_query($sql);
						while($row = mysql_fetch_array($qr))
						{
							$sfid=$row['staffId'];
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
	
<table id="content" align="center" style="width:1300px;">
	<tr>
		<td class="sidebar">
			<div class="menu">
				<font>Menu</font>
			</div>
			<div class="menuList">
				<a href="Admin.php"><span class="icon-large icon-home"></span> &nbsp; Home</a></br/>
				<a href="Manageaccount.php"><span class="icon-large icon-check"></span> &nbsp; Manage Account</a><br/>
				<a href="viwlogin.php"><span class="icon-large icon-home"></span> &nbsp; View Log History</a><br/>
				<a href="http://www.jju.edu.et"><span class="icon-large icon-globe"></span> &nbsp;jju Site</a></br/>
			</div>
		</td>
		<td class="login_area">
			<div class="userl">
				<p><?php echo $role ?>web based Clearance Information</p>	
			</div>
			<div class="regform">
			<table style="margin-top:5%;margin-left:40%;border:1px solid ;width:100%;border:1px;cellspacing:0;cellpadding:10;align:center;width:650px;border-radius:5px;border:1px solid gray; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);">
				<tr style="1px solid gray;">
					<th style='height:30px;text-align:center;color:#000;font-weight:bold;background-color:#51a351;'><font color='white' size='2'>No</th>
					<th style='height:30px;text-align:center;color:#000;font-weight:bold;background-color:#51a351;'><font color='white' size='2'>Idno</th>
					<th style='height:30px;text-align:center;color:#000;font-weight:bold;background-color:#51a351;'><font color='white' size='2'>Full Name</th>
					<th style='height:30px;	color:#000;	font-weight:bold;background-color:#51a351;'><font color='white' size='2'>Sex</th>
					<th style='height:30px;	color:#000;	font-weight:bold;background-color:#51a351;'><font color='white' size='2'>Department</th>
					<th style='height:30px;	color:#000;	font-weight:bold;background-color:#51a351;'><font color='white' size='2'>role</th>
					<th style='height:30px;	color:#000;	font-weight:bold;background-color:#51a351;'><font color='white' size='2'>Action</th>
					<th style='height:30px;	color:#000;	font-weight:bold;background-color:#51a351;'><font color='white' size='2'>reset</th>					
				</tr> 
				
				<?php
				$result = mysql_query("SELECT * FROM student");
				$count=mysql_num_rows($result);
				if($count==0)
				{
				echo"<tr><td colspan='7'><font 'color='red'>No entry!</font></td></tr>";
				}
				else{
					$i=0;
					while($row = mysql_fetch_array($result))
				  {
					$id = $row['Idno'];
					$fname=$row['Fname'];
					$mname=$row['Mname'];
					$lname=$row['lname'];
					$role=$row['role'];
					$stat=$row['status'];
					$sex=$row['Sex'];
					$department=$row['Department'];
					$i=$i+1;
				?>
				<tr>
				<td><?php echo $i;?></td>
				<td><?php echo $id;?></td>
				<td><?php echo $fname."&nbsp;".$mname."&nbsp;".$lname;?></td>
				<td><?php echo $sex;?></td>
				<td><?php echo $department;?></td>
				<td><?php echo $role;?></td>
										<?php
				if($stat==0){
					echo"<td style='height:30px;' align = 'center' width = '1'><a href = 'endis.php?enable=".$id."'><span style='border:1px solid transparent;padding:5px;border-radius:5px;color:white;background-color:green;' title='enabled' onclick='isendis();'>Activated</span></a></td>";
				}
				else
				{
				echo"<td style='height:30px;' align = 'center' width = '1'><a href = 'endis.php?disable=".$id."'><span style='border:1px solid transparent;padding:5px;border-radius:5px;color:white;background-color:red;' title='disabled' onclick='isendis();'>Deactivated</span></a></td>";
				}	

				echo"<td style='height:30px;' align = 'center' width = '1'><a href = 'deleteStud.php?key=".$id."'><span style='border:1px solid transparent;padding:5px;border-radius:5px;color:white;background-color:red;' class='icon-trash' title='Delete' onclick='isdelete();'></span></a></td>";
				
						
						
						?>
						</tr>
				<?php
				}}
				print( "</table><br><br><br>");
				mysql_close($conn);
				?>
				<br><br></div>
				 </div>
				</td>
				</tr>
			</table>
			</div>
		</td>
		</tr>
    </table>
	<table id="footer" align="center" style="width:1300px;">
	<tr >
		<td><p class="f">Copyright &copy; reserved 2024-jju-CMS </p></td>
	</tr>
	</table>
 </body>
</html>