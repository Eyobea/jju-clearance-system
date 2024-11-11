

<!DOCTYPE HTML"><html>
 <head>
 <?php 
	include_once('header.php');	 
 ?>
  <script>
  function isreject()
  {
   var d = confirm('Are you sure you want to reject !!');
   if(!d)
   {
    alert(window.location='issuloan.php');
   }
   else
   {
   return false;
    
   }
  }
      function isaccept(){
         var d = confirm('Are you sure you want to Accept Request !!');
   if(!d)
   {
    alert(window.location='Viewrequest.php');
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
			<a href="manage.php"><b>..:: view issue loan ::..</b></a>
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
                 <a href="request.php"><span class="icon-large icon-save"></span> &nbsp;Clearance Request
                <?php
                $que = "select count(*) As total from request where status='1'";
              
              $res = mysql_query($que);
              $x=mysql_fetch_array($res);
                  $id = $x['total'];              
                  echo "(".$id.")";
                 ?>
				
                
				<a href="viewArchive.php"><span class="icon-large icon-archive"></span> &nbsp;View Archive File</a><br/>
				<a href="http//:www.jju.edu.et"><span class="icon-large icon-globe"></span> &nbsp;JJU Site </a></br/>
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
			<div class="r">
			<table  class="table table-striped table-bordered table-hover"  cellspacing="0" border="2"  id="mydata" style="border-radius:5px;border:1px solid rgba(0,0,0,0.4); border:5px solid rgba(0,0,0,0.4);border-top:25px solid rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);">
			<thead  >
					<tr style="font-size:12">
						<th>No</th>
						<th>Student id</th>
                        <th>Student Name</th>
                        <th>Department</th>
						<th>Reason for Clearance</th>
						<th>request date</th>
						<th>department advisor</th>
                       
						
						
					</tr>				
				</thead>
				<tbody>
					<?php	
  
                      $i=1;
					$all=mysql_query("select * from request where status='1'");
					while($row=mysql_fetch_array($all))
						{	
							$studid=$row['studId'];
							$reason=$row['cause'];
							$Today=$row['request_date'];
                            $response=$row['response'];
                        $qryselect=mysql_query("select * from student where Idno='$studid'");
                        $row1=mysql_fetch_array($qryselect);
                        $dept=$row1['Department'];
                        $fname=$row1['Fname'];
                        $lname=$row1['Mname'];
							$fullname=$fname ."  " .$lname;
            
							echo '<tr>';
						        echo '<td>'.$i.'</td>';		
                                 echo '<td>'.$studid.'</td>';
                                echo '<td>'.$fullname.'</td>';
                               echo '<td>'.$dept.'</td>';
								echo '<td>'.$reason.'</td>';
								echo '<td>'.$Today.'</td>';
                               
																
								echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<td style='height:30px;'><a href='accept.php?studid=".$studid."&stafid=".$sfid."&role=".$role."'><span style='border:1px solid transparent;padding:5px;border-radius:5px;color:white;background-color:green;'  title='Accept' onclick='isaccept();'>Accept</span></a>
                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href = 'reject.php?key=".$studid."&idss=".$id."&role=".$role."'><span style='border:1px solid transparent;padding:5px;border-radius:5px;color:white;background-color:red;' title='reject' onclick='isreject();'>reject</span></a></td>";
                        
                        
                        
                        
							echo '</tr>';
                        $i+=1;
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
		<td><p class="f">Copyright &copy; reserved 2024-JJU-CMS </p></td>
	</tr>
	</table>
 </body>
</html>
<?php

?>