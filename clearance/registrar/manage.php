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
    alert(window.location='manage.php');
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
			<b>..:: Manage Student ::..</b></a>
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
           /*  $que = "select count(*) As total from request where status='0' AND dormitory IS NOT NULL AND bookstore IS NOT NULL AND cafeteria IS NOT NULL AND sport IS NOT NULL";
              
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
			<table width="100%">
				<tr>
				<td class="userl">
					<p><?php echo $role ?> Page</p>		
				</td>
				</tr>
			</table>
			<?php
				$allstudent=mysql_query("select * from student");
				$notclear=mysql_query("select * from studentclearance where Clearance='1'");
				$all = mysql_num_rows($allstudent);
				$numofnotclr = mysql_num_rows($notclear);
			?>	
  			
  			
			<div class="regform">
			<table  class="table table-striped table-bordered table-hover"    border="1"  id="mydata" style="border-radius:5px;border:1px solid rgba(0,0,0,0.4); border:5px solid rgba(0,0,0,0.4);border-top:25px solid rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);">
			<thead >
					<tr>
						<th style="text-align:left;" colspan="7" ><span style="border:1px solid gray;padding:5px 10px;border-radius:5px;background-color:lightblue;color:white;"><a href="registerStudent.php">Add New Student</a></span></th>
						
					</tr>
					<tr>
						<!--th style="width:5;font-size:12;">No</th-->
						<th style="width:5;">Year</th>
						<th style="width:5;">idno</th>
						<th style="width:auto;">FullName</th>
						<th style="width:5;">sex</th>
						<th style="width:5;">phone number</th>
						<th style="width:auto;">Department</th>
						<th style="width:5;">program</th>
						<th style="width:5;">check Clearance</th>
						<th >Action</th>
					</tr>				
				</thead>
				<tbody>
					<?php	
						 $all=mysql_query("select * from student");
						 $i=0;
						while($row=mysql_fetch_array($all))
						{	
						
							// $id=$row['officerId'];
							$accyear=$row['acadamicYear'];
							$id=$row['Idno'];
							$phn=$row['phone'];
							$fn=$row['Fname'];
							$mn=$row['Mname'];
							$ln=$row['Lname'];
                            $yr=$row['year'];
							$program=$row['program'];
							$sex=$row['Sex'];
							$dept=$row['Department'];
							$camp=$row['campus'];
							
							$Today=date('y:m:d');
						$new=date('l, F d, Y',strtotime($Today));
						
						$mon=date('F',strtotime($Today));
						$new=date('Y',strtotime($Today));
						if($mon=='September'||$mon=='October'||$mon=='November'||$mon=='December')
						{
							$news=$new-7;
							$sem='I';
						}
						else
						{
							$news=$new-8;
							$sem='II';
						}
						
						$a= $news-$accyear+1;
							
							
							
								$i=$i+1;
							echo '<tr>';
								// echo '<td>'.$i.'</td>';

								echo '<td>'.$yr.'</td>';
								echo '<td>'.$id.'</td>';
								echo '<td>'.$fn.' '.$mn.'</td>';						
								
								echo '<td>'.$sex.'</td>';
								echo '<td>'.$phn.'</td>';
								echo '<td>'.$dept.'</td>';
								echo '<td>'.$program.'</td>';
								echo "
								<td style='height:30px;'><a href = 'viewClearance.php?res=".$id."'><span style='border:1px solid transparent;padding:5px;border-radius:5px;color:white;background-color:green;' title='Check Clearance'>Check Clearance</span></a></td>";
								
								echo "
								<td style='height:30px;'><a href = 'student_detail.php?key=".$id."'><span style='border:1px solid transparent;padding:5px;border-radius:5px;color:white;background-color:green;' class='icon-edit' title='Edit'></span></a>
								<a href = 'deleteStud.php?key=".$id."'><span style='border:1px solid transparent;padding:5px;border-radius:5px;color:white;background-color:red;' class='icon-trash' title='Delete' onclick='isdelete();'></span></a></td>";
							echo '</tr>';
						}
						
					?>

					</tr>
				</tbody>	
			</table>			
		</div>
		
		 <script type="text/javascript">     
				function PrintDiv() 
				{    
				   var divToPrint = document.getElementById('divToPrint');
				   var popupWin = window.open('', '_blank', 'width=600,height=600');
				   popupWin.document.open();
				   popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
					popupWin.document.close();
				}
            </script>
		
		
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