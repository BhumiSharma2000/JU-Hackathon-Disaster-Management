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
        <li class="active">Manage Blog</li>
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
                  <th>Title</th>
				  <th>Author</th>
				  <th>Description</th>
                    <th>Date of Publish</th>
                  <th>Featured Image</th>
                    <th>Action</th>
                </tr>
				<?php
					$query="SELECT * FROM tb1_blog WHERE status='1' AND verified='1'";
					$result2 = mysqli_query($con,$query);
					$seq=1;
					while($value2 = mysqli_fetch_array($result2))
					{
				?>
                <tr>
                  <td><?php echo $seq;?></td>
                  <td><?php echo $value2['Title'];?></td>
                  <td><?php echo $value2['Author'];?></td>
				  <td><?php echo $value2['description'];?></td>
                    <td><?php echo $value2['publish_date'];?></td> 
                  <td><img src="<?php echo $value2['image']; ?>" height="50" width="50" border="1px" alt="profile pic"></td>
				  <td> 
				  <a class="btn btn-danger btn-xs" href="deleteblog2.php?del=<?php echo $value2['blog_id'];?>" 
					onclick="return confirm('Sure to Delete ?');">Delete</a>
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