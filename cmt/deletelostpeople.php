<?php
include("connection.php");
$id=$_GET['del'];
$qry="SELECT * FROM tb1_people WHERE people_id='$id'";
$rs=mysqli_query($con,$qry);
$row=mysqli_fetch_array($rs);
$status=$row['active'];
if($status==1)
{
	$qry1="UPDATE `tb1_people` SET active=0 WHERE people_id='$id'";
	$rs1=mysqli_query($con,$qry1);
	echo $qry1;
	header("location:managelostpeople.php");
}
else
{
	echo "error";
	header("location:managelostpeople.php");
}
?>