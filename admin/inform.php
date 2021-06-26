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
        <li class="active">Inform Officers</li>
      </ol>
      <?php
        if(isset($_GET['flag'])){
        if($_GET['flag']==1)
          {
            echo "<center><font style='color:green; text-align:center;font-size:18px'><b><u><i>Profile Updated Successfully</i></u></b></font></center><br/>";
          
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
              <h3 class="box-title">Inform Officers</h3>
            </div>
              
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <form  method="post" role="form">
                <!-- text input -->        
                <div class="form-group">
                    <tr>
                        <td> <label>Enter the location</label>    
                            <input type="text" name="service" class="form-control" placeholder="Enter City name"></td></tr>
                </div>
                <tr>
                <td>
                    <div class="box-footer">
                        <input type="submit" name="submit" value="SEND" class="btn btn-primary">
                    </div>
                </td>
                    
       </form>
        <?php
       if(isset($_POST['submit']))
       {
          $z=$_POST['service'];
           //echo $z;
          $xs="SELECT *  FROM `tb1_officer` WHERE address LIKE '%$z%' ";
           //var_dump($xs);
          $zx=mysqli_query($con,$xs);
          $count=mysqli_num_rows($zx);
          if($count!=0)
          {
            ?>
            <tr><td style=color:green;font-size:23px;><img src="1.png" height="40px" width="40px"> <b>FOUND!!! Following Service Centers at Your City  :</b></td></tr>
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
					$query="SELECT *  FROM `tb1_officer` WHERE address LIKE '%$z%'";
                    //var_dump($query);
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
				  <td><a class="btn btn-warning btn-xs" href="addinfo.php?id=<?php echo $value2['officer_id'];?> " 
                         onclick="return confirm('sure to inform?');">Informed</a> &nbsp;&nbsp;</td>					
				</tr>
				<?php
					$seq++;
					}
                }
                else
                {
                     echo "<tr><td style=color:red;font-size:23px;><img src='2.png' height='40px' width='40px'> &nbsp;OOPS! Service center not available at Your City : </td></tr>";
                }
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