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
    
    $ab = "SELECT * FROM tb1_map WHERE map_id='$sc'";
    $aav = mysqli_query($con,$ab);
    $value2 = mysqli_fetch_array($aav);
    $add=$value2['address'];
    $mob=$value2['mobile'];
?>
<?php
  
  if(isset($_POST['submit']))
  {
      $address = $_POST['address'];
      $moi=$_POST['mobile'];

      $updated = mysqli_query($con,"UPDATE tb1_map SET address='$address',mobile='$moi' WHERE map_id='$sc'");
      var_dump($updated);
      if($updated)
      {
       echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated');
    window.location.href='managedisastercenter.php';
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
        Edit Disaster-Centers
        <small>Admin Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="managedisastercenter.php"><i class="fa fa-key"></i> Manage Disaster-Centers</a></li>
        <li class="active">Edit Disaster-Centers</li>
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
                  <label>Address</label><br/>
    <input name="address" id="autocomplete" placeholder="Enter your address" onfocus="geolocate()" value="<?php echo $add;?>" type="text" autocomplete="off" class="form-control" required>
    <input type="hidden" id="lat" name="lat" value="" />
    <input type="hidden" id="long" name="long" value="" />
                </div>
               <div class="form-group">
                  <label>Mobile</label>
                  <input type="text" class="form-control" name="mobile" value="<?php echo $mob; ?>" required >
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