<?php
        include "connection.php";	
        session_start();
        $email=$_SESSION['log'];
        echo $email;
        $a="SELECT * FROM tb1_login WHERE email_id='$email'";
        var_dump($a);
        $query=mysqli_query($con,$a);
        $result=mysqli_fetch_array($query);
        $log=$result['login_id'];
		$location1=$_POST['location'];
        $description=$_POST['description'];
        $occurred_date=$_POST['occurred_date'];
        $occurred_time=$_POST['occurred_time'];
        $file = $_FILES['image']['tmp_name'];
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_name = addslashes($_FILES['image']['name']);
		move_uploaded_file($_FILES["image"]["tmp_name"],"../photos/" . $_FILES["image"]["name"]);
        $location="../photos/" . $_FILES["image"]["name"];
        if(!$_FILES['image']['name'])
        {
            $location="../photos/a.jpg";
        }
        $query = "INSERT INTO `tb1_incidence`( login_id,`location`, `description`, `image`, `occurred_date`, `occurred_time`, `status`, `verified`) VALUES ('$log','$location1','$description','$location','$occurred_date','$occurred_time','1','0')";
        var_dump($query);
        if(!mysqli_query($con,$query))
        {
            echo "Not inserted...";
        }
        else
        {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully Inserted');window.location.href='latest.php';</script>");
        }
?>