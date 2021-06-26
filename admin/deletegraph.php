<?php
include("connection.php");
var_dump($_GET);
$id=$_GET['del'];
$qry="SELECT * FROM graph WHERE g_id=$id";
$rs=mysqli_query($con,$qry);
$row=mysqli_fetch_array($rs);
$active=$row['status'];
if($active==1)
{
	$qry1="UPDATE `graph` SET status=0 WHERE g_id=$id";
	$rs1=mysqli_query($con,$qry1);
	echo $qry1;
	header("location:managegraph.php");
}
else
{
	echo "error";
	header("location:managegraph.php");
}
?>