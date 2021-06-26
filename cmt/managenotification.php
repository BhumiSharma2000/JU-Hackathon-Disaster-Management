<?php include("header.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        CMT-Members
        <small>Admin Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Manage CMT</li>
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
              <h3 class="box-title">Manage CMT</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Sr.No</th>
                  <th>Subject</th>
                    <th>Message</th>
                  <th>Action</th>
                </tr>
				<?php
					$query="SELECT * FROM comments WHERE status='1'";
					$result2 = mysqli_query($con,$query);
					$seq=1;
					while($value2 = mysqli_fetch_array($result2))
					{
				?>
                <tr>
                  <td><?php echo $seq;?></td>
                  <td><?php echo $value2['comment'];?></td>
                  <td><?php echo $value2['subject'];?></td>
				  <td> 
				  <a class="btn btn-success btn-xs" href="editnotification.php?id=<?php echo $value2['id'];?> " 
					onclick="return confirm('Sure to Edit ?');">EDIT</a> &nbsp;&nbsp;
				  <a class="btn btn-danger btn-xs" href="deletenotification.php?del=<?php echo $value2['id'];?>" 
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
    </section>
</div>
<!-- /.content -->
<!-- /.content-wrapper -->
<?php include("footer.php"); ?>