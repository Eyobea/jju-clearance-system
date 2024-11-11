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
			<a href="manage.php"><b>..:: update department ::..</b></a>
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
				<a href="registrar.php"><span class="icon-large  icon-home"></span> Home</a></br/>
                 <a href="Viewrequest.php"><span class="icon-large  icon-home"></span> Clearance request
     
        <?php
              $que = "select count(*) As total from request where status='0'";
              
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
				<a href="http://www.bdu.edu.et"><span class="icon-large icon-globe"></span> &nbsp;BDU Site</a></br/>
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
						<?php
			$idn = $_REQUEST['key'];
			$sql=mysql_query("select * from department where deptId='$idn'");
			$result=mysql_num_rows($sql);
			$row=mysql_fetch_array($sql);
			$cc=$row['deptId'];
			$r1=$row['deptname'];
			$r2=$row['Faculty'];
			$r3=$row['campus'];
			$r4=$row['Year'];
			?>
			<form  method="POST" action="#">
				<table   cellpadding='4'  cellspacing="0" style="margin-left:25%;width:50%;border-radius:10px; border:5px solid rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);">	 
					 <tr  bgcolor="lightblue"><th border="1" colspan="3" style="bgcolor:lightblue"><font><?php echo $cc;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><a href="deptView.php"><span style="color:red;margin-left:60%;" class="icon-large icon-remove" align="right" title="close"></span></a></th></tr>
					<tr>

					<tr><td colspan='2'>&nbsp;</td></tr>
						<tr><td>Department Id:</td><td><input type='text' name='did' id='fname' value="<?php echo $cc;?>"></td></tr>
						<tr><td>Department Name:</td><td><input type='text' name='dname' id='mname' value="<?php echo $r1;?>"></td></tr>
						<tr><td>Faculity Name:</td><td><input type='text' name='facname' id='lname' value="<?php echo $r2;?>"></td></tr>
						<tr><td>campus:</td><td><input  type='text' name='camp' value="<?php echo $r3;?>"></td></tr>
						<tr><td>year:</td><td><input  type='text' id='year' name='year' value="<?php echo $r4;?>"></td></tr>
						<tr><td colspan='2'>&nbsp;</td></tr>
						<tr><td colspan='2'>&nbsp;</td></tr>
						<tr><td colspan='2' align='center'><input type='submit' name='update' value='Save Changes'></tr></td>
					</table>
				<?php
	  

				?>
 
 <?php

  if(isset($_POST['update']))
  {
	            $did=$_POST['did'];
				$dname=$_POST['dname'];
				$facname=$_POST['facname'];
				$camp=$_POST['camp'];
				$year=$_POST['year'];
  $update = mysql_query("update department set deptId='$did',deptName='$dname',Faculty='$facname', campus='$camp', Year='$year' WHERE deptId='$idn'") or die(mysql_error());
  if(!$update)
  {
  echo"Error".die(mysql_error());
  }
  else
  {	
echo "<script>window.location='deptView.php';</script>";
 
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
		<td><p class="f">Copyright &copy; reserved 2019-BDU-CMS </p></td>
	</tr>
	</table>
 </body>
</html>