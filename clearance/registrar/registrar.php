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
			<b>..:: Registrar Page ::..</b>
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
						echo "<a href='chengepassword.php'><div id='un' class='icon-large icon-user'> ".$fn.' '.$mn."</div></a>";
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
             /* $que = "select count(*) As total from request where status='0' AND dormitory IS NOT NULL AND bookstore IS NOT NULL AND cafeteria IS NOT NULL AND sport IS NOT NULL";
              
              $res = mysql_query($que);
              $x=mysql_fetch_array($res);
                  $id = $x['total'];              
                  echo "(".$id.")";*/
                 ?>
                 </a></br/>
				<a href="manage.php"><span class="icon-large icon-tags"> </span>  &nbsp;manage student &nbsp;&nbsp;</a><br/>
            <a href="registerStudent.php"><span class="icon-large icon-tags"> </span>  &nbsp;create user account&nbsp;&nbsp;</a><br/>
				<a href="student_detail.php"><span class="icon-large icon-check"> </span> &nbsp;update user account&nbsp;&nbsp;</a><br/>
       <a href="chengepassword.php"><span class="icon-large icon-question-sign"></span> &nbsp; Changepassword</a></br>
				<a href="http://www.jju.edu.et"><span class="icon-large icon-globe"></span> &nbsp;JJU Site</a></br/>
			</div>	
		</td>
		<td class="login_area">
					<table width="100%"><tr>
			<td class="userl">
				<p><?php echo Registrar ?> Page</p>		
			</td>
			</tr>
			</table>
			<div class="userl">
				
			</div>
<?php
	$allstudent=mysql_query("select * from student");
	$notclear=mysql_query("select * from studentclearance where department >='1' or sport >='1' or dormitory >='1' ");
	$all = mysql_num_rows($allstudent);
	$numofnotclr = mysql_num_rows($notclear);
?>			
			<div class="regform">
				<div style="padding-left:20px;padding-top:20px;">
					   <table cellpadding='5' cellpadding="0" cellspacing="0" width=80%; border="1" style="margin:5%">
							<tr class="active">
							
							<tr>
							<td colspan=3>
							<a href="#">jigjiga University Student Clearance Report</a>
							</td>
							</tr>

							</tr><tr class="active">
									<th>No.</th>
									<th>Title</th>
									<th>Quantity</th>
							</tr>
							<tr>
									<td>1. </td>
									<td>Number of Cleared Student</td>
									<td><?php  echo $all-$numofnotclr;  ?></td>
							</tr>
							<tr>
									<td>2. </td>
									<td>Number of UnCleared Student</td>
									<td><?php  echo $numofnotclr;  ?></td>
							</tr>
							<tr class="danger">
									<td>3. </td>
									<td>Total number of Student</td>
									<td><?php  echo $all;  ?></td>
							</tr>
						</table>
					</div>	
			
			</div>
		</td>
		</tr>
    </table>

	<table id="footer" align="center" style="width:device-width;">
	<tr >
		<td><p class="f">Copyright &copy; reserved 2024-JJU-CMS </p></td>
	</tr>
	</table>
 </body>
</html>