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
		$gender = $_POST['gender'];
		$designation= $_POST['designation'];
		$query2="SELECT * FROM `tb1_officer` WHERE email='$email'";
		$abc=mysqli_query($con,$query2);
		$xyz=mysqli_num_rows($abc);
		$query3="SELECT * FROM `tb1_officer` WHERE  phone='$phone'";
		$abc1=mysqli_query($con,$query3);
		$xyz1=mysqli_num_rows($abc1);
		if($xyz==0 AND $xyz1==0)
		{	
            $query = "INSERT INTO tb1_officer(name,email,phone,address,designation,status) VALUES('$name','$email','$phone','$address','$designation','1')";
            $result = mysqli_query($con,$query);
            header("location:addofficers.php?flag=1");
		}
		else
		{
			header("location:addofficers.php?xyz=1");		
		}
	}
?>