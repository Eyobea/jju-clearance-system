<!DOCTYPE HTML">
<html>
 <head>
 <?php 
   session_start();
      	if(!isset($_SESSION["username"])){
  		header("Location: Home.php"); 
  	} 
	include_once('header.php');
 ?>
 </head>
 <body>
 	<div id="navigation">
		<div class="time">
			<font  color="white" style="font-family:times new roman">
				<?php
					$Today=date('y:m:d');
					$new=date('l, F d, Y',strtotime($Today));
					echo $new;
				?>
			</font> 
		</div>
		
		<div class="nav">
			<a href="viewCase.php"><b>..:: view Case ::..</b></a>
		</div>
		<div class="lio">
			 <ul>
			  <?php
			  session_start();
			   if(isset($_SESSION["username"]))
			   {
				$userNameD = ucfirst($_SESSION["username"]);
				?>
					  <li> <?php
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

		   
								?></li> 
			<li class="lo"><a href="../Login.php">Logout</a></li>
				<?php
				
				}
				else
				{ ?> 
						<li class="lis"><a href="#login">Login</a></li>               
			  
					<?php
				}
				
				?>
					
			</ul>
		</div>
	</div>
	<div id="content">
		<div class="l_bar">
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
		</div>
		<div class="Acontent_area">
			<div class="AOnline">
				<p><?php echo $role ?> Online Clearance Information System</p>	
			</div>
			<div class="Acontent">
				<?php
					$idstud=$_GET['res'];
					$vname=mysql_query("select * from staff where Idno='$idstud'");
					$row=mysql_fetch_array($vname);
					$firname=$row['Fname'];
					$lasname=$row['Lname'];
					$midname=$row['Mname'];
				echo '<h2 style="margin-left:25%;"><u>'.$firname.' '.$midname.' '.$lasname.'</u></h2>';
				?>
			
			
			<table cellpadding='5' width="95%" cellpadding="0" cellspacing="0" border="1" class="table  table-bordered" id="example">			
				<tr>
					<th>No</th>
					<th>studId</th>
					<th>Material Id</th>
					<th>Material Name</th>
					<th>Material Type</th>
					<th>quantity</th>
					<th>Date Added</th>
					<th>Status</th>
					<th>Recorded By</th>
					<th>Action</th>
				</tr>
				<tr>
				<?php
				$role=$_SESSION['role'];
				if(isset($_GET["res"]))
				{
					$id=$_GET['res'];
					$case=mysql_query("select * from staffcase where procurmentOffice='$role' and studId='$id'");
				}
				$count=mysql_num_rows($case);
				if($count>0)
				{
					$i=0;
					while($row=mysql_fetch_array($case))
					{				
						
						$casid=$row["caseId"];
						$id=$row["studId"];
						$matid=$row["MaterialId"];
						$matn=$row["materialName"];
						$matt=$row["materialType"];
						$qnt=$row["quantity"];
						$date=$row["date_added"];
						$stat=$row["status"];
						$usr=$row["by_user"];
					?>
					<tr>
						<td><?php echo $i+=1 ?></td>
						<td><?php echo $id; ?></td>
						<td><?php echo $matid; ?></td>
						<td><?php echo $matn; ?></td>
						<td><?php echo $matt; ?></td>
						<td><?php echo $qnt; ?></td>
						<td><?php echo $date; ?></td>
						<td><?php echo $stat; ?></td>
						<td><?php echo $usr; ?></td>
						<td><?php echo ' <a href="viewCase.php?ress='.$casid.'"><button name="check_clearance" <meta content="5;viewstaff.php" http-equiv="refresh"> />> <span class="icon-large icon-trash" style="color:red "></span></button></a>';?></td>
						
					<tr>
					<?php
					}	
				}
				else
				{
					echo "<div style='color:red; margin-left:140px; margin-top:-30px; margin-bottom: 40px;'><tr><td colspan=10 style='text-align:center;color:red;font-style:italic;'>No Results Found</tr></td></div>";
				}
			if(isset($_GET["ress"]))
				{
					$casid=$_GET['ress'];					
					$case=mysql_query("delete from staffcase where caseId='$casid'");
					mysql_query("INSERT INTO `staffcase_trash`(`studId`,`materialId`, `materialName`, `materialType`, `procurmentOffice`, `quantity`, `status`, `by_user`, `campus`, `date_added`, `date_returned`) VALUES ('$id','$matid','$matn','$matt','$role','$qnt','$stat','$usr','$camp','dat','now()')");
				}	
				?>
				</tr>
			</table>
			</div>
		</div>
    </div>
	<div id="footer">
		<p class="f">Copyright &copy; reserved 2019-BDU-CMS</p>
	</div>
 </body>
</html>