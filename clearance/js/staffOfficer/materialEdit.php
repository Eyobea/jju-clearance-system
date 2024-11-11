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
			<a href="manage.php"><b>..:: update material information ::..</b></a>
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
				<a href="addcase.php"><span class="icon-large icon-save"></span> &nbsp;add issue loan</a><br/-->
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
			$matid = $_REQUEST['key'];
			$sql=mysql_query("select * from material where materialId='$matid'");
			$result=mysql_num_rows($sql);
			$row=mysql_fetch_array($sql);
			$cc=$row['materialId'];
			$r1=$row['materialName'];
			$r2=$row['materialType'];
			$r3=$row['quantity'];
			$r4=$row['status'];
			$r5=$row['measurment'];
		?>
			<form  method="POST" action="#">
				<table   cellpadding='4'  cellspacing="0" style="margin-left:25%;width:50%;border-radius:10px; border:5px solid rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);">	 
					 <tr  bgcolor="lightblue"><th border="1" colspan="3" style="bgcolor:lightblue"><font><?php echo $r1;?>&nbsp;<?php echo $r2;?>&nbsp;&nbsp;&nbsp;</font><a href="manageItem.php"><span style="color:red;margin-left:60%;" class="icon-large icon-remove" align="right" title="close"></span></a></th></tr>
					<tr>

					<tr><td colspan='2'>&nbsp;</td></tr>
						<input type='hidden' name='id' value="<?php echo $cc;?>">
						<tr><td>material name:</td><td><input type='text' name='matname' value="<?php echo $r1;?>"></td></tr>
						<tr><td>mateerial type:</td><td><input type='text' name='mattype' value="<?php echo $r2;?>"></td></tr>
						<tr><td>quantity :</td><td><input type='text' name='qnt' value="<?php echo $r3;?>"></td></tr>
						<tr><td>measurment:</td><td><input  type='text' name='mes' value="<?php echo $r5;?>"></td></tr>
						<tr><td>status:</td><td><input  type='text' name='stat' value="<?php echo $r4;?>"></td></tr>
						</td></tr>
						<tr><td colspan='2'>&nbsp;</td></tr>
						<tr><td colspan='2'>&nbsp;</td></tr>
						<tr><td colspan='2' align='center'><input type='submit' name='update' value='Save Changes'></tr></td>
					</table>
				<?php
	  

				?>
 
 <?php
  if(isset($_POST['update']))
  {
	            $matname=$_POST['matname'];
				$mattype=$_POST['mattype'];
				$qnt=$_POST['qnt'];
				$mes=$_POST['mes'];
				$stata=$_POST['stat'];
				$u=$_POST['id'];
  $update = mysql_query("update material set  materialName='$matname',materialType='$mattype',quantity='$qnt',measurment='$mes',status='$stata'WHERE materialId='$u'") or die(mysql_error());
  if(!$update)
  {
  echo"Error".die(mysql_error());
  }
  else
  {	
echo "<script>window.location='manageItem.php';</script>";
 
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