

<!DOCTYPE HTML"><html>
 <head>
 <?php 
	include_once('header.php');	 
 ?>
  <script>
  function isdelete()
  {
   var d = confirm('Are you sure you want to Delete !!');
   if(!d)
   {
    alert(window.location='issuloan.php');
   }
   else
   {
   return false;
    
   }
  }
  </script>
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
				<a href="officer.php"><span class="icon-large icon-home"></span> &nbsp;Home</a></br/>
				<a href="manageItem.php"><span class="icon-large icon-tags"></span> &nbsp;Manage Item</a><br/-->				
				<a href="issuloan.php"><span class="icon-large icon-tags"></span> &nbsp;view issue loan</a><br/-->
				<a href="http://www.jju.edu.et"><span class="icon-large icon-globe"></span> &nbsp;jju Site </a></br/>
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
			<div class="r">
			<table  class="table table-striped table-bordered table-hover"  cellspacing="0" border="2"  id="mydata" style="border-radius:5px;border:1px solid rgba(0,0,0,0.4); border:5px solid rgba(0,0,0,0.4);border-top:25px solid rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);">
			<thead  >
					<tr>
						<th style="text-align:left;" colspan="7" ><span style="border:1px solid gray;padding:5px 10px;border-radius:5px;background-color:lightblue;color:white;"><a href="issuloan.php">Add issu loan</a></span></th>
						
					</tr>
					<tr style="font-size:12">
						<th>idno</th>
						<th>FullName</th>
						<th>sex</th>
						<th>Department</th>
						<th>Campus</th>
						<th>material Id</th>
						<th>material name</th>
						<th>material Type</th>
						<th>Quantity</th>
						<th>loan Date</th>
						<th>Action</th>
					</tr>				
				</thead>
				<tbody>
					<?php	
					$all=mysql_query("select * from studentcase where procurmentOffice='$role'");
					while($row=mysql_fetch_array($all))
						{	
						
							// $id=$row['officerId'];
							$csid=$row['caseId'];
							$id=$row['studId'];
							$mid=$row['MaterialId'];
							$mname=$row['materialName'];
							$mtype=$row['materialType'];
							$qnt=$row['quantity'];
							$prooff=$row['procurmentOffice'];
							$buser=$row['by_user'];
							$londat=$row['date_added'];
							$camp=$row['campus'];
							$stud=mysql_query("select * from student where Idno='$id'");
							$row=mysql_fetch_array($stud);
							$firnam=$row['Fname'];
							$midnam=$row['Mname'];
							$lasnam=$row['Lname'];
							$sex=$row['Sex'];
							$dept=$row['Department'];
							echo '<tr>';
								echo '<td>'.$id.'</td>';
								echo '<td>'.$firnam.' '.$midnam.' '.$lasnam.'</td>';						
								
								echo '<td>'.$sex.'</td>';
								echo '<td>'.$dept.'</td>';
								echo '<td>'.$camp.'</td>';
								echo '<td>'.$mid.'</td>';
								echo '<td>'.$mname.'</td>';
								echo '<td>'.$mtype.'</td>';
								echo '<td>'.$qnt.'</td>';
								echo '<td>'.$londat.'</td>';
								echo "
								<td style='height:30px;'><a href = 'loan_detail.php?key=".$csid."?id=".$id."?role=".$role."'><span style='border:1px solid transparent;padding:5px;border-radius:5px;color:white;background-color:green;' class='icon-edit' title='Edit'></span></a>
								<a href = 'delete_loan.php?key=".$csid."?idss=".$id."?role=".$role."'><span style='border:1px solid transparent;padding:5px;border-radius:5px;color:white;background-color:red;' class='icon-trash' title='Delete' onclick='isdelete();'></span></a></td>";
							echo '</tr>';
						}
					?>
					</tr>
				</tbody>	
			</table>			
		</div>
		</td>
		</tr>
    </table>
	<script>
	$("#mydata").dataTable();
	</script>
	<table id="footer" align="center" style="width:device-width;">
	<tr>
		<td><p class="f">Copyright &copy; reserved 2024-jju-CMS </p></td>
	</tr>
	</table>
 </body>
</html>
<?php

?>