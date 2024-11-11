<?php
	error_reporting(0);
		$usn="root";
		$pwd="";
		$hostname="localhost";
		$dbcon=mysql_connect($hostname,$usn,$pwd);
		if(!$dbcon)
		{
        die("error connection to database  server".mysql_error());
        }
       $db_selected=mysql_select_db("clearance",$dbcon);
       if(!$db_selected)
	   {
      die("error in selection db".mysql_error());
       }
?>