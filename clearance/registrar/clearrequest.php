<!DOCTYPE HTML"><html>
 <head>
 <?php 
	include_once('header.php');	 
    $sqlb=mysql_query("select * from studentcase");
      $pro=$_POST['procurmentOffice'];
$idds=$_GET['res'];
if(isset($_GET['res']))
{

$sqlre=mysql_query("select * from request where studId='$idds' and status='0'");
    while($row=mysql_fetch_array($sqlre)){
        $studidre=$row['studId'];
        $responsestud=$row['cause'];
    }
    $sqll=mysql_query("select * from studentcase where studId='$idds' ");
	while($row=mysql_fetch_array($sqll))
	{
		$rol=$row['procurmentOffice'];
	}
	$aa=mysql_num_rows($sqll);
	if($aa>0)
	{
		mysql_query("update studentclearance set Clearance='1' where stud_id='$idds'");
	}
	else{
		mysql_query("update studentclearance set Clearance='0' where stud_id='$idds'");
	}
	
}
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
			<b>..:: view Clearance ::..</b></a>
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
              $que = "select count(*) As total from request where status='0' AND dormitory IS NOT NULL AND bookstore IS NOT NULL AND cafeteria IS NOT NULL AND sport IS NOT NULL";
              
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
			<div class="clrform">				
                           <?php    
								$id= $_REQUEST['res'];
								$sql=mysql_query("select * from student where Idno='$id'");
								while($row=mysql_fetch_array($sql))
								{
									$id=$row['Idno'];
									$fn=$row['Fname'];
									$mn=$row['Mname'];
									$ln=$row['Lname'];
									$sex=$row['Sex'];
                                    $yr=$row['year'];
									//$yr=$row['year'];
									$stat=$row['status'];
									$dept=$row['Department'];
									$fac=$row['faculty'];
									$ay=$row['acadamicYear'];
									$program=$row['program'];
								}
                        
                          //echo $yr;
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
						$y=$news-$ay+1;
								$results=mysql_query("select * from studentclearance where stud_id='$id' ");
											while($rows=mysql_fetch_array($results))
											         {
												
					$facClr=$rows['faculty'];
					$deptClr=$rows['department'];
					$libClr=$rows['library'];
					$bokClr=$rows['bookstore'];
					$cafeClr=$rows['cafeteria'];
					$dormClr=$rows['dormitory'];
					$sportClr=$rows['sport'];
					$clrnce=$rows['Clearance'];
                   $detadv=$rows['department_advisor'];
                  $bs=$rows['bookstore'];
                   $dorm=$rows['dormitory'];
                   $cafe=$rows=['cafeteria'];
                      $sp=$rows['sport'];
											             }											
										?>
				<div style="float:left;width:55%;">
				<table   cellpadding='5' border=1 cellspacing="0" style="margin-left:25%;width:100%;border-radius:10px; border:5px solid rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);">
					<tr  bgcolor="lightblue"><th border="1" colspan="3" style="bgcolor:lightblue"><a href="manage.php"><span style="margin-left:95%;color:red" class="icon-large icon-remove" align="right" title="close"></span></a><font><?php echo $fn." ". $mn. " ". $ln."&nbsp;&nbsp;&nbsp;&nbsp;    clearance Information ";?></font></th></tr>
				<tr>
				<td> Faculty: </td>
				<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
							<?php
							if($facClr=='0')
					{
							echo '<span class=" icon-ok" style="color: green;"></span>';
							}
							else
							{
							echo '<span class="icon-remove" style="color: red;"></span>';
								}
						?>
					</td>
					</tr>
					<tr>
					<td>Department:</td>
					<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
					<?php
					 if($deptClr =='0')
						{
						echo '<span class="icon-ok" style="color: green;"></span>';
						}
                                                       
                                                    else
                                                           {
						echo '<span class="icon-remove" style="color: red;"></span>';
															}
						?>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
													</td>
						</tr>
						<tr>
						<td>Book Store:</td>
					<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php
					 if($bokClr=='0')
								{
						echo '<span class="icon-ok" style="color: green;"></span>';
				              	}
										else
						{
							echo '<span class="icon-remove" style="color: red;"></span>';
						}
					?>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
						</tr>
												<tr>
													<td>Library:</td>
													<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php
																			   if($libClr=='0')
																				{
																					echo '<span class="icon-ok" style="color: green;"></span>';
																				}
																				else
																				{
																					echo '<span class="icon-remove" style="color: red;"></span>';
																				}
																		?>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
												</tr>
												<tr>
													<td>Dormitory: </td>
													<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php
																			   if($dormClr=='0')
																				{
																					echo '<span class="icon-ok" style="color: green;"></span>';
																				}
																				else
																				{
																					echo '<span class="icon-remove" style="color: red;"></span>';
																				}
																		?>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
												</tr>
												<tr>
													<td>Cafeteria: </td>
													<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php
																			   if($cafeClr=='0')
																				{
																					echo '<span class="icon-ok" style="color: green;"></span>';
																				}
																				else
																				{
																					echo '<span class="icon-remove" style="color: red;"></span>';
																				}
																		?>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
												</tr>
												<tr>
													<td>Sport: </td>
													<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php
																			   if($sportClr=='0')
																				{
																					echo '<span class="icon-ok" style="color: green;"></span>';
																				}
																				else
																				{
																					echo '<span class="icon-remove" style="color: red;"></span>';
																				}
																		?>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
												</tr>
										
										
										<tr>
											<td>
												<h3>Clearance Reason</h3>
											</td>
											<td>
												<form action="clearance_paper.php" method="POST">
													<input type="hidden" name="name" value="<?php echo  $fn ." ".$mn. " ".$ln; ?>"/>
												<input type="hidden"name="idn" value="<?php echo $id; ?>"/>
												<input type="hidden"name="news" value="<?php echo $news; ?>"/>
												<input type="hidden"name="sex" value="<?php echo  $sex; ?>"/>
												<input type="hidden"name="Year" value="<?php echo  $yr; ?>"/>
												<input type="hidden"name="semister" value="<?php echo  $sem;?>"/>
												<input type="hidden"name="Department" value="<?php echo $dept; ?>"/>
												<input type="hidden"name="Faculty" value="<?php echo $fac; ?>"/>
												<input type="hidden"name="program" value="<?php echo $program; ?>"/>
												<input type="hidden"name="ay" value="<?php echo $news; ?>"/>
													
                                                  <input type="text" name="reason" value="<?php echo $responsestud; ?>"  />
                                                    
                                                    
                                                    
													<br />
                                          
														<?php
													 $sql=mysql_query("select * from request where  status='0' AND dormitory IS NOT NULL AND bookstore IS NOT NULL AND cafeteria IS NOT NULL AND sport IS NOT NULL");	
															if($clrnce=='0')
															{ 
																
																?>
																<button type="submit" name="preview" formtarget="_blank"> <span class="icon-print"></span> Print Preview</button>
														  <?php  
														  }
															else
															{ 
															   
																?>
																	 
														  <?php  
														  }
														
														?>
												</form>
												
												
												
												
											</td>
										</tr>
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
		<td><p class="f">Copyright &copy; reserved 2024-JJU-CMS </p></td>
	</tr>
	</table>
 </body>
</html>