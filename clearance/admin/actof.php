<?php
session_start();
include 'header.php';
if($log != "log"){
	header ("Location: managofficereaccount.php");
}
$ctrl = $_REQUEST['disable'];
echo $ctrl;
$SQL = "update role set status='0' WHERE username= '$ctrl'";
mysql_query($SQL);

print "<script>location.href = 'managofficereaccount.php'</script>";
?>