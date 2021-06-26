<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'sapds';
	$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
	$data1 = '';
	$data2 = '';
	$sql = "SELECT * FROM graph";
    $result = mysqli_query($mysqli, $sql);
	while ($row = mysqli_fetch_array($result)) 
    {
		$data1 = $data1 . '"'. $row['disaster'].'",';
		$data2 = $data2 . '"'. $row['count'] .'",';
	}
	$data1 = trim($data1,",");
	$data2 = trim($data2,",");
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <?php 
        include "connection.php";
        include "header.php";
    ?>
    <head><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script></head>
        <!--========== SWIPER SLIDER ==========-->
        <div class="s-swiper js__swiper-slider">
            <!-- Swiper Wrapper -->
            <div class="swiper-wrapper">
                <div class="s-promo-block-v4 g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('img/1920x1080/chart.jpg');">
                    <div class="container g-ver-center--xs">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="g-margin-b-50--xs">
                                    <h1 class="g-font-size-32--xs g-font-size-45--sm g-font-size-60--md g-color--black" style="background-color:white">No. of Occurrences<br>of Disaster</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="s-promo-block-v4 g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('img/1920x1080/chart1.jpg');">
                    <div class="container g-text-right--xs g-ver-center--xs">
                        <div class="row">
                            <div class="col-md-7 col-md-offset-5">
                                <div class="g-margin-b-50--xs">
                                    <h2 class="g-font-size-32--xs g-font-size-45--sm g-font-size-55--md g-color--black" style="background-color:white">May the Count will<br>Decreases Day by Day</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Swiper Wrapper -->

            <!-- Pagination -->
            <div class="s-swiper__pagination-v1 s-swiper__pagination-v1--bc s-swiper__pagination-v1--white js__swiper-pagination"></div>
        </div>
        <!--========== END SWIPER SLIDER ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- Mockup -->
        <div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--xsm" style="color: #E8E9EB;
				background: #222;
				border: #555652 1px solid;
				padding: 10px;
                margin:100px">
            <h1 style="font-family: Arial;
			    margin: 0px 100px 10px 100px;
			    padding: 0;
			    color: white;
			    text-align: center;
			    background: #555652;">No. of Disaster Occurred till now</h1>
            <canvas id="chart" style="width: 100%; height: 40vh; background: #222; border: 1px solid #fcb702; margin-top: 10px;"></canvas>
			<script>
				var ctx = document.getElementById("chart").getContext('2d');
    			var myChart = new Chart(ctx, {
        		type: 'bar',
		        data: {
		            labels: [<?php echo $data1; ?>],
		            datasets: 
		            [
		            {
		            	label: 'No. of Times Occurred',
		                data: [<?php echo $data2; ?>],
		                backgroundColor: 'transparent',
		                borderColor:'rgba(0,255,255)',
		                borderWidth: 2	
		            }]
		        },
		     
		        options: {
		            scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
		            tooltips:{mode: 'index'},
		            legend:{display: true, position: 'top', labels: {fontColor: 'rgb(255,255,255)', fontSize: 16}}
		        }
		    });
			</script>
        </div>
    <table border="1"  class="table table-hover">
        <th>Disaster Name</th>
        <th>No. of Times Occurred</th>
     		<?php
            include "connection.php";
            $sql = "SELECT disaster,count FROM graph WHERE status='1'"; 
        
            if($res = mysqli_query($con, $sql)) 
            { 
                if(mysqli_num_rows($res)>0) 
                { 
                    while ($row = mysqli_fetch_array($res)) 
		            { 
                        echo "<tr>"; 
                        echo "<td>".$row['disaster']."</td>"; 
                        echo "<td>".$row['count']."</td>"; 
                        echo "</tr>"; 
                    } 
                    echo "</table>"; 
            } 
            else 
            { 
                        echo "No matching records are found."; 
            } 
            }  
?> 
    </table>
        <!-- End Mockup -->
    <?php
        include "footer.php";
    ?>
        <!-- End Form -->
        <!--========== END PAGE CONTENT ==========-->