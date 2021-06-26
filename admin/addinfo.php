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
        <li class="active">Add Officers</li>
      </ol>
        <?php
        if(isset($_GET['flag'])){
        if($_GET['flag']==1)
          {
            echo "<center><font style='color:green; text-align:center;font-size:18px'><b>Informed Successfully</b></font></center><br/>";
          
          }
        }
      ?>  
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
       <div class="row">
	   <div class="box box-warning">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                    <?php
                        include "connection.php";
                        error_reporting(E_PARSE | E_ERROR);
                        $a=$_GET['id'];
                  ?>
              <form role="form" method="POST" action="insertinfo.php?id=<?php echo $a;?>" enctype="multipart/form-data" >
                <!-- text input -->
              
                <div class="form-group">
                  <label>Disaster Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter name ..." required />
                </div>
				<div class="form-group">
                  <label>Location</label>
                 <input type="text" name="location" class="form-control" placeholder="Enter name ..." required />
                </div>
				<div class="form-group">
                  <label>Description</label>
                  <input type="text" name="description" class="form-control" placeholder="Enter name ..." required />
                </div>
                  <div class="form-group">
                  <label>Intensity</label>
                  <input type="text" name="intensity" class="form-control" placeholder="Enter name ..." required />
                </div>
              <div class="box-footer" style="float:right;">
                <input type="submit" name="submit" value="ADD" class="btn btn-primary">
              </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>
  
 
  <!-- /.content-wrapper -->
  <?php include("footer.php"); ?> 