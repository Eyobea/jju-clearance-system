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
				<li class="lo"><a href="../index.php?logged=out">Logout</a></li> 
				<?php
				}
				else
				{ 
					?> 
						<li class="lis"><a href="../index.php?logged=out">Logout</a></li>                
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
				
				<a href="http://www.jju.edu.et"><span class="icon-large icon-globe"></span> &nbsp;jju Site</a></br/>
			</div>
		</td>
		<td class="login_area">
					<table width="100%"><tr>
			<td class="userl">
				<p><?php echo $role ?>Active or Diactive page</p>		
			</td>
			</tr>
			</table>
			
		
			<div class="regform">
						<div class="regform">
			<table  class="table table-striped table-bordered table-hover"    border="1"  id="mydata" style="border-radius:5px;border:1px solid rgba(0,0,0,0.4); border:5px solid rgba(0,0,0,0.4);border-top:25px solid rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);">
			<thead >	
			<tr>
			<td colspan=5 style="font-size:16px;background:lightblue"> 
			<span style="box-shadow:0px 0px 20px #336699;padding:10px 5%;border-radius:5px;color:white;border:1px solid red;"><a href="manageaccount.php">manage student account</a></span>
			
			<span style="box-shadow:0px 0px 20px #336699;padding:10px 5%;border-radius:5px;color:white;border:1px solid red;"><a href="managofficereaccount.php">manage officer account</a></span>
			
		</td>
			</tr>
				<tr>
				<th>Idno</th>
				<th>Full name</th>
				<th>role</th>
				
				<th>Action</th>
				</tr>
			</thead>
				<tbody>
		<?php
				$result = mysql_query("SELECT * FROM student ");
				$count=mysql_num_rows($result);
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
					echo '<tr>';
					echo '<td>'.$id.'</td>';
					echo '<td>'.$fname.' '.$mname.' '.$lname.' '.'</td>';
					echo '<td>'.$role.'</td>';
					
					if($stat==0){
					echo"<td style='height:30px;' align = 'center' width = '1'><a href = 'deact.php?enable=".$id."'><span style='border:1px solid transparent;padding:5px;border-radius:5px;color:white;background-color:green;' title='enabled' onclick='isendis();'>Activated</span></a></td>";
				}
				else
				{
				echo"<td style='height:30px;' align = 'center' width = '1'><a href = 'act.php?disable=".$id."'><span style='border:1px solid transparent;padding:5px;border-radius:5px;color:white;background-color:red;' title='disabled' onclick='isendis();'>Deactivated</span></a></td>";
				}
				
				
					
				  }
				  echo '</tr>';
				?>
			</tbody>	
			</table>			
		</div>
		<script>
	$("#mydata").dataTable();
	</script>
			
			</div>
		</td>
		</tr>
    </table>

	<table id="footer" align="center" style="width:device-width;">
	<tr >
		<td><p class="f">Copyright &copy; reserved 2024-jju-CMS </p></td>
	</tr>
	</table>
 </body>
</html>