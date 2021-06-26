<?php
include("connection.php");
var_dump($_GET);
$id=$_GET['del'];
$qry="SELECT * FROM tb1_ngo WHERE ngo_id=$id";
$rs=mysqli_query($con,$qry);
$row=mysqli_fetch_array($rs);
$active=$row['status'];
if($active==1)
{
	$qry1="UPDATE `tb1_ngo` SET status=0 WHERE ngo_id=$id";
	$rs1=mysqli_query($con,$qry1);
	//echo $qry1;
	header("location:managengo.php");
}
else
{
	echo "error";
	header("location:managengo.php");
}
?>