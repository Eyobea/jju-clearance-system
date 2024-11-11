

<!DOCTYPE HTML"><html>
 <head>
 <?php 
	include_once('header.php');	 
 ?>
  <script>
  function is_Material_return()
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
			<b>..:: view issue loan ::..</b></a>
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
				<a href="library.php"><span class="icon-large icon-home"></span> &nbsp;Home</a></br/>
                <a href="request.php"><span class="icon-large icon-save"></span> &nbsp;Clearance Request
                <?php
              $que = "select count(*) As total from request where status='0' AND bookstore IS NULL";              
              $res = mysql_query($que);
              $x=mysql_fetch_array($res);
                  $id = $x['total'];              
                  echo "(".$id.")";
                 ?> <br>
             <a href="viewcompain.php"><span class="icon-large icon-question"></span> &nbsp;View Complain
    
               <?php
              $que = "select count(*) As total from stud_complian sc,request r where sc.studentid=r.studId AND sc.procurmentOffice='dormitory' AND r.bookstore IS NULL";
              
              $res = mysql_query($que);
              $x=mysql_fetch_array($res);
                  $id = $x['total'];              
                  echo "(".$id.")";
                 ?>  <br>
				<a href="manageBook.php"><span class="icon-large icon-tags"></span> &nbsp;Manage book</a><br/-->				
				<a href="borrowedBook.php"><span class="icon-large icon-tags"></span> &nbsp;borrowed Book</a><br/-->
				<a href="http://www.jju.edu.et"><span class="icon-large icon-globe"></span> &nbsp;jju Site </a></br/>
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
						<th>Student id no</th>
						<th>Student name</th>
						<th>material Id</th>
						<th>Quantity</th>
						<th>loan Date</th>
						<th>Action</th>
					</tr>				
				</thead>
				<tbody>
					<?php	
              $studid=$_REQUEST['key'];
              $role=$_REQUEST['role'];
                     $i=1;
					$all=mysql_query("select * from studentcase sc,student stud where sc.studId=stud.Idno AND studId='$studid' AND procurmentOffice='$role'");
					while($row=mysql_fetch_array($all))
						{	
							$csid=$row['caseId'];
							
							$mid=$row['matId'];
							$qnt=$row['quantty'];
							$prooff=$row['procurmentOffice'];
							$buser=$row['by_user'];
							$londat=$row['date_added'];
							$fname=$row['Fname'];
                           $lname=$row['Lname'];
                                                

							echo '<tr>';
						        echo '<td>'.$i.'</td>';		
                                 echo '<td>'.$studid.'</td>';
                               
								echo '<td>'.$fname.'      &nbsp;&nbsp;&nbsp;&nbsp;'.$lname.'</td>';
								echo '<td>'.$mid.'</td>';
								echo '<td>'.$qnt.'</td>';
								echo '<td>'.$londat.'</td>';
								echo "
								<td style='height:30px;'><a href = 'returnbook.php?key=".$csid."&studid=".$studid."&bookid=".$mid."&role=".$role."'><span style='border:1px solid transparent;padding:5px;border-radius:5px;color:white;background-color:green;'  title='Return Book'>Return</span></a> &nbsp;
								
                                <a href = 'checkpayment.php?key=".$csid."&studid=".$studid."&role=".$role."'><span style='border:1px solid transparent;padding:5px;border-radius:5px;color:white;background-color:blue;'  title='Check payment' >Check</span></a>
                                  &nbsp;
                                  <a href = 'bookstore_finance.php?key=".$csid."&studid=".$studid."&role=".$role."'><span style='border:1px solid transparent;padding:5px;border-radius:5px;color:white;background-color:red;'  title='Send to Finance' >
                              send to Finance
                                
                                </span></a>
                                </td>";
                          
							echo '</tr>';
                        $i++;
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