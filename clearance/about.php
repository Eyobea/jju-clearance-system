<!DOCTYPE HTML">
<html>
 <head>
 <?php 
	include_once('header.php');
	session_start();
    if(isset($_GET['logged']))
	{
		Header("location:index.php");
		session_destroy();
		
	}
 ?>
 </head>
 <body>
 	<table id="navigation" align="center" style="width:device-width;">
		<tr>
		<td class="time">
			<font>
				<?php
					$Today=date('y:m:d');
					$new=date('l, F d, Y',strtotime($Today));
					echo $new;
				?>
			</font> 
		</td>
		<td class="nav">
			<b> ABOUT US </b>
		</td>
		<td class="login">
			<a href="Login.php"><b>Login</b></a>
		</td>
		</tr>
	</table>
	<table id="content" align="right" style="width:device-width;">
		<tr>
			<td width="15%" class="lsidebar">
				<div class="menu">
					<font>Menu</font>
				</div>
				<div class="menuList">
					<a href="index.php" > <span class="icon-large icon-home"> </span> &nbsp;Home</a></br/>
					<a href="About.php"><span class="icon-large icon-file-text"> </span> &nbsp;About Us</a><br/>
					<a href="contact.php"><span class="icon-large icon-user"> </span> &nbsp;Contact Us</a><br/>
					<a href="http://www.jju.edu.et"><span class="icon-large icon-globe"></span> &nbsp;JJU Site</a></br/>
				</div>	
			</td>
			<td class="content_area">
			<table width="100%"><tr>
			<td class="userl">
				<p class="logimg"><span  style="color:#206BA4"> Mission,Vission And Background of the university</span></p>	
			</td>
			</tr>
			</table>
				<h1>Mission</h1>
				<p class="mv">JIGJIGA University is To effectively conceive, develop, implement, utilize, and manage appropriate information systems in order to provide integrated, coordinated and customer-focused quality ICT services.</p>
				<h1>Vission</h1>
				<p class="mv">JIGJIGA University is To be a center of innovation in the provision of quality ICT services.</p>

					<div id="abbdu"> 
						<div class="discription">
						<h1>About Jigjiga university</h1>
						<p class="bd">
						Jigjiga University is one of the public higher institutions that was founded in March 2007, along with the Second-Generation universities in Ethiopia. 
						</p>
						</div>
						
			</td>
			<td class="rsidebar">
				<div class="menu">
					<font>About Clearance</font>
				</div>
				
				<div>
					
					<p style="width:90%;margin-left:5%;font-size:18px;">
						Clearance System is the system which clears the Jigjiga University student by ensuring that they return the properties pertaining to the University. 
					</p>
				</div>
			</td>
		</tr>
    </table>
	<table id="footer" align="center" style="width:device-width;">
	<tr >
		<td><p class="f">Copyright &copy; reserved 2024</p></td>
	</tr>
	</table>
 </body>
</html>