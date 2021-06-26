<?php

	include "connection.php";	
	session_start();
	if(!isset($_SESSION['log']))
	{
		header("location:index.php");
	}
	else
	{	
        $a=$_GET['id'];
        $sql="SELECT * FROM tb1_officer WHERE officer_id='$a'";
        var_dump($sql);
        $query=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($query);
        $email=$row['email'];
        $mobile=$row['phone'];
		$name = $_POST['name'];
		$location = $_POST['location'];
		$description = $_POST['description'];
		$intensity = $_POST['intensity'];
        $query = "INSERT INTO tb1_info(name,location,description,intensity,email,phone) VALUES('$name','$location','$description','$intensity','$email','$mobile')";
        var_dump($query);
        $result = mysqli_query($con,$query);
        function otpprog($name,$mobile,$intensity,$location,$description)
        {
            $authKey = "271017APxFd625Srl5ca729ee";
            $senderId = "BHUMII";
            //$message = urlencode($msg);
            $postData = array(
            'authkey' => $authKey,
            'mobiles' => $mobile,
            'message' => "ALERT !! ,The disaster name ".$name." is going to arrive in ".$location." with the intensity ".$intensity." \n\nDescription: ".$description,
            'sender' => $senderId,
            );
            $url="http://api.msg91.com/api/sendhttp.php";
            $ch = curl_init($url);
            curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData
            //,CURLOPT_FOLLOWLOCATION => true
            ));
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            $response = curl_exec($ch);
            //Print error if any
            if(curl_errno($ch))
            {
                echo 'error:' . curl_error($ch);
            }
            curl_close($ch);
        }
        otpprog($name,$mobile,$intensity,$location,$description);
        header("location:addinfo.php?flag=1");
	}
?>