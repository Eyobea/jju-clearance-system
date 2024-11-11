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
			<a href="manage.php"><b>..:: update loan information ::..</b></a>
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
				<a href="officer.php"><span class="icon-large icon-home"></span> &nbsp;Home</a></br/>
				<a href="manageItem.php"><span class="icon-large icon-tags"></span> &nbsp;Manage Item</a><br/-->				
				<a href="issuloan.php"><span class="icon-large icon-tags"></span> &nbsp;view issue loan</a><br/-->
				<a href="viewArchive.php"><span class="icon-large icon-archive"></span> &nbsp;View Archive File</a><br/>
				<a href="http//:www.bdu.edu.et"><span class="icon-large icon-globe"></span> &nbsp;BDU Site </a></br/>
			</div>
		</td>
		<td class="login_area">
			<table width="100%">
				<tr>
				<td class="userl">
					<p><?php echo $role ?> Online Clearance Information System</p>		
				</td>
				</tr>
			</table>			
			<div class="regform">
						<?php
						
			$idn = $_REQUEST['key'];
			$sql=mysql_query("select * from staffcase where caseId='$idn'");
			$result=mysql_num_rows($sql);
			$row=mysql_fetch_array($sql);
			$cc=$row['studId'];
			$r1=$row['MaterialId'];
			$r2=$row['studId'];
			$r3=$row['quantity'];
			?>
			<form  method="POST" action="#">
				<table   cellpadding='4'  cellspacing="0" style="margin-left:25%;width:50%;border-radius:10px; border:5px solid rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);">	 
					 <tr  bgcolor="lightblue"><th border="1" colspan="3" style="bgcolor:lightblue"><font><?php echo $r1;?>&nbsp;<?php echo $r2;?>&nbsp;&nbsp;&nbsp;</font><a href="manage.php"><span style="color:red;margin-left:60%;" class="icon-large icon-remove" align="right" title="close"></span></a></th></tr>
					<tr>

					<tr><td colspan='2'>&nbsp;</td></tr>
						<input type='hidden' name='id' id='fname' value="<?php echo $cc;?>">
						
						<tr><td>stud Id:</td><td><input type='text' name='studid' value="<?php echo $r2;?>"></td></tr>
						<tr><td>material Id:</td><td><input type='text' name='matid' value="<?php echo $r1;?>"></td></tr>
						<tr><td>quantity :</td><td><input type='text' name='qny' id='lname' value="<?php echo $r3;?>"></td></tr>
						</td></tr>
						<tr><td colspan='2'>&nbsp;</td></tr>
						<tr><td colspan='2'>&nbsp;</td></tr>
						<tr><td colspan='2' align='center'><input type='submit' name='update' value='Save Changes' "></tr></td>
					</table>
				<?php
	  

				?>
 
 <?php
  if(isset($_POST['update']))
  {
				$u=$_POST['caseId'];
				$idnn=$_POST['studid'];
	            $mid=$_POST['matid'];
				$qnt=$_POST['qnt'];
  $update = mysql_query("update staffcase set  studId='$idnn',MaterialId='$mid',quantity='$qnt' WHERE caseId='$u'") or die(mysql_error());
  if(!$update)
  {
  echo"Error".die(mysql_error());
  }
  else
  {	
echo "<script>window.location='issuloan.php';</script>";
 
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
		<td><p class="f">Copyright &copy; reserved 2019-BDU-CMS</p></td>
	</tr>
	</table>
 </body>
</html>