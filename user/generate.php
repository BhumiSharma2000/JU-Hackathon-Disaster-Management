<?php
include "connection.php";
include "header.php";
$lo=$_GET['id'];
?>
     <div class="g-fullheight--xs js__parallax-window" style="background: url(img/1920x1080/track.jpg) 50% 0 no-repeat fixed; background-size: cover;">
        </div>
<html>
<head>
</head>
<body>
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Generate QR code
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.html"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Geneate QR code</li>
      </ol>
    </section>
    <section class="content">
    	<div class="row">
    		   <div class="box box-warning">
    		   	            <center>
            <div class="box-header with-border">
                <font style="color:#13b1cd;font-size:25px;">Scan this to track the disaster</font>
            </div>

    		<?php
		$a="SELECT * FROM tb1_currentdisaster WHERE disaster_id=$lo";
		$qw=mysqli_query($con,$a);
		$we=mysqli_fetch_array($qw);
		$p=$we['name'];
		$w=$we['description'];
		$l=$we['occurred_on'];
		include("qr/qrlib.php");
		QRcode::png("Name: ".$p."\n\ndescription : ".$w. "\n\ntime : ".$l,"5.png","H","3","2");
	?>
	<img src="5.png"/>
</center>
    	</div>
            <br/>
            <br/>
    </div>
    </section>
</div>
</body>
<?php
include "footer.php";
?>
</html>
