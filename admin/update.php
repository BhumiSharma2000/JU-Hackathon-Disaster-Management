<?php
$count=$_POST["ans"];
$t=time();
$timef=date('Y-m-d H:i:s',$t);
include("connection.php");
if(isset($_POST['myform']))
{
	$sql="
     UPDATE`graph` SET count= count+1 WHERE disaster='".$count."'";
	if(mysqli_query($con,$sql))
	{
		echo '<script> alert("UPDATED  successfully")</script>';
		header('Location: addgraph.php');
	}
	else
	{
		echo '<script> alert("Item  NOT updated :(")</script>';
	}
}


?>