<?php

	include "connection.php";
		
		
		$msg = $_POST['msg'];
		
	
		$link=$_POST['uploadlink'];
		$replace=str_replace("watch?v=","embed/","$link");
	
		$add=rtrim($replace,"&feature=youtu.be");
		
		
			
		/*$q1="SELECT login_id FROM tbl_login WHERE email_id='$log'";
		$e1=mysqli_query($con,$q1);
		$id1=mysqli_fetch_array($e1);
		$id=$id1['login_id'];*/
			
		$query = "INSERT INTO tb1_videos(vid_url,description,timestamp) VALUES('$add','$msg',NOW())";
		
		$result = mysqli_query($con,$query);
		
		
				
			if(!$result)
			{
				printf("Errormessage: %s\n", mysqli_error($con));
				echo "Not inserted...";
			}
			
			else
			{
				
				
				header("refresh:0; url=addvid.php?flag=1");
				
			}	
			
		
	
	

?>