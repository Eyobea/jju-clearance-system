<?php
session_start();
include 'header.php';
if($log != "log"){
	header ("Location: issuloan.php");
}
$ctrl = $_REQUEST['key'];
$cou=mysql_query("select * from staffcase where caseId='$ctrl'");
$row=mysql_fetch_array($cou);
$casid=$row['caseId'];
$sid=$row['staffId'];
$matId=$row['materialId'];
$matname=$row['materialName'];
$mattype=$row['materialType'];
$proc=$row['procurmentOffice'];
$qnt=$row['quantity'];
$stat=$row['status'];
$recloan=$row['by_user'];
$camp=$row['campus'];
$londat=$row['date_added'];
$curdat=$row['date_returned'];

mysql_query("INSERT INTO `staffcase_trash`(`caseId`, `staffId`, `materialId`, `procurmentOffice`, `quantity`, `by_user`, `campus`, `date_added`, `date_returned`, `returnedby`) VALUES ('$casid','$sid','$matId','$proc','$qnt','$recloan','$camp','$londat','','')");

$check=mysql_query("select * from staffcase where procurmentOffice='$proc' and staffId='$sid' and campus='$camp'");

if(mysql_num_rows($check)==1)
{
	if($comp="um")
	mysql_query("update universitymgmt set $proc='0' where staff_id='$sid' ");
else if($comp="poly")
	mysql_query("update polyclearance set $proc='0' where staff_id='$sid' ");



if($camp=='poly')
		$sql2=  mysql_query("UPDATE polyclearance SET `$proc`='0' WHERE staff_id='$sid'");
	else
		if($camp=='peda')
		$sql2=  mysql_query("UPDATE pedaclearance SET `$proc`='0' WHERE staff_id='$sid'");
	else
		if($camp=='fb')
		$sql2=  mysql_query("UPDATE fbclearance SET `$proc`='0' WHERE staff_id='$sid'");
	else
		if($camp=='yibab')
		$sql2=  mysql_query("UPDATE yibabclearance SET `$proc`='0' WHERE staff_id='$sid'");
	else
		if($camp=='zenzelima')
		$sql2=  mysql_query("UPDATE yibabclearance SET `$proc`='0' WHERE staff_id='$sid'");
	else
		if($camp=='um')
		$sql2=  mysql_query("UPDATE universitymgmt SET `$proc`='0' WHERE staff_id='$sid'");
} 


$SQL =mysql_query( "DELETE FROM staffcase  WHERE caseId= '$ctrl'");
print "<script>location.href = 'issuloan.php'</script>";

?>