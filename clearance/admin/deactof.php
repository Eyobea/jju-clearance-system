<?php
session_start();
include 'header.php';
if($log != "log"){
	header ("Location: managofficereaccount.php");
}
$ctrl = $_REQUEST['enable'];
echo $ctrl;
$SQL = "update role set status='1' WHERE username= '$ctrl'";
mysql_query($SQL);

print "<script>location.href = 'managofficereaccount.php'</script>";
?>