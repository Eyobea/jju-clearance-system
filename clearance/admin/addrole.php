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
			<b>..:: Add role ::..</b>
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
			<div class="menu">
				<font>Menu</font>
				</div>
			<!--<div class="menuList">
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
			<div style="float:left;width:50%">
			<table   cellpadding='4'  cellspacing="0" style="margin-left:25%;width:70%;border-radius:10px; border:5px solid rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);">
			<thead>
				<thead >
					<tr  bgcolor="lightblue"><th border="1" colspan="3" style="bgcolor:lightblue"><font>Id no: <?php echo $_GET['res'];?></font><a href="manage.php"><span style="color:red;margin-left:60%;" class="icon-large icon-remove" align="right" title="close"></span></a></th></tr>
				<tr>
					<form action="#" method="post">
				
				
				<tr>
					
					<td><input type="hidden" name="id" placeholder="role id" value="<?php echo $_GET['res'];?>"/></td>
				</tr><tr>
					<td><font color="red">*</font><label>role Id</label></td>
					<td><input type="text" name="rolid" placeholder="role id" required pattern="[A-Z a-z0-9]+"/></td>
				</tr>
				<tr>
					<td><font color="red">*</font><label>role name</label></td>
					<td><input type="text" name="rolname" placeholder="role name" required pattern="[A-Z a-z]+"/></td>
				</tr>
				<tr>
					<td><font color="red">*</font><label>servey for</label></td>
					<td>
					<select name="sfor" required />
						<option value="um">---Select one--</option>
						<option value="student">student</option>
						<option value="staff">staff</option>
					</select>
					</td>
				</tr>
				<tr>
					<td><font color="red">*</font><label>campus position</label></td>
					<td>
					<select name="comp" required />
						<option value="um">---Select one--</option>
						<option value="um">university management</option>
						<option value="peda">peda</option>
						<option value="fb">business and economics</option>
						<option value="zenzelima">zenzelima</option>
						<option value="yibab">yibab</option>
					</select>
					</td>
				</tr>
				<tr><td><font color="red">*</font><label>phone number</label> </td>
					<td><input type="text" name="phone" placeholder="phone number" pattern="[09][0-9].{8}" required title="enter phone number(0935701350)"/><br/><br/>	</td>	
			</tr> 
			<tr><td></td>
				<td><input type="submit" name="addrole" value="register"/>
				<input type="reset" value="Reset"/>
				</td>
			</tr>
			<?php 
			$id=$_GET['res'];
			$rolid=$_POST['rolid'];
			$rolname=$_POST['rolname'];
			$sfor=$_POST['sfor'];
			$phone=$_POST['phone'];
			$comp=$_POST['comp'];
			
			$sele=mysql_query("select * from staff where staffId='$id'");
			$row=mysql_fetch_array($sele);
			$mfn=$row['mothersFatherName'];
			$password= $mfn.'1234#';
			echo $sfor;
			$sqlinsert=mysql_query("INSERT INTO `role`(`staffId`, `username`, `password`, `role`,`office`, `campus`) VALUES ('$id','$rolid','$password','$rolname','$sfor','$comp')");
			if($sqlinsert)
					{
					echo"<tr><td colspan=2>	<div class='alert alert-warning' style='width:70%; float: left; margin-left: 10%;'>
										Sucessfully registred
									</div></td></tr>";
					}	
					else
					{
					echo"<tr><td colspan=2>	<div class='alert alert-warning' style='width:70%; float: left; margin-left: 10%;'>
										not registred
									</div></td></tr>";
					}		
			
			
			
			?>
			
		
		</form>
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
		<td><p class="f">Copyright &copy; reserved 2024-jju-CMS </p></td>
	</tr>
	</table>
 </body>
</html>