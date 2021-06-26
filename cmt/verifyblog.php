<?php
include("connection.php");
$id=$_GET['id'];
$qry="SELECT * FROM tb1_blog WHERE blog_id=$id";
$rs=mysqli_query($con,$qry);
$row=mysqli_fetch_array($rs);
$verified=$row['verified'];
if($verified==0)
{
	$qry1="UPDATE `tb1_blog` SET verified=1 WHERE blog_id=$id";
	$rs1=mysqli_query($con,$qry1);
	echo $qry1;
	header("location:manageblog.php");
}
else
{
	echo "error";
	header("location:manageblog.php");
}
?>