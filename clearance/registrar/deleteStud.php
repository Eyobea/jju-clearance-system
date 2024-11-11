<?php
session_start();
include 'header.php';
if($log != "log"){
	header ("Location: manage.php");
}
$ctrl = $_REQUEST['key'];
$SQL = "DELETE FROM student WHERE Idno= '$ctrl'";
mysql_query($SQL);

print "<script>location.href = 'manage.php'</script>";
?>