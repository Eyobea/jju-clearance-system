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
			<b>..:: Admin Page ::..</b>
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
				<li class="lo"><a href="../index.php?logged=out"  spellcheck="false" >Logout</a> </li> 
            
				<?php
				}
				else
				{ 
					?> 
						<li class="lo"><a href="../index.php?logged=out"  spellcheck="false" >Logout</a> </li>          
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
				<a href="Admin.php"><span class="icon-large icon-home"></span> &nbsp; Home</a></br/>
				<a href="Manageaccount.php"><span class="icon-large icon-check"></span> &nbsp; Manage Account</a><br/>
    <a href="chengepassword.php"><span class="icon-large icon-question-sign"></span> &nbsp; Changepassword</a></br>				
				<a href="http://www.jju.edu.et"><span class="icon-large icon-globe"></span> &nbsp;	JJU Site</a></br/>
			</div>
		</td>
		<td class="login_area">
					<table width="100%"><tr>
			<td class="userl">
				<p><?php echo $role ?>Admin page</p>		
			</td>
			</tr>
			</table>
			
				
<?php
	$actstaff=mysql_query("select * from staff where status='0'");
	$decstaff=mysql_query("select * from staff where status='1'");
	
	$actstud=mysql_query("select * from student where status='0'");
	$decstud=mysql_query("select * from student where status='1'");
	
	$actrol=mysql_query("select * from role where status='0'");
	$decrol=mysql_query("select * from role where status='1'");
?>			
			<div class="regform">
				<div style="padding-left:20px;padding-top:20px;">
					   <table cellpadding='5' cellpadding="0" cellspacing="0" width=80%; border="1" style="margin:5%">
							<tr class="active">
							
		
							<tr>
							<td colspan=5>
							<a href="#">Jigjiga University student Clearance Report</a>
							</td>
							</tr>

							</tr>
							<tr class="active">
									<th>No.</th>
									<th>role</th>
									<th>no of activate</th>
									<th>no of Deactivate</th>
									<th>Total</th>
							</tr>
							
							<tr>
									<td>1. </td>
									<td>student</td>
									<td><?php  echo mysql_num_rows($actstud); ?></td>
									<td><?php  echo mysql_num_rows($decstud); ?></td>
									<td><?php  echo mysql_num_rows($actstud)+mysql_num_rows($decstud); ?></td>
							</tr>
							
							
							
						</table>
					</div>	
			
			</div>
		</td>
		</tr>
    </table>

	<table id="footer" align="center" style="width:device-width;">
	<tr >
		<td><p class="f">Copyright &copy; reserved-2024-jju-cms </p></td>
	</tr>
	</table>
 </body>
</html>