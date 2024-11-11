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
			<a href="manage.php"><b>..:: register department ::..</b></a>
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
						<li class="lo"><a href="../index.php?logged=out">Logout</a></li>              
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
				<a href="registrar.php"><span class="icon-large  icon-home"></span> Home</a></br/>
                 <a href="Viewrequest.php"><span class="icon-large  icon-home"></span> Clearance request
      <?php
             $que = "select count(*) As total from request where status='0' AND dormitory IS NOT NULL AND bookstore IS NOT NULL AND cafeteria IS NOT NULL AND sport IS NOT NULL";
              
              $res = mysql_query($que);
              $x=mysql_fetch_array($res);
                  $id = $x['total'];              
                  echo "(".$id.")";
                 ?>  
                 </a></br/>
				<a href="manage.php"><span class="icon-large icon-tags"> </span>  &nbsp;manage student &nbsp;&nbsp;</a><br/>
            <a href="deptView.php"><span class="icon-large icon-tags"> </span>  &nbsp;Manage Department&nbsp;&nbsp;</a><br/>
				<a href="viewStatus.php"><span class="icon-large icon-check"> </span> &nbsp;Clearance Status&nbsp;&nbsp;</a><br/>
       <a href="chengepassword.php"><span class="icon-large icon-question-sign"></span> &nbsp; Changepassword</a></br>
				<a href="http://www.jju.edu.et"><span class="icon-large icon-globe"></span> &nbsp;JJU Site</a></br/>
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
				<table   cellpadding='4'  cellspacing="0" style="margin-left:25%;width:50%;border-radius:10px; border:5px solid rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);">
			
				
				<tr  bgcolor="lightblue"><th border="1" colspan="3" style="bgcolor:lightblue"><font>Add New Department</font><a href="deptView.php"><span style="color:red;margin-left:60%;" class="icon-large icon-remove" align="right" title="close"></span></a></th></tr>
				<tr>
				<td colspan="2">
							
				
                <form action='deptAdd.php' method='post' name="upload_excel" enctype="multipart/form-data" style="width: 200px;" role="form">
                    	<table>
						<tr>
							<td style="width:auto" ><p>Upload Student Data:</p></td>
							<td><input type='file' name='file' id='file' class="form-control" required=""/></td>			
							<td><input type='submit' name='Import' value='upload' class="btn btn-success"/></td>
						</tr>
					</table>
                </form>		
				<hr/>
				</td></tr>
				<form action="deptAdd.php" method="post">
				<tr><td>
				<font color="red">*</font><label>Department Id</label>
				</td><td>
					<input type="text" name="deptid" placeholder="department Id" required pattern="[A-Za-z]+" title="enter character only"/>
					
				</td>
				</tr>
				<tr>
				<td>
				<font color="red">*</font><label>Department Name</label>
				</td>
				<td>
				<input type="text" name="deptname" placeholder="department name" required pattern="[A-Z a-z]+" title="enter character only"/>
				</td>
				</tr>
				<tr>
				<td>
				<font color="red">*</font><label>Faculity Name</label>
				</td>
				<td>
				<input type="text" name="facname" placeholder="faculity name" required pattern="[A-Za-z]+" title="enter character only"/>
					
				</td>
				</tr>
				<tr>
				<td>
				<font color="red">*</font><label>Year</label>
				</td>
				<td>
				<input type="number" name="pyear" placeholder="year" required min="3" max="7"/><br/>
				</td>
				</tr>
				<tr>
				<td><font color="red">*</font><label>campus</label></td><td>
				<select class="fac" required name="campus">
					<option >---select---</option>
					<option value="main campus">main campus</option>
					<option value="riferal">riferal</option>	
				</select>   <br/><br/> </td> 
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
					
	if(isset($_POST['btregister']))
	{
		$id=$_POST['deptid'];
		$facname=$_POST['facname'];
		$deptname=$_POST['deptname'];
		$progm=$_POST['pyear'];
		$camp=$_POST['campus'];
									
		$sql="select * from department where deptId='$id'";
		$result=mysql_query($sql);
		if(mysql_num_rows($result)>0)
	{
		echo"<tr><td colspan='2'>	<div class='alert alert-warning' style='width:70%; float: left; margin-left: 20%;'>
		This department is already registerd
		</div></td></tr>";									
		}





		else
		{
			$register=mysql_query("INSERT INTO `department`(`deptId`, `deptname`, `Faculty`, `campus`, `Year`) VALUES('$id','$deptname','$facname','$camp','$progm')");
			if($register)
			{
		echo"<tr><td colspan='2'>	<div class='alert alert-warning' style='width:70%; float: left; margin-left: 20%;'>
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
								$sqll=mysql_query("INSERT INTO department(deptId, deptname, Faculty, campus, Year) VALUES('{$data[0]}','{$data[1]}','{$data[2]}','{$data[3]}','{$data[4]}')");                         
								$clear=  mysql_query("INSERT INTO studentclearance(stud_id) VALUES('{$data[4]}')"); 
				
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
		</td>
		</tr>
    </table>
	<script>
	$("#mydata").dataTable();
	</script>
	<table id="footer" align="center" style="width:device-width;">
	<tr >
		<td><p class="f">Copyright &copy; reserved 2024-JJU-CMS </p></td>
	</tr>
	</table>
 </body>
</html>