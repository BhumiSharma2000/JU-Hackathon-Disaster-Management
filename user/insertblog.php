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
            $title=$_POST['title'];
            $author=$_POST['author'];
            $description=$_POST['description'];
            $dob=$_POST['dob'];
            $file = $_FILES['image']['tmp_name'];
            $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
            $image_name = addslashes($_FILES['image']['name']);
            move_uploaded_file($_FILES["image"]["tmp_name"],"../photos/" . $_FILES["image"]["name"]);
            $location="../photos/" . $_FILES["image"]["name"];
            if(!$_FILES['image']['name'])
            {
                $location="../photos/blog.jpg";
            }
            $query = "INSERT INTO tb1_blog(login_id,Title,Author,description,publish_date,image,status,verified)VALUES('$log','$title','$author','$description','$dob','$location','1','0')";
            //var_dump($query);
            if(!mysqli_query($con,$query))
            {
                echo "Not inserted...";
            }
            else
            {
               echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully Inserted');window.location.href='blog.php';</script>");
            }
?>