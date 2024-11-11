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
			<a href="officer.php"><b>..:: staff officer Page ::..</b></a>
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
	
<table id="content" align="center" style="width:device-width;">
	<tr>
		<td class="sidebar">
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
		</td>
		<td class="login_area">
				<table width="100%">
				<tr>
				<td class="userl">
					<p><?php echo $role ?> Online Clearance Information System</p>		
				</td>
				</tr>
				</table>
                    <?php  
						$username=$_SESSION['username'];
						$sql_clr=mysql_query("select DISTINCT staffId from staffcase where procurmentOffice='$role'");
						$tot=mysql_query("select * from clearance");
						$result=mysql_num_rows($sql_clr);     			
						$total=mysql_num_rows($tot);     			
					?>
					<div class="clrform">
			 <table cellpadding='5' cellpadding="0" cellspacing="0" width=80%; border="1" style="margin:5%">
                                        <tr class="active">
                                                <th colspan="3"> Bahirdar University number of staff loan</th>
                                        </tr><tr class="active">
                                                <th>No.</th>
                                                <th>Title</th>
                                                <th>Quantity</th>
                                        </tr>
                                        <tr>
                                                <td>1. </td>
                                                <td>Number of staff loan issue</td>
                                                <td><?php  echo $result;  ?></td>
                                        </tr>
                                        <tr>
                                                <td>2. </td>
                                                <td>Number of staff staff</td>
                                                <td><?php  echo $total  ?></td>
                                        </tr>
                                      </table>
			
			
				
				
					</div>
		</td>
		</tr>
    </table>

	<table id="footer" align="center" style="width:device-width;">
	<tr >
		<td><p class="f">Copyright &copy; reserved 2019-BDU-CMS</p></td>
	</tr>
	</table>
 </body>
</html>