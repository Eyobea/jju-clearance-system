<?php
session_start();
include 'header.php';
if($log != "log"){
	header ("Location: manageItem.php");
}
$ctrl = $_REQUEST['key'];
$SQL =mysql_query( "DELETE FROM material  WHERE materialId= '$ctrl'");

print "<script>location.href = 'manageItem.php'</script>";

?>