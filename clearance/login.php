<!DOCTYPE HTML">
<html>
 <head>
 <?php 
	include_once('header.php');
	session_start();
    if(isset($_GET['logged']))
        {
            Header("location:login.php");
            session_destroy();
            
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
		<b>..:: Login ::..</b>
		</td>
		<td class="login">
			
		</td>
		</tr>
	</table>
	
	<table id="content" align="center" style="width:device-width;">
	<tr>
		<td class="lsidebar">
			<div class="menu">
				<font>Menu</font>
			</div>
			<div class="menuList">
				<a href="index.php" > <span class="icon-large icon-home"> </span> &nbsp;Home</a></br/>
				<a href="About.php"><span class="icon-large icon-file-text"> </span> &nbsp;About Us</a><br/>
				<a href="http://www.jju.edu.et"><span class="icon-large icon-globe"></span> &nbsp;jju Site</a></br/>
			</div>
		</td>
		<td class="login_area">
			<table width="100%"><tr>
			<td class="userl">
				<p class="logimg"><span class="icon-large icon-user" style="color:#206BA4"> User Log In</span></p>	
			</td>
			</tr>
			</table>			
			<div class="loginform">
				<form method="POST">
					<span class="icon-large icon-user" style="color:blue-black"></span>&nbsp;username&nbsp;&nbsp;<input type="text" name="idno" x-moz-errormessage="Enter valid username"  required /><br/><br/>
					<span class="icon-large icon-question-sign" style="color:blue-black"></span>&nbsp;password&nbsp;&nbsp;<input type="password" name="password" id="pw" password" x-moz-errormessage="Enter valid password"  /><br/><br/>
					<input type="submit" value="Login" class="btn-" name="btlogin" style="background:#386699">	<br/><br/>
				    <p><a href="forgote.php">forgote password for staff</a></p>
					<a href="forgotesttaf.php">forgote password for student</a>
				
						  <?php 
							 $flag=0;
							if(isset($_POST['btlogin']))
							{
								$username=$_POST['idno'];
								$password=$_POST['password'];
								
								$password=$password;	
												
									$sqlOfficer = "select * from role where username = '$username' AND password='$password'";
									$sqlStaff = "select * from staff where staffId = '$username' AND password='$password'";
									$sqlStudent = "select * from student where Idno = '$username' AND password='$password'";
									$qrO = mysql_query($sqlOfficer);  													
									$qrSf = mysql_query($sqlStaff);  													
									$qrSt = mysql_query($sqlStudent);  	
									if(mysql_num_rows($qrO)>0)
									{
										$qr=$qrO;
									}
									else if(mysql_num_rows($qrSf)>0)
									{
										$qr=$qrSf;										
									}
									else if(mysql_num_rows($qrSt)>0)
									{
										$qr=$qrSt;										
									}
													$result = mysql_num_rows($qr);																								
													if($result>0)
													{
														 $flag=1; 
														while($row = mysql_fetch_array($qr))
														{
															$user_role= $row['role'];
															$stat=$row['status'];
															$off=$row['office'];
                                            
														}
														if($stat=='0')
														{
															$_SESSION["username"]=$username;
															$_SESSION["role"]=$user_role;
															$_SESSION["pass"]=$password;
															if($user_role=='Admin')
															{
																  header("Location: admin/Admin.php"); 
                                                               // echo "admin";
                                                                
															}
                                                            
															if($user_role=='student')
															{
                                                               
                                                                    
																header("Location: student/student.php");
                                                               // echo "student";
															}
															
                                                            else 
															if($user_role=='library')
															{
																header("Location:library/officer.php");
                                                               // echo "registrar";
                                                                
															}
                                                            else 
															if($user_role=='dormitory')
															{
																header("Location: dormitory/officer.php");
                                                               // echo "registrar";
                                                                
															}
                                                            
                                                            
                                                             else 
															if($user_role=='sport')
															{
																header("Location: sport/officer.php");
                                                               // echo "registrar";
                                                                
															}
                                                            
                                                            
                                                            
															else 
															if($user_role=='registrar')
															{
																header("Location: registrar/registrar.php");
                                                               // echo "registrar";
                                                                
															}
															else 
															if($user_role=='cafe')
															{
																header("Location: cafe/officer.php");
                                                               // echo "registrar";
                                                                
															}
															
															  else if($user_role=='cafeteria' && $off=='student') {
                                                                 header("Location:cafe/officer.php") ;
                                                              }   
                                                            
                                                             else if($user_role=='department' && $off=='student') {
                                                                 header("Location:department/officer.php") ;
                                                              } 
                                                                                                        
                                                          
                                                            
                                                            
															else 
															if($user_role=='bookstore' && $off=='student' )
															{
																header("Location: library/library.php");  
                                                                echo "library";
                                                               
															}
                                                            
                                                            
															
                                                      
                                                                
                                                            
															else
																if($off=='student' )
																{
																	header("Location: studentOfficer/officer.php");  
                                                                    echo "studofficer";
																}
                                                            
                                                            
															
															else
															{
																echo("not exist");
															}
														}
														else
														{  
															?>
													<div class="alert alert-danger" style="width: 400px; margin-left: 30%;">
													   Your account is not activated Please Contact the Administrator!!
													 
													</div>
															<?php	
														}
													}
													else
													{   
														?>
														<div class="alert alert-warning" style="width: 300px; float: left; margin-left: 40%;">
															Incorrect Username or Password
														</div>
														<?php
													}
													$time=date('H:i:s');
													$dat=date('Y-M-D');
													if($flag==0)
													{
														
														$qr=mysql_query("insert into history(idno,date,time,role,status) values('$username','$dat','$time','$user_role','try to login')");
													}
													else
													if($flag==1)
													{
														$qr=mysql_query("insert into history(idno,date,time,role,status) values('$username','$dat','$time','$user_role','loged')");
													}						
							}
							?>
			</form>		
			</div>
		</td>
		</tr>
    </table>
	<table id="footer" align="center" style="width:device-width;">
	<tr >
		<td><p class="f">Copyright &copy; reserved-2024-jju-CMS </p></td>
	</tr>
	</table>
 </body>
</html>