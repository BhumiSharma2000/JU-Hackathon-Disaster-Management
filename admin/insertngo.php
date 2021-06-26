<?php
	include "connection.php";	
	session_start();
	if(!isset($_SESSION['log']))
	{
		header("location:index.php");
	}
	else
	{	
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$ngo_type = $_POST['ngo_category'];	
        $query = "INSERT INTO tb1_ngo(ngo_id,name,phone,email,address,category,status) VALUES('','$name','$phone','$email','$address','$ngo_type','1')";
        $result = mysqli_query($con,$query);
        header("location:addngo.php?flag=1");
    }
?>