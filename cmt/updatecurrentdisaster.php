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
    $log = $_GET['id'];
    $a = "SELECT * FROM tb1_currentdisaster WHERE disaster_id='$log'";
    $aa = mysqli_query($con,$a);
    $value = mysqli_fetch_array($aa);
    $name=$value['name'];
    $description=$value['description'];
    $date=$value['occurred_on'];
    $image=$value['image'];
    $current=$value['current_status'];
?>
<?php
if(isset($_POST['submit']))
{   	
        $current_status=$_POST['current_status'];
        $updated3 = mysqli_query($con,"UPDATE tb1_currentdisaster SET current_status='$current_status' WHERE disaster_id='$log'");	
        if($updated3)
        {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully Updated');window.location.href='managecurrentdisaster.php?flag=1';</script>");	
        }
        else
        {
            echo "<font style='color:red'>Error...</font>";
        }
}			
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">  
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <style>
	   #myDiv 
        {
            border: 2px solid lightgray;
            height:210px;
            width:210px;
            float: left;
	   }
    </style>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Profile
        <small>Admin Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="managecmt.php"><i class="fa fa-key"></i> Manage CMT-Members</a></li>
        <li class="active">Edit Profile</li>
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
              <form role="form" method="POST" enctype="multipart/form-data" >
                <!-- text input -->
                <div class="form-group">
                  <label>Name of Disaster</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter name ..." value="<?php  echo $name; ?>" disabled = "true" required />
                </div>
				<div class="form-group" >
                <label>Date of Occurred:</label>
					<div class="input-group date">
					<div class="input-group-addon">
						<i class="fa fa-calendar"></i>
					</div>
					<input type="text" name="dob"  value="<?php echo $date; ?>" class="form-control pull-right" id="datepicker" autocomplete="off" disabled = "true"required />
					</div>
					<!-- /.input group -->
				</div>
                <!-- textarea -->
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" rows="3" name="description" placeholder="Enter Address..." disabled = "true" required><?php echo $description; ?></textarea>
                </div>
                <div class="form-group">
                  <label>Current_Status</label>
                  <textarea class="form-control" rows="3" name="current_status" placeholder="Enter Status..." required><?php echo $current; ?></textarea>
                </div>
				<div class="form-group">
                  <label>Add Profile Pic</label>
                  <input type="file" id="profile-img" name="image" accept="image/png,image/jpg,image/jpeg" class="form-control"  disabled = "true"placeholder="">
					<div id="myDiv" align="center"> 
						<!--<p class="square"> -->
					  <img src="<?php echo $image; ?>" id="profile-img-tag" alt="Profile Pic" width="200px" height="200px" style="border:5px solid #ffffff; background-color: #ffffff;" />
						<script type="text/javascript">
							function readURL(input) 
                            {
								if (input.files && input.files[0]) 
                                {
									var reader = new FileReader();
									reader.onload = function (e) 
                                    {
										$('#profile-img-tag').attr('src', e.target.result);
									}
									reader.readAsDataURL(input.files[0]);
								}
							}
							$("#profile-img").change(function(){
								readURL(this);
							});
						</script>
					</div>
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
  <!-- /.content-wrapper -->
  <!-- Add the sidebar's background. This div must be placed
<?php
	}
?>
<?php include("footer.php"); ?>