<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include "connection.php";?>
<!DOCTYPE HTML>
<html>
<head>
<title>SAPDS  </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Trendy Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
</head>

<body>
<!-- banner -->
	
			<div class="upcoming-events-grids">
				<div class="col-md-12 upcoming-events-left">
					<h3>Current videos</h3>
					<?php //for ($i=0;$i<5;$i++)
						//{	
							?>
					<div class="gallery">
						<div class="col-md-5 gallery-left">
						<?php $qry1="SELECT vid_url,description
										FROM tb1_videos ORDER BY v_id DESC";
									
									$result=mysqli_query($con,$qry1);
									while($value=mysqli_fetch_array($result))	//divide output row in array
									{
										?>
							<div class="grid">
								
							</div>
						</div>
						<div class="col-md-9 gallery-right">
						
							<div class="gallery-right1">
								<div class="gallery-right1-left">
									<!--<img src="images/12.jpg" alt=" " class="img-responsive" />-->
									<?php
									echo "<iframe src='".$value['vid_url']."'frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
									?>
									
									
									
								</div>
								
									
									<i><?php echo $value['description'];  ?></i><span></span></p>
									</p>
									
								</div>
								<div class="clearfix"> </div>
					
							</div>
									<?php } ?>
							
							
							
							<!--<div class="gallery-right1">
								<div class="gallery-right1-left">
									<img src="images/16.jpg" alt=" " class="img-responsive" />
								</div>
								<div class="gallery-right1-right">
									<p><a href="single.html">Quis autem vel eum iure reprehenderit</a><span>31.12.2015</span></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="gallery-right1">
								<div class="gallery-right1-left">
									<img src="images/18.jpg" alt=" " class="img-responsive" />
								</div>
								<div class="gallery-right1-right">
									<p><a href="single.html">Quis autem vel eum iure reprehenderit</a><i>Error sit voluptatem accusantium doloremque.</i><span>31.12.2015</span></p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>-->
						
						<div class="clearfix"> </div>
						
					</div>

							<?php //} ?>
							
						<div class="clearfix"> </div>
					</div>
				</div>
		</div>
	</div>
<!-- //news-and-events -->
<!-- footer -->
	
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>