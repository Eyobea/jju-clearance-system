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
			<a href="manage.php"><b>..:: register Loan ::..</b></a>
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
							$camp=$row['campus'];
						}
						$sqls="select * from staff where staffId='$sfid'";
						$qrs=mysql_query($sqls);
						while($row = mysql_fetch_array($qrs))
						{
							$sfid=$row['staffId'];
							$fn=$row['Fname'];
							$mn=$row['Mname'];						
						}
						echo "<a href='changepassword.php'><div id='un' class='icon-large icon-user'> ".$fn.' '.$mn. "</div></a>";
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
						<a href="request.php"><span class="icon-large icon-question"></span> &nbsp;Clearance Request
                <?php
              $que = "select count(*) As total from request where status='0' AND dormitory IS NULL";
              
              $res = mysql_query($que);
              $x=mysql_fetch_array($res);
                  $id = $x['total'];              
                  echo "(".$id.")";
                 ?>        
                </a><br/-->	
    <a href="viewcopmlain.php"><span class="icon-large icon-question"></span> &nbsp;View Complain
    
               <?php
              $que = "select count(*) As total from stud_complian sc,request r where sc.studentid=r.studId AND sc.procurmentOffice='dormitory' AND r.dormitory IS NULL";
              
              $res = mysql_query($que);
              $x=mysql_fetch_array($res);
                  $id = $x['total'];              
                  echo "(".$id.")";
                 ?>  
    
                   </a><br/-->
              	<a href="manageItem.php"><span class="icon-large icon-tags"></span> &nbsp;Registor Material</a><br/-->
				<a href="issuloan.php"><span class="icon-large icon-tags"></span> &nbsp;view issue loan</a><br/-->
				<a href="http://:www.jju.edu.et"><span class="icon-large icon-globe"></span> &nbsp;jju Site </a></br/>
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
	
				<table   cellpadding='4'  cellspacing="0" style="margin-left:25%;width:50%;border-radius:10px; border:5px solid rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);">
			
				
				<tr  bgcolor="lightblue"><th border="1" colspan="3" style="bgcolor:lightblue"><font>register new Material</font><a href="manageItem.php"><span style="color:red;margin-left:60%;" class="icon-large icon-remove" align="right" title="close"></span></a></th></tr>
				<tr>
				<td colspan="2">
                <form action='manageItem.php' method='post' name="upload_excel" enctype="multipart/form-data" style="width: 200px;" role="form">
                <table>
						<tr>
							<td>
								
									
									
							</td>
							
						</tr>
			</table>
                </form>		
				<hr/>
				</td></tr>
			<form action="materialRegister.php" method="post">
				<tr><td><font color="red">*</font><label>Material Id</label></td>
				<td><input type="text" name="materialid" pattern="[A-Za-z0-9]+" required /></td></tr>
				<tr><td><font color="red">*</font><label>Material Name</label></td>
				<td><input type="text" name="matname" pattern="[A-Za-z0-9]+" required /></td></tr>
				<tr><td><font color="red">*</font><label>Quantity</label></td>
				<td><input type="text" name="quantity" required pattern="[0-9]+"/></td></tr>
				<tr><td><font color="red">*</font><label>unit price</label></td>
				<td><input type="text" name="price" required pattern="[0-9]+"/></td></tr>
				
					
				<tr><td>
				</td>
				<td>
				<input type="submit" name="btregister" value="register"/>
				<input type="reset" value="Reset"/>
				</td>
		</tr>
		</form>
				<br><br> 

<?php			
						if(isset($_POST['btregister']))
								{
									
						$Today=date('y:m:d');
						$year=date('Y',strtotime($Today));
						$month=date('F',strtotime($Today));
						$day=date('d',strtotime($Today));
						$news=$year.'-'.$month.'-'.$day;

						$ser=$_POST['materialid'];
						$matname=$_POST['matname'];
						$quantity=$_POST['quantity'];
						$price=$_POST['price'];
						
						$full= $fn.' '.$mn;
						$sqqq=mysql_query("select * from material where materialId='$ser'");
						if(mysql_num_rows($sqqq)>0)
						{
														 
							echo"<tr><td colspan=2>	<div class='alert alert-warning' style='width:50%; float: left; margin-left: 40%;'>
								the item is already registred
							</div></td></tr>";
						
						}
						else {
						$sql=mysql_query("INSERT INTO `material`(`materialId`,`materialName`, `quantity`, `procurmentOffice`, `registeredBy`,`unitprice`)                 VALUES('$ser','$matname','$quantity','$role','$full','$price')");
						if($sql)
						{							 
							echo"<tr><td colspan=2>	<div class='alert alert-warning' style='width:50%; float: left; margin-left: 40%;'>
								Sucessfully registred
							</div></td></tr>";
						}
						}						
					}
			
															
			?>
			
	
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
		<td><p class="f">Copyright &copy; reserved 2024-jju-CMS </p></td>
	</tr>
	</table>
 </body>
</html>