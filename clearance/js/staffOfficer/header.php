<?php

  session_start();
      	if(!isset($_SESSION["username"])){
  		header("Location: ../login.php"); 
  	}	


?>
<!DOCTYPE HTML">
<html>
 <head>
	<title>BahirDar University Online  Clearance Information</title>
	<meta charset=UTF-8">
	<link rel="shortcut icon" href="image/logoicon.jpg" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	
	<link rel="stylesheet" href="styles/Home.css" type="text/css"/> 
	<link rel="stylesheet" href="styles/header.css" type="text/css"/> 
	<link rel="stylesheet" href="styles/manage.css" type="text/css"/> 
	<link rel="stylesheet" href="styles/font-awesome/css/font-awesome.css" type="text/css"/> 
	<link href="styles/slideshow/imageslider.css" rel="stylesheet" type="text/css" />
	<script src="styles/slideshow/imageslider.js" type="text/javascript"></script>
	
	
	
	<link href="js/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="js/css/dataTables.bootstrap.css" rel="stylesheet"/>
	<link href="js/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
	<script src="js/js/jquery.js"></script>
	<script src="js/js/jquery.dataTables.min.js"></script>
	<script src="js/js/dataTables.bootstrap.min.js"></script>
	
	    

	</head>
 <body>
<table id="banner"align="center" style="width:device-width;background:#6CC0F5;">
	<tr>
		<th class="logo">
			<img src="image/logo.jpg" height="50%" width="25%"/>
			<p>ከ አባይ ጓዳ ጥበብ ሲቀዳ<br/>Wisdom At The Source Of  Blue Nile</p>
		</th>		
		<th class="bdu">
			<p>BahirDar University <br/>Online Clearance Information</p>
		</th>		
		<th class="since">
			       
		</th>
	</tr>
</table>
	<?php include('db_config/dbcon.php'); ?>
 </body>
</html>