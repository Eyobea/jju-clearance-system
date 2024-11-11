<?php
session_start();
include 'header.php';
if($log != "log"){
	header ("Location: managofficereaccount.php");
}
$ctrl = $_REQUEST['reset'];
echo $ctrl;

$SQL = "update role set password='0000' WHERE username= '$ctrl'";
mysql_query($SQL);

print "<script>location.href = 'managofficereaccount.php'</script>";
?>