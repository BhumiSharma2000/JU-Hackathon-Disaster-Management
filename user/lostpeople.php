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
		$name=$_POST['name'];
        $age=$_POST['age'];
        $mobile=$_POST['mobile'];
        $address=$_POST['address'];
        $lost_on=$_POST['lost_on'];
        $file = $_FILES['image']['tmp_name'];
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_name = addslashes($_FILES['image']['name']);
		move_uploaded_file($_FILES["image"]["tmp_name"],"../photos/" . $_FILES["image"]["name"]);
        $location="../photos/" . $_FILES["image"]["name"];
        if(!$_FILES['image']['name'])
        {
            $location="../photos/default.jpg";
        }
        $query = "INSERT INTO `tb1_people`(login_id,`name`, `address`, `age`, `mobile`, `image`, `type`, `active`, `found`, `lost_on`) VALUES ('$log','$name','$address','$age','$mobile','$location','2','1','0','$lost_on')";
        //var_dump($query);
        if(!mysqli_query($con,$query))
        {
            echo "Not inserted...";
        }
        else
        {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully Inserted');window.location.href='people.php';</script>");
        }
?>