<?php
include("connection.php");
$id=$_GET['del'];
$qry="SELECT * FROM tb1_blog WHERE blog_id=$id";
$rs=mysqli_query($con,$qry);
$row=mysqli_fetch_array($rs);
$status=$row['status'];
if($status==1)
{
	$qry1="UPDATE `tb1_blog` SET status=0 WHERE blog_id=$id";
	$rs1=mysqli_query($con,$qry1);
	echo $qry1;
	header("location:viewblog.php");
}
else
{
	echo "error";
	header("location:viewblog.php");
}
?>