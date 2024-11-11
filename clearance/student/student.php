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
                     echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";
                    
				?>
			</font> 
		</td>
		<td class="nav">
			<a href="student.php"><b>..:: Student Page ::..</b></a>
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
					
						<u><h1 style="text-align:center">The system gives the student for the following information</h2></u>
				<h2 style="margin-left:5%;">
				<span class="icon-large icon-plus" style="color: gray;"></span> View current clearance status:-view the clearane in each office is signed</br></br>
				
               <span class="icon-large icon-plus" style="color: gray;"></span> Send request :-Student can send clearance request with d/t reason</br>
						<hr/ width="90%">
						<span class="icon-large icon-plus" style="color: gray;"></span> If the student is checked like <span class="icon-ok" style="color: green;"></span> the student has free from any loan issue <br>
						<span class="icon-large icon-plus" style="color: gray;"></span> If the student is checked like <span class="icon-remove" style="color: red;"></span> the student has loan <br>
			</h2>
				
				
					</div>
		</td>
		</tr>
    </table>

	<table id="footer" align="center" style="width:device-width;">
	<tr >
		<td><p class="f">Copyright &copy; reserved 2024-JJU-CMS </p></td>
	</tr>
	</table>
 </body>
</html>