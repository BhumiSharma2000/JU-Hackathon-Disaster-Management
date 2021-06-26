<?php
include "connection.php";
$dis=$_POST['disaster'];
$cou=$_POST['count'];
if(isset($_POST['insert']))
{
	$t=time();
$timef=date('Y-m-d H:i:s',$t);
    include("connection.php");
	$sql="INSERT INTO graph(g_id,disaster,count,timestamp)VALUES(DEFAULT,'$dis','$cou','$timef')";
	if(mysqli_query($con,$sql))
	{
		echo '<script> alert("Item inserted into checklist")</script>';
		header('Location: addgraph.php');
	}
	else
	{
		echo '<script> alert("Item  NOT inserted into checklist")</script>';
	}
}
?>
