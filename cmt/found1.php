<?php
include("connection.php");
$id=$_GET['id'];
$qry="SELECT * FROM tb1_people WHERE people_id='$id'";
$rs=mysqli_query($con,$qry);
$row=mysqli_fetch_array($rs);
$verified=$row['found'];
if($verified==0)
{
	$qry1="UPDATE `tb1_people` SET found=1 WHERE people_id='$id'";
	$rs1=mysqli_query($con,$qry1);
	echo $qry1;
	header("location:managefoundpeople.php");
}
else
{
	echo "error";
	header("location:managefoundpeople.php");
}
?>