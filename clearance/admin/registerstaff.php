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
			<a href="manage.php"><b>..:: register staff ::..</b></a>
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
			<div class="menuList">
				<a href="hrm.php"><span class="icon-large  icon-home"></span> Home</a></br/>
				<a href="manage.php"><span class="icon-large icon-tags"> </span>  &nbsp;manage staff &nbsp;&nbsp;</a><br/>
				<a href="deptView.php"><span class="icon-large icon-tags"> </span>  &nbsp;Manage liability&nbsp;&nbsp;</a><br/>
				<a href="viewStatus.php"><span class="icon-large icon-check"> </span> &nbsp;Clearance Status&nbsp;&nbsp;</a><br/>
				<a href="http://www.jju.edu.et"><span class="icon-large icon-globe"></span> &nbsp;jju Site</a></br/>
			</div>
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
				<table   cellpadding='4'  cellspacing="0" style="margin-left:2%;width:100%;border-radius:10px; border:5px solid rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);">
			
				
				<tr  bgcolor="lightblue"><th border="1" colspan="3" style="bgcolor:lightblue"><font>Add New staff</font><a href="manage.php"><span style="color:red;margin-left:60%;" class="icon-large icon-remove" align="right" title="close"></span></a></th></tr>
				<tr>
				<td colspan="2">
							
				
                <form action='registerstaff.php' method='post' name="upload_excel" enctype="multipart/form-data" style="width: 200px;" role="form">
                    	<table>
						<tr>
							<td style="width:auto" ><p>Upload staff Data:</p></td>
							<td><input type='file' name='file' id='file' class="form-control" required=""/></td>			
							<td><input type='submit' name='Import' value='upload' class="btn btn-success"/></td>
						</tr>
					</table>
                </form>		
				<hr/>
				</td></tr>
				<form action="registerstaff.php" method="post">
				<tr><td>
				<font color="red">*</font><label>First Name</label>
				</td><td>
					<input type="text" name="fname"  required pattern="[A-Za-z]+" />
				</td>
				</tr>
				<tr>
				<td>
				<font color="red">*</font><label>Middle Name</label>
				</td>
				<td>
				<input type="text" name="mname" required pattern="[A-Za-z]+" />
				</td>
				</tr>
				<tr>
				<td>
				<font color="red">*</font><label>Last Name</label>
				</td>
				<td>
				<input type="text" name="lname" required pattern="[A-Za-z]+" />
				</td>
				</tr>
				<tr>
				<td>
				<font color="red">*</font><label>staff ID</label>
				</td>
				<td>
				<input type="text" name="id" pattern="[A-Za-z0-9]+" required/>
				</td>
				</tr>
				<tr>
                
                <td><font color="red">*</font> Sex:</td>
                <td><input type="radio"  name="sex" value="male" title="choose either male by clicking here" required />
                  Male
                  <input type="radio" name="sex" value="female" title='choose female by clicking here' required />
                  Female</td>
              </tr>
			<tr>
				<td>
				<font color="red">*</font><label>mothers fathor name</label>
				</td>
				<td>
				<input type="text" name="mfname" required pattern="[A-Za-z]+"/>
				</td>
			</tr>
			<tr>
				<td>
				<font color="red">*</font><label>position</label>
				</td>
				<td>
				<input type="text" name="position" required pattern="[A-Za-z]+"/>
				</td>
			</tr>
			<tr>
				<td>
				<font color="red">*</font><label>Email</label>
				</td>
				<td>
				<input type="text" name="eml" required pattern="[A-Za-z]+"/>
				</td>
			</tr>
			<tr>
				<td><font color="red">*</font><label>phone number</label> </td>
				<td><input type="text" name="phone" placeholder="phone number" pattern="[09][0-9].{8}" required title="enter phone number(0935701350)"/><br/><br/>	</td>	
			</tr>  
				<tr><td></td>
				<td>
				<input type="submit" name="btregister" value="register"/>
				<input type="reset" value="Reset"/>
				</td>
		</tr>
</form>
				<br><br> 

