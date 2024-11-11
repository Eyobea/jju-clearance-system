<?php
session_start();
include 'header.php';
if($log != "log"){
	header ("Location: managestaffaccount.php");
}
$ctrl = $_REQUEST['enable'];
echo $ctrl;
$SQL = "update staff set status='1' WHERE staffId= '$ctrl'";
mysql_query($SQL);

print "<script>location.href = 'managestaffaccount.php'</script>";
?>