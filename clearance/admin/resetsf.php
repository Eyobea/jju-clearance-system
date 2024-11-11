<?php
session_start();
include 'header.php';
if($log != "log"){
	header ("Location: managestaffaccount.php");
}
$ctrl = $_REQUEST['reset'];
echo $ctrl;

$SQL = "update staff set password='0000' WHERE staffId= '$ctrl'";
mysql_query($SQL);

print "<script>location.href = 'managestaffaccount.php'</script>";
?>