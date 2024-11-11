<!DOCTYPE HTML"><html>
 <head>
 <?php 
	include_once('header.php');	 
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
			<b>..:: register Student ::..</b>
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
	
<table id="content" align="center" style="width:device-width;"
	<tr>
		<td class="sidebar">
			<!--<div class="menu">
				<font>Menu</font>
				</div>
			<div class="menuList">
				<a href="hrm.php"><span class="icon-large  icon-home"></span> Home</a></br/>
				<a href="manage.php"><span class="icon-large icon-tags"> </span>  &nbsp;manage staff &nbsp;&nbsp;</a><br/>
				<a href="deptView.php"><span class="icon-large icon-tags"> </span>  &nbsp;Manage liability&nbsp;&nbsp;</a><br/>
				<a href="viewStatus.php"><span class="icon-large icon-check"> </span> &nbsp;Clearance Status&nbsp;&nbsp;</a><br/>
				<a href="http://www.jju.edu.et"><span class="icon-large icon-globe"></span> &nbsp;jju Site</a></br/>
			</div>-->
		</td>
		<td class="login_area">
			<table width="100%">
				<tr>
				<td class="userl">
					<p><?php echo $role ?> Online Clearance Information</p>		
				</td>
				</tr>
			</table>			
			<div class="regform">
						<?php
			$idn = $_REQUEST['key'];
			$sql=mysql_query("select * from staff where staffId='$idn'");
			$result=mysql_num_rows($sql);
			$row=mysql_fetch_array($sql);
			$cc=$row['staffId'];
			$r1=$row['Fname'];
			$r2=$row['Mname'];
			$r3=$row['Lname'];
			$r5=$row['sex'];
			$r7=$row['position'];
			$r8=$row['contactAddress'];
			$r9=$row['year'];
			?>
			<form  method="POST" action="#">
				<table   cellpadding='4'  cellspacing="0" style="margin-left:25%;width:50%;border-radius:10px; border:5px solid rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);">	 
					 <tr  bgcolor="lightblue"><th border="1" colspan="3" style="bgcolor:lightblue"><font><?php echo $r1;?>&nbsp;<?php echo $r2;?>&nbsp;&nbsp;&nbsp;</font><a href="manage.php"><span style="color:red;margin-left:60%;" class="icon-large icon-remove" align="right" title="close"></span></a></th></tr>
					<tr>

					<tr><td colspan='2'>&nbsp;</td></tr>
						<input type='hidden' name='id' id='fname' value="<?php echo $cc;?>">
						
						<tr><td>First Name:</td><td><input type='text' name='fname' id='fname' value="<?php echo $r1;?>"></td></tr>
						<tr><td>Middle Name:</td><td><input type='text' name='mname' id='mname' value="<?php echo $r2;?>"></td></tr>
						<tr><td>Last Name:</td><td><input type='text' name='lname' id='lname' value="<?php echo $r3;?>"></td></tr>
						<tr><td>Sex:</td><td><input  type='text' id='sex' name='sex' value="<?php echo $r5;?>"></td></tr>
						<tr><td>Phone:</td><td><input  type='text' id='phone' name='phone' value="<?php echo $r8;?>"></td></tr>
						<tr><td colspan='2'>&nbsp;</td></tr>
						<tr><td colspan='2'>&nbsp;</td></tr>
						<tr><td colspan='2' align='center'><input type='submit' name='update' value='Save Changes' class="button_example"></tr></td>
					</table>
				<?php
	  

				?>
 
 <?php
  if(isset($_POST['update']))
  {
	            $idnn=$_POST['idnn'];
	            $fname=$_POST['fname'];
				$mname=$_POST['mname'];
				$lname=$_POST['lname'];
				$ph=$_POST['phone'];
				$u=$_POST['id'];
				$sex=$_POST['sex'];
  $update = mysql_query("update staff set  Fname='$fname',program='$prog',phone='$ph',Mname='$mname',Lname='$lname', Sex='$sex' WHERE Idno='$u'") or die(mysql_error());
  if(!$update)
  {
  echo"Error".die(mysql_error());
  }
  else
  {	
echo "<script>window.location='manage.php';</script>";
 
  }}
  ?>
  </form> 


			
		</div>
		</td>
		</tr>
    </table>
	<script>
	$("#mydata").dataTable();
	</script>
	<table id="footer" align="center" style="width:device-width;">
	<tr >
		<td><p class="f">Copyright &copy; reserved 2024-jju-CMS </p></td>
	</tr>
	</table>
 </body>
</html>