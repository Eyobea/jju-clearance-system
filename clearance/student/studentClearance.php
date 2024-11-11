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
			<a href="studentclearance.php"><b> Current Clearance </b></a>
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
						
						$sqls="select * from student where Idno='$userNameD'";
						$qrs=mysql_query($sqls);
						while($row = mysql_fetch_array($qrs))
						{
							$sfid=$row['Idno'];
							$fn=$row['Fname'];
							$mn=$row['Mname'];
							$role=$row['role'];				
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
	
<table id="content" align="center" style="width:device-width;">
	<tr>
		<td class="sidebar">
			<div class="menu">
				<font>Menu</font>
			</div>
			<div class="menuList">
			<a href="student.php"><span class="icon-large icon-home"></span> &nbsp;Home</a></br/>
                <a href="studrequest.php"><span class="icon-large icon-home"></span> &nbsp;Send Request</a></br/>
                 <a href="Viewresponse.php"><span class="icon-large icon-home"></span> &nbsp;View Response</a></br/>
				<a href="studentClearance.php"><span class="icon-large icon-eye-open"></span> &nbsp;Current Clearance</a><br/>
                   <a href="chengepassword.php"><span class="icon-large icon-question-sign"></span> &nbsp; Changepassword</a></br>
				   <a href="printt.php"><span class="icon-large icon-question-sign"></span> &nbsp; Save and print</a></br>
			</div>
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
						$username=$_SESSION['username'];
						$sql_clr=mysql_query("select * from studentclearance where stud_id='$username'");
						while($rows=mysql_fetch_array($sql_clr))
						{
							$facClr=$rows['faculty'];
							$deptClr=$rows['department'];
							$libClr=$rows['library'];
							$bokClr=$rows['bookstore'];
							$caftClr=$rows['cafeteria'];
							$dormClr=$rows['dormitory'];
							$sptClr=$rows['sport'];
							$clrnce=$rows['Clearance'];
						}     			
					?>
					<div class="clrform">
					<table   cellpadding='10' border=1  cellspacing="0" style="margin-left:25%;width:40%;;border-radius:10px; border:5px solid rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);">
																					<tr>
                                            	<th> Offices: </th>
                                            	<th>Status</th>
                                            	<th>Action</th>
                                            </tr>
											<tr>
                                            	<td> Faculty: </td>
                                            	 
												<?php
												
												   if($facClr=='0')
													{
														echo '<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp';
														echo '<span class="icon-ok" style="color: green"></span>';
														echo '</td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp';
														echo '<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp';
														echo '<span> Clear</span>';
														echo '</td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp';
													}
													else
													{
													echo '<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp<span class="icon-remove" style="color: red"></span></td>';
													$caslib='faculty';
													echo '<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp<a href="case.php?role='.$caslib.'"><button style="background-color: #4CAF50;color: white;padding: 3px 10px;margin: 0px 0;border: none;border-radius: 5px;cursor: pointer;font-size:20px;	font-family:times new roman;" name="check_clearance"> view Case</button></a></td>';
												}
                                                    ?>
																</td>
                                            </tr>
                                            <tr>
                                            	<td>Department:</td>
                                            	<?php
												
											   if($deptClr =='0')
												{
													echo '<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp';
														echo '<span class="icon-ok" style="color: green"></span>';
													echo '</td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp';
													echo '<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp';
														echo '<span> Clear</span>';
													echo '</td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp';
												}
												else
												{
													echo '<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp<span class="icon-remove" style="color: red"></span></td>';
													$caslib='department';
													echo '<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp<a href="case.php?role='.$caslib.'"><button style="background-color: #4CAF50;color: white;padding: 3px 10px;margin: 0px 0;border: none;border-radius: 5px;cursor: pointer;font-size:20px;	font-family:times new roman;" name="check_clearance"> view Case</button></a></td>';

												}
										?>
                                            </tr>
                                            <tr>
                                            	<td>Book Store:</td>
                                             <?php

											   if($bokClr=='0')
												{
													echo '<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp';
														echo '<span class="icon-ok" style="color: green"></span>';
													echo '</td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp';
													echo '<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp';
														echo '<span> Clear</span>';
													echo '</td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp';
												}
												else
												{
													echo '<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp<span class="icon-remove" style="color: red"></span></td>';
													$caslib='bookstore';
													echo '<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp<a href="book_store_case.php?role='.$caslib.'&studid='.$username.' "><button style="background-color: #4CAF50;color: white;padding: 3px 10px;margin: 0px 0;border: none;border-radius: 5px;cursor: pointer;font-size:20px;	font-family:times new roman;" name="check_clearance"> view Case</button></a></td>';

												}
										?>
                                            </tr>
                           <?php
                                           /* <tr>
                                            	<td>Library:</td>
                                            	 <?php
												 if($libClr=='0')
												{
													echo '<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp';
														echo '<span class="icon-ok" style="color: green"></span>';
													echo '</td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp';
													echo '<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp';
														echo '<span> Cleared</span>';
													echo '</td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp';
												}
												else
												{
													echo '<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp<span class="icon-remove" style="color: red"></span></td>';
													$caslib='Library';
													echo '<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp<a href="case.php?role='.$caslib.'"><button style="background-color: #4CAF50;color: white;padding: 3px 10px;margin: 0px 0;border: none;border-radius: 5px;cursor: pointer;font-size:20px;	font-family:times new roman;" name="check_clearance"> view Case</button></a></td>';

												}
										?>
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                                            </tr>*/?>
                                            <tr>
                                            	<td>Dormitory: </td>
                                            	 <?php
												
											   if($dormClr=='0')
												{
													echo '<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp';
														echo '<span class="icon-ok" style="color: green"></span>';
													echo '</td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp';
													echo '<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp';
														echo '<span> Clear</span>';
													echo '</td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp';
												}
												else
												{
													echo '<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp<span class="icon-remove" style="color: red"></span></td>';
													$caslib='dormitory';
													echo '<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp<a href="case.php?role='.$caslib.'"><button style="background-color: #4CAF50;color: white;padding: 3px 10px;margin: 0px 0;border: none;border-radius: 5px;cursor: pointer;font-size:20px;	font-family:times new roman;" name="check_clearance"> view Case</button></a></td>';

												}
										?>
                                            </tr>
                                            <tr>
                                            	<td>Cafeteria: </td>
                                            	<?php
					
											   if($caftClr=='0')
												{
													echo '<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp';
														echo '<span class="icon-ok" style="color: green"></span>';
													echo '</td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp';
													echo '<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp';
														echo '<span> Clear</span>';
													echo '</td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp';
												}
												else
												{
													echo '<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp<span class="icon-remove" style="color: red"></span></td>';
													$caslib='cafeteria';
													echo '<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp<a href="case.php?role='.$caslib.'"><button style="background-color: #4CAF50;color: white;padding: 3px 10px;margin: 0px 0;border: none;border-radius: 5px;cursor: pointer;font-size:20px;	font-family:times new roman;" name="check_clearance"> view Case</button></a></td>';

												}
										?>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                                            </tr>
                                            <tr>
                                            	<td>Sport: </td>
                                            	 <?php
				
											   if($sptClr=='0')
												{
													echo '<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp';
														echo '<span class="icon-ok" style="color: green"></span>';
													echo '</td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp';
													echo '<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp';
														echo '<span> Clear</span>';
													echo '</td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp';
												}
												else
												{
													echo '<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp<span class="icon-remove" style="color: red"></span></td>';
													$caslib='sport';
													echo '<td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp<a href="case.php?role='.$caslib.'"><button style="background-color: #4CAF50;color: white;padding: 3px 10px;margin: 0px 0;border: none;border-radius: 5px;cursor: pointer;font-size:20px;	font-family:times new roman;" name="check_clearance"> view Case</button></a></td>';

												}
												?>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                                            </tr>                                            <tr>
                                            	
                                   </table>  							    
				
		</div>
		</div>
		</td>
		</tr>
    </table>

	<table id="footer" align="center" style="width:device-width;">
	<tr >
		<td><p class="f">Copyright &copy; reserved 2024-JJU-CMS</p></td>
	</tr>
	</table>
 </body>
</html>