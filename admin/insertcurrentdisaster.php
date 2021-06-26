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
        $description= $_POST['description'];                        
        $date=$_POST['dob'];
		$file = $_FILES['image']['tmp_name'];
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_name = addslashes($_FILES['image']['name']);
		move_uploaded_file($_FILES["image"]["tmp_name"],"../photos/" . $_FILES["image"]["name"]);
        $location="../photos/" . $_FILES["image"]["name"];
        if(!$_FILES['image']['name'])
        {
            $location="../photos/default.png";
        }
        $query = "INSERT INTO `tb1_currentdisaster`(`name`, `description`, `image`, `occurred_on`, `status`) VALUES ('$name','$description','$location','$date','1')";
        $result = mysqli_query($con,$query);
        var_dump($query);
        header("location:addcurrentdisaster.php?flag=1");
    }
?>