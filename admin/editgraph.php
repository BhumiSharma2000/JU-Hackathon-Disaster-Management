<?php
error_reporting(E_ERROR | E_PARSE);
include("header.php");
  include "connection.php";
  session_start();
  if(!isset($_SESSION['log']))
  {
    header("location:index.php");
  }
  else
  {
    $log = $_SESSION['log'];
    $sc=$_GET['id'];
    $ab = "SELECT * FROM graph WHERE g_id='$sc'";
    $aav = mysqli_query($con,$ab);
    $value2 = mysqli_fetch_array($aav);
    $add=$value2['disaster'];
    $mob=$value2['count'];
?>
<?php
  if(isset($_POST['submit']))
  {
      $disaster = $_POST['disaster'];
      $moi=$_POST['count'];
      $updated = mysqli_query($con,"UPDATE graph SET disaster='$disaster',count='$moi' WHERE g_id='$sc'");
      var_dump($updated);
      if($updated)
      {
       echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated');
    window.location.href='managegraph.php';
    </script>");        
      }
      else
      {
          echo "<font style='color:red'>Error...</font>";
      }
    }
      
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Service Center
        <small>Admin Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="manageservicecenter.php"><i class="fa fa-key"></i> Manage Service Center</a></li>
        <li class="active">Edit Service Center</li>
      </ol>
    </section>
  
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
      <div class="row">
    
    <div class="box box-warning">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="post" enctype="multipart/form-data" >
                <!-- text input -->
               <div class="form-group">
                  <label>Disaster</label>
                  <input type="text" class="form-control" name="disaster" value="<?php echo $add; ?>" required >
                </div>
                  <div class="form-group">
                  <label>Count</label>
                  <input type="text" class="form-control" name="count" value="<?php echo $mob; ?>" required >
                </div>
              <div class="box-footer" style="float:right;">
                <button type="submit" name="submit" class="btn btn-primary">Modify</button>
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
<?php

  }

?>
<?php include("footer.php"); ?>