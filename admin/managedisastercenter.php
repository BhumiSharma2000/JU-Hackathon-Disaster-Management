<?php include("header.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Disaster-Centers
        <small>Admin Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Manage Disaster-Centers</li>
      </ol>
      <?php
        if(isset($_GET['flag'])){
        if($_GET['flag']==1)
          {
            echo "<center><font style='color:green; text-align:center;font-size:18px'><b><u><i>Disaster-Center Edited Successfully</i></u></b></font></center><br/>";           
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
              <h3 class="box-title">Manage Disaster-Centers</h3>

              
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Sr.No</th>
				  <th>Address</th>
				  <th>Mobile Number</th>
				   <th>Action</th>
                  </tr>
				
				<?php
				
					$query="SELECT * FROM `tb1_map` WHERE status='1'";
					$result2 = mysqli_query($con,$query);
					$seq=1;
					while($value2 = mysqli_fetch_array($result2))
					{
				?>
                <tr>
                  <td><?php echo $seq;?></td>
				  <td><?php echo $value2['address'];?></td>
				  <td><?php echo $value2['mobile'];?></td>
   
				  <td><a class="btn btn-success btn-xs" href="editdisastercenter.php?id=<?php echo $value2['map_id'];?> " 
                         onclick="return confirm('Sure to Edit ?');">EDIT</a> &nbsp;&nbsp;</td><td>
				  <a class="btn btn-danger btn-xs" href="deletedisastercenter.php?del=<?php echo $value2['map_id'];?>" 
					onclick="return confirm('Sure to Delete ?');">DELETE</a>
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