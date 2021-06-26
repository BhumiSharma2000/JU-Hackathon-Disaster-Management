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
    $ab = "SELECT * FROM tb1_officer WHERE officer_id='$sc'";
    $aav = mysqli_query($con,$ab);
    $value2 = mysqli_fetch_array($aav);
    $name=$value2['name'];
    $email=$value2['email'];
    $phone=$value2['phone'];
    $address=$value2['address'];
    $designation=$value2['designation'];
?>
<?php
  if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $designation=$_POST['designation'];

      $updated = mysqli_query($con,"UPDATE tb1_officer SET name='$name',email='$email',phone='$phone',address='$address',designation='$designation' WHERE officer_id='$sc'");
      var_dump($updated);
      if($updated)
      {
       echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated');
    window.location.href='manageofficers.php';
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
        Edit Officers
        <small>Admin Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="manageofficers.php"><i class="fa fa-key"></i> Manage Officers</a></li>
        <li class="active">Edit Officers</li>
      </ol>
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
              <form role="form" method="POST"  enctype="multipart/form-data" >
                <!-- text input -->
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter name ..." value="<?php echo $name?>" required />
                </div>
				<div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Enter Email ..." value="<?php echo $email?>" required />
                </div>
				<div class="form-group">
                  <label>Phone No</label>
                  <input type="text" name="phone" class="form-control" placeholder="Enter Phone no ..." pattern="[6789][0-9]{9}" oninput="setCustomValidity('')" title='Enter 10 Digit mobile number starting with 7 or 8 or 9'value="<?php echo $phone?>" required />
                </div>
                <!-- textarea -->
                <div class="form-group">
                  <label>Address</label>
                  <textarea class="form-control" rows="3" name="address" placeholder="Enter Address..."required><?php echo $address?></textarea>
                </div>
                <!-- input states -->
                  <div class="form-group">
                  <label>Designation</label>
                  <input type="text" name="designation" class="form-control" placeholder="Enter Designation ..." value="<?php echo $designation?>"required />
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
<?php

  }

?>
<?php include("footer.php"); ?>