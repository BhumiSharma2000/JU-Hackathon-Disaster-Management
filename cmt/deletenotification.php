<?php
include("connection.php");
$id=$_GET['del'];
$qry="SELECT * FROM comments WHERE id=$id";
$rs=mysqli_query($con,$qry);
$row=mysqli_fetch_array($rs);
$status=$row['status'];
if($status==1)
{
	$qry1="UPDATE `comments` SET status=0 WHERE id=$id";
	$rs1=mysqli_query($con,$qry1);
	echo $qry1;
	header("location:managenotification.php");
}
else
{
	echo "error";
	header("location:managenotification.php");
}
?>