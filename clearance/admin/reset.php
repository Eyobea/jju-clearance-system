<?php
session_start();
include 'header.php';
if($log != "log"){
	header ("Location: manageaccount.php");
}
$ctrl = $_REQUEST['reset'];
echo $ctrl;

$SQL = "update student set password='0000' WHERE Idno= '$ctrl'";
mysql_query($SQL);

print "<script>location.href = 'manageaccount.php'</script>";
?>