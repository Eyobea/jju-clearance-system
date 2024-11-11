

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
			<a href="manage.php"><b>..:: view Archive file ::..</b></a>
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
			<div class="r">
			<table  class="table table-striped table-bordered table-hover"  cellspacing="0" border="2"  id="mydata" style="border-radius:5px;border:1px solid rgba(0,0,0,0.4); border:5px solid rgba(0,0,0,0.4);border-top:25px solid rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);">
			<thead  >
					<tr style="font-size:12">
						<th>No</th>
						<th>studId</th>
						<th>Material Id</th>
						<th>quantity</th>
						<th>Date Added</th>
						<th>Date returned</th>
						<th>Recorded By</th>
					</tr>				
				</thead>
				<tbody>
					<?php	
						 $all=mysql_query("select * from staffcase_trash where procurmentOffice='$role'");
						 $i=0;
						while($row=mysql_fetch_array($all))
						{	
							$id=$row["staffId"];
							$matid=$row["materialId"];
							$qnt=$row["quantity"];
							$date=$row["date_added"];
							$rdate=$row["date_returned"];
							$usr=$row["by_user"];
							$sq=mysql_query("select * from material where materialId='$matid'");
							$row=mysql_fetch_array($matid);
							$matn=$row["materialName"];
							$matt=$row["materialType"];
							$i=$i+1;
							echo '<tr>';
								echo '<td>'.$i.'</td>';
								echo '<td>'.$id.'</td>';
													
								
								echo '<td>'.$matid.'</td>';
								echo '<td>'.$qnt.'</td>';
								echo '<td>'.$date.'</td>';
								echo '<td>'.$rdate.'</td>';
								echo '<td>'.$usr.'</td>';
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
	<tr >
		<td><p class="f">Copyright &copy; reserved 2019-BDU-CMS</p></td>
	</tr>
	</table>
 </body>
</html>
<?php


?>