<?php include("header.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Service Centers
        <small>Admin Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Manage Service Center</li>
      </ol>
      <?php
        if(isset($_GET['flag'])){
        if($_GET['flag']==1)
          {
            echo "<center><font style='color:green; text-align:center'>Profile Edited Successfully</font></center><br/>";
          
          }
        }

      ?>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
      <div class="row">
	    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Manage Service center</h3>

              
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>No</th>
        <th>Disaster Name</th>
        <th>No. of Times Occurred</th>
                  </tr>
				
				<?php
				include "connection.php";
					 $sql = "SELECT * FROM graph WHERE status='1'"; 
               $res = mysqli_query($con, $sql);
               $seq=1;
               while ($row = mysqli_fetch_array($res)) 
                {  
				?>
                <tr>
                  <td><?php echo $seq;?></td>
				  <td><?php echo $row['disaster'];?></td>
				  <td><?php echo $row['count'];?></td>
   
				<td> 
				  <a class="btn btn-success btn-xs" href="editgraph.php?id=<?php echo $row['g_id'];?> " 
					onclick="return confirm('Sure to Edit ?');">EDIT</a> &nbsp;&nbsp;
				  <a class="btn btn-danger btn-xs" href="deletegraph.php?del=<?php echo $row['g_id'];?>" 
					onclick="return confirm('Sure to Delete  ?');">DELETE</a>
				</td>
					
				</tr>
				
				<?php
					$seq++;
					}
				
				?>

              </table>
            </div>
            <!-- /.box-body -->
			
			
          </div>
	</div>
        </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <?php include("footer.php"); ?>