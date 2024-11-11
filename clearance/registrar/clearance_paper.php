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
			<a href="manage.php"><b>..:: clearance paper ::..</b></a>
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
             /* $que = "select count(*) As total from request where status='0' AND dormitory IS NOT NULL AND bookstore IS NOT NULL AND cafeteria IS NOT NULL AND sport IS NOT NULL";
              
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
					<p><?php echo $role ?>Regstirar Page</p>		
				</td>
				</tr>
			</table>
			<div class="regform">
			<div>
			<?php 
			if(isset($_POST['preview']))
			{
                $Today=date("Y/m/d");
				$idnn=$_POST['idn'];
				$accyear=$_POST['news'];
				$program=$_POST['program'];
				$ac=$_POST['ay'];
				$fac=$_POST['Faculty'];
				$dept=$_POST['Department'];
				$year=$_POST['Year'];
				$sem=$_POST['semister'];
				$sex=$_POST['sex'];
				$name=$_POST['name'];
				$reason=$_POST['reason'];
			    $query    =    "SELECT * FROM signedstudent WHERE studId='$idnn' and year='$year'";
				$result    =    mysql_query($query);
				if(mysql_num_rows($result)>0)
				{
					
				}
				else
				{
                   
					$name=$_POST['name'];
					echo $name;
                    
                    $Today=date('y:m:d');
						$new=date('l, F d, Y',strtotime($Today));
						
						$mon=date('F',strtotime($Today));
						$new=date('Y',strtotime($Today));
						if($mon=='September'||$mon=='October'||$mon=='November'||$mon=='December')
						{
							$news=$new-7;
						}
						else
						{
							$news=$new-8;
						}
                      $sineddate=date("Y/m/d");
					$sqll=mysql_query("INSERT INTO `signedstudent`(`studId`, `Status`, `Reason`, `Date`, `FullName`, `sex`, `faculty`, `department`, `year` ,semister) VALUES ('$idnn','Cleared','$reason','$sineddate','$name','$sex','$fac','$dept','$year','$sem')");
                    $sqll1=mysql_query("update request set status='1' where studId='$idnn'");
				}
			}
			/*if(isset($_POST['report']))
			{
					$idnn=$_POST['idn'];
					
				$sqlq=mysql_query("update report set print_status='1' WHERE stud_id='$idnn'");
			}*/
?>
		<form action="#" method="post">
			<input type="hidden" value="<?php  echo $_POST["idn"];  ?>" name="idn"/>
		<button onclick="PrintDiv()" name="report" type="submit" style="margin: 10px 0 0 26%; "><span class="icon-large icon-print "></span> Print</button>       
		</form>
		<div id="divToPrint" style=" width: 900px; margin-left: 50px;font-family: times new roman;">
			<div style="border: dashed;background: white;font-size:large;">
				<center>
					<h5 style="color:red ;margin-top:1%;">JIGJIGA UNIVERSITY OFFICE OF  REGISTRAR </h5>
					<h5 style="color:red ; margin-top:0%;"><?php echo strtoupper($program);?> STUDENT CLEARANCE SHEET</h5>
					<h5 style="text-align:left;margin-left:5%;">purpose : </h5>
					
					<p style="text-align:left;margin:0% 2% ;margin">
						 If you went to have a healthy relationship with the university it is very important to the student to complete their clearance from property and return it to the university registrar before you leave the university campus what ever the reason may be. only with the proper termination below was official transcripts ,leter of enrolment,student copy,or horonable dismisal be issued.readmission to any unit of the university will be considered only if proper termination is certified by the university registrar.
					</p>
					<?php
						if(isset($_POST['preview']))
						{
                             $sqlc=mysql_query("select * from request r,student stud where r.studId=stud.Idno");
                              while($row=mysql_fetch_array($sqlc)){
                             $request_date=$row['request_date'];
                }
							echo '<br/>Acadamic Year : <u>'.$accyear. ' E.C</u>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;semister :  <u>'.$sem.'</u>';
						echo '</center>';
						echo '<h3 style="margin:2px 5%;"><u>Personal Data</u></h3>';
						echo "<div style='margin:2px 5%;'><br/>Name : ". $name. "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sex : ".$sex."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Idno : ".$idnn."</div>";
						echo "<div style='margin:2px 5%;'><br/>Faculty : ".$fac. "
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;Department : ".$dept."
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;year : ".$year."</div><br/>";
						
						echo "<div style='margin:2px 5%;'><span style='font-size:20px'><b>Reason for clearing the university  :  ".$reason."</b></span></div><br/><br/>";
						echo"<div style='margin:2px 5%;'> Regidterar Signatures : ".$request_date."
						<p>_____________________</p></div>";
						echo"<div style='margin:2px 5%;'> Date of application by the student : ".$request_date."
						<p>Signatures of applicant:_____________________</p></div>";
						//echo "<div style='margin:2px 5%;font-size:26'><u>Signatures from different office</u></div>";
						
						
						
						
						$results=mysql_query("select * from studentclearance where stud_id='$idnn'");
											while($rows=mysql_fetch_array($results))
											{
												
												$facClr=$rows['faculty'];
												$deptClr=$rows['department'];
												$libClr=$rows['library'];
												$bokClr=$rows['bookstore'];
												$cafeClr=$rows['cafeteria'];
												$dormClr=$rows['dormitory'];
												$sportClr=$rows['sport'];
											}
									$res=mysql_query("select * from request where studId='$idnn'");
                                    $row=mysql_fetch_array($res);
                                     $department_advisor=$row['department_advisor'];
                                     $bookstore=$row['bookstore'];
                                     $dormitory=$row['dormitory'];
                                      $cafeteria=$row['cafeteria'];
                                      $sport=$row['sport'];
                                
                            
											echo "<div style=';font-size:26'>
											<table   cellpadding='5' cellspacing='0' style='padding:25px;margin-left:5%;width:50%;'>";
						
										
											
											   
											    if($facClr=='0')
												//echo "<tr><td>Faculity </td><td> Approved<tr><td>";
												if($deptClr=='0')
												//echo "<tr><td>Department </td><td> ".$department_advisor."<tr><td>";
												if($libClr=='0')
												//echo "<tr><td>library </td><td> Approved<tr><td>";
												if($bokClr=='0')
												//echo "<tr><td>bookstore </td><td> ".$bookstore."<tr><td>";
												if($cafeClr=='0')
												//echo "<tr><td>cafteria </td><td> ".$cafeteria."<tr><td>";
												if($dormClr=='0')
												//echo "<tr><td>dormitary </td><td> ".$dormitory."<tr><td>";
												if($sportClr=='0')
												//echo "<tr><td>sport </td><td> ".$sport."</td></tr>";
												echo "<tr><td><center style='color:blue;width:50%;padding:2% 20%;margin-left:30%;border:1px dashed blue;border-radius:20px;'> with out registrar seal it is not valid <br /></center> ";
												$qryd=mysql_query("DELETE FROM request where studId='$idnn'");
												
												echo '</tr>';
											echo "</table></div>";
						
						
						
						echo "<div style='margin:2px 5%;'>date of reciving the clearance by the recorder of the clearance : ".$new."</div>";
						}
						
					?>
				<table cellpadding='7' style="margin-left: 30px;" >
						
																	
										
				
		
		
				</table> 
				<br />		
				
				<center> *****************************************************************<br /></center> 
    
			</div>
			
			
			
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