<?php
						$Today=date('y:m:d');
						$new=date('l, F d, Y',strtotime($Today));
						
						$mon=date('F',strtotime($Today));
						$new=date('Y',strtotime($Today));
						if($mon=='September'||$mon=='October'||$mon=='November'||$mon=='December')
						{
							$news=$new-7;
						}
						else
						{
							$news=$new-8;
						}
						echo $month;
					
							if(isset($_POST['btregister']))
								{
									$fname=$_POST['fname'];
									$mname=$_POST['mname'];
									$lname=$_POST['lname'];
									$mfn=$_POST['mfname'];
									$sex=$_POST['sex'];
									$idno=$_POST['id'];
									$department=$_POST['dept'];
									$program=$_POST['program'];
									$position=$_POST['position'];
									$phone=$_POST['phone'];
									$email=$_POST['email'];			
									$password=$mfn.'1234#';	
									
									$sql="select * from staff where staffId='$idno'";
									$result=mysql_query($sql);
									if(mysql_num_rows($result)>0)
									{
										echo"<tr><td colspan=2>	<div class='alert alert-warning' style='width:70%; float: left; margin-left: 20%;'>
															This staff is already registerd
														</div></td></tr>";									
									}
									else
									{
										$register=mysql_query("INSERT INTO staff(Fname,Mname,Lname,staffId,password,sex,contactAddress,email , position, year) VALUES ('$fname','$mname','$lname','$idno','$password','$sex','$phone','$email','$position','$news')");
										$clear=  mysql_query("INSERT INTO universitymgmt(staff_id) VALUES('$idno')");										
										$clear2=  mysql_query("INSERT INTO pedaclearance(staff_id) VALUES('$idno')");										
										$clear3=  mysql_query("INSERT INTO fbclearance(staff_id) VALUES('$idno')");										
										$clear4=  mysql_query("INSERT INTO polyclearance(staff_id) VALUES('$idno')");										
										$clear5=  mysql_query("INSERT INTO yibabclearance(staff_id) VALUES('$idno')");										
										$clear6=  mysql_query("INSERT INTO zenzelimaclearance(staff_id) VALUES('$idno')");										
																				
										if($register and $clear6 and $clear and $clear2 and $clear3 and $clear4 and $clear5)
										{
										echo"<tr><td colspan=2>	<div class='alert alert-warning' style='width:70%; float: left; margin-left: 10%;'>
															Sucessfully registred
														</div></td></tr>";
										}										
									}									
								}
				
				
				if(isset($_POST['Import']))
				{
					if($_FILES['file']['name'])
					{
						$filename=explode('.',$_FILES['file']['name']);
						if($filename[1]=='csv')
						{
							$handle=fopen($_FILES['file']['tmp_name'],"r");
							while($data=fgetcsv($handle))
							{
								$password=$data[10].'1234#';
								
								$sqll=mysql_query("INSERT INTO staff(Fname, Mname, Lname, Sex, Idno, Department, password, program, campus, faculty,acadamicYear,phone,mothersFatherName) VALUES('{$data[0]}','{$data[1]}','{$data[2]}','{$data[3]}','{$data[4]}','{$data[5]}','$password','{$data[6]}','{$data[7]}','{$data[8]}','$news','{$data[9]}','{$data[10]}')");                         
								$clear=  mysql_query("INSERT INTO staffclearance(staff_id) VALUES('{$data[4]}')"); 
				
							}
							if($sqll)
								{
									echo "Successfully Registered";
								}
								else
								{
									echo"<div style='color:red'>Invalid File:Please Upload CSV File.</div>";
								}
						   fclose($file);

						}
					}
					
				}
				
			?>
			
	
</table>

</div>
<div style="float:right;width:30%">
<table   cellpadding='4'  cellspacing="0" style="margin-left:2%;width:100%;border-radius:10px; border:5px solid rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);">
			
				
				<tr  bgcolor="lightblue"><th border="1" colspan="3" style="bgcolor:lightblue"><font>Add New staff</font><a href="manage.php"><span style="color:red;margin-left:60%;" class="icon-large icon-remove" align="right" title="close"></span></a></th></tr>
				<tr>
				<td colspan="2">	
				<hr/>
				</td></tr>
				<form action="registerstaff.php" method="post">
				
				<tr>
				<td>
				<font color="red">*</font><label>staff ID</label>
				</td>
				<td>
				<input type="text" name="id" pattern="[A-Za-z0-9]+" required/>
				</td>
				</tr>	
				<tr>
				<td>
				<font color="red">*</font><label>role ID</label>
				</td>
				<td>
				<input type="text" name="rid" pattern="[A-Za-z0-9]+" required/>
				</td>
				</tr>
				<tr>
				<td>
				<font color="red">*</font><label>role name</label>
				</td>
				<td>
				<input type="text" name="rname" pattern="[A-Za-z]+" required/>
				</td>
				</tr>
			<tr>
				<td>
				<font color="red">*</font><label>position</label>
				</td>
				<td>
				<input type="text" name="position" required pattern="[A-Za-z]+"/>
				</td>
			</tr>
			<tr>
				<td><font color="red">*</font><label>contact Address</label> </td>
				<td><input type="text" name="contadd" placeholder="phone number" pattern="[09][0-9].{8}" required title="enter phone number(0935701350)"/><br/><br/>	</td>	
			</tr>  
				<tr><td></td>
				<td>
				<input type="submit" name="adrole" value="add Role"/>
				<input type="reset" value="Reset"/>
				</td>
		</tr>
</form>
				<br><br> 

<?php
						$Today=date('y:m:d');
						$new=date('l, F d, Y',strtotime($Today));
						
						$mon=date('F',strtotime($Today));
						$new=date('Y',strtotime($Today));
						if($mon=='September'||$mon=='October'||$mon=='November'||$mon=='December')
						{
							$news=$new-7;
						}
						else
						{
							$news=$new-8;
						}
						echo $month;
					
							if(isset($_POST['addrole']))
								{
									
									$idno=$_POST['id'];
									$roleid=$_POST['rid'];
									$rolename=$_POST['rname'];
									$position=$_POST['position'];	
									$password=$mfn.'1234#';	
									
									$sql="select * from staff where staffId='$idno'";
									$result=mysql_query($sql);
									if(mysql_num_rows($result)>0)
									{
										echo"<tr><td colspan=2>	<div class='alert alert-warning' style='width:70%; float: left; margin-left: 20%;'>
															This staff is already registerd
														</div></td></tr>";									
									}
									else
									{
										$register=mysql_query("INSERT INTO `role`(`staffId`, `username`, `password`, `role`, `office`, `campus`) VALUES ($idno','$roleid','$password','$rolename','$position','$camp')");										
										if($register)
										{
										echo"<tr><td colspan=2>	<div class='alert alert-warning' style='width:70%; float: left; margin-left: 10%;'>
															Sucessfully registred
														</div></td></tr>";
										}										
									}									
								}
				
				
				if(isset($_POST['Import']))
				{
					if($_FILES['file']['name'])
					{
						$filename=explode('.',$_FILES['file']['name']);
						if($filename[1]=='csv')
						{
							$handle=fopen($_FILES['file']['tmp_name'],"r");
							while($data=fgetcsv($handle))
							{
								$password=$data[10].'1234#';
								
								$sqll=mysql_query("INSERT INTO staff(Fname, Mname, Lname, Sex, Idno, Department, password, program, campus, faculty,acadamicYear,phone,mothersFatherName) VALUES('{$data[0]}','{$data[1]}','{$data[2]}','{$data[3]}','{$data[4]}','{$data[5]}','$password','{$data[6]}','{$data[7]}','{$data[8]}','$news','{$data[9]}','{$data[10]}')");                         
								$clear=  mysql_query("INSERT INTO staffclearance(staff_id) VALUES('{$data[4]}')"); 
				
							}
							if($sqll)
								{
									echo "Successfully Registered";
								}
								else
								{
									echo"<div style='color:red'>Invalid File:Please Upload CSV File.</div>";
								}
						   fclose($file);

						}
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
		<td><p class="f">Copyright &copy; reserved 2024-jju-CMS </p></td>
	</tr>
	</table>
 </body>
</html>