<?php include("header.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Informed Digitally
        <small>Admin Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Manage Officers</li>
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
              <h3 class="box-title">Manage Officers</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Sr.No</th>
				  <th>Name</th>
                    <th>Email</th>
				  <th>Mobile Number</th>
                    <th>Address</th>
                    <th>Designation</th>
				   <th>Action</th>
                  </tr>
				
				<?php
					$query="SELECT * FROM `tb1_officer` WHERE status='1'";
					$result2 = mysqli_query($con,$query);
					$seq=1;
					while($value2 = mysqli_fetch_array($result2))
					{
				?>
                <tr>
                  <td><?php echo $seq;?></td>
				  <td><?php echo $value2['name'];?></td>
				  <td><?php echo $value2['email'];?></td>
                    <td><?php echo $value2['phone'];?></td>
                    <td><?php echo $value2['address'];?></td>
                    <td><?php echo $value2['designation'];?></td>
				  <td><a class="btn btn-success btn-xs" href="editofficers.php?id=<?php echo $value2['officer_id'];?> " 
                         onclick="return confirm('sure to edit?');">EDIT</a> &nbsp;&nbsp;</td><td>
				  <a class="btn btn-danger btn-xs" href="deleteofficers.php?del=<?php echo $value2['officer_id'];?>" 
					onclick="return confirm('sure to delete?');">DELETE</a>
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