
<?php
	include_once('header.php');
	session_start();
	if (isset($_GET['logged'])) {
		header("location: login.php");
		session_destroy();
		exit;
	}
	?>
    <!DOCTYPE html>
<html>
<head>
    
</head>
<body>
	<table id="navigation" align="center" style="width:device-width;">
		<tr>
			<td class="time">
				<font>
					<?php
					$Today = date('y:m:d');
					$new = date('l, F d, Y', strtotime($Today));
					echo $new;
					?>
				</font>
			</td>
			<td class="nav">
				<b>..:: Home ::..</b>
			</td>
			<td class="login">
				<a href="login.php"><b>Login</b></a>
			</td>
		</tr>
	</table>
	<table id="content" align="right" style="width:device-width; ">
		<tr>
			<td width="15%" class="lsidebar">
				<div class="menu">
					<font>Menu</font>
				</div>
				<div class="menuList">
					<a href="index.php"><span class="icon-large icon-home"></span> &nbsp;Home</a><br/>
					<a href="about.php"><span class="icon-large icon-file-text"></span> &nbsp;About Us</a><br/>
					<a href="contact.php"><span class="icon-large icon-user"></span> &nbsp;Contact Us</a><br/>
					<a href="http://www.jju.edu.et"><span class="icon-large icon-globe"></span> &nbsp;JJU Site</a><br/>
				</div>
			</td>
			<td class="content_area" width="60%">
				<div id="sliderFrame">
					<div id="slider">
						<img src="styles/slideshow/slide/image1.jpg" alt="jigjiga university logo"/>
						<img src="styles/slideshow/slide/image2.jpg" alt="jigjiga university manegmant"/>
						<img src="styles/slideshow/slide/image3.jpg" alt="jigjiga University"/>
						<img src="styles/slideshow/slide/image4.jpg" alt="jigjiga university library"/>
						<img src="styles/slideshow/slide/image5.jpg" alt="jigjiga University"/>
					</div>
				</div>
			</td>
			<td class="rsidebar">
				<div class="menu">
					<font>About Clearance</font>
				</div>
				<div>
					<p style="width:90%;margin-left:5%;font-size:18px; z-index:1;">
						Clearance System is the system which clears the Jigjiga University student by ensuring that they return the properties pertaining to the University.
					</p>
				</div>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<hr style="width:80%;margin-top:5%;">
				<hr width="95%">
				<hr width="80%">
				<div>
					<div style="float:left;width:auto;border:1px solid #336699;border-radius:10px;margin-left:20px;margin-top:20px;padding:5px;font-size:20px;">
						<h1>Welcome To JJU Clearance Management System</h1>
						<p>As we stated the current system and all the identified problems in Jigjiga Institute Of Technology. We state our proposed system relative to the current system as follows.</p>
						<p>This proposed system will provide online clearance information that students can read and download easily. By this system, users can access their clearance.</p>
						<ul>
							<li class="c">Allow recording of clearance information</li>
							<li class="bullet">Allow recording of issue loan information</li>
							<li class="bullet">Allow recording of material information</li>
							<li class="bullet">Save time for both users from rotating in each office</li>
						</ul>
					</div>
				</div>
				<br/>
				<br/><br/>
			</td>
		</tr>
	</table>
	<table id="footer" align="center" style="width:device-width;">
		<tr>
			<td>
				<p class="f">Copyright &copy; reserved This is an HTML file for a clearance management system. It seems to have some PHP code embedded in it as well. Here's the corrected and complete code:

```html</p> 
</body>
</html>