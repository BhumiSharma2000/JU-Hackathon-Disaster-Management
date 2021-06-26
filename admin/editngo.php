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
		$a = "SELECT * FROM tb1_ngo WHERE ngo_id='$log'";
		$aa = mysqli_query($con,$a);
		$value = mysqli_fetch_array($aa);
		$n = $value['name'];
		$i = $value['email'];
		$do = $value['phone'];
        $add=$value['address'];
        $id = $value['category'];
?>
<?php
	if(isset($_POST['submit']))
	{	
			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$address = $_POST['address'];
			$category = $_POST['ngo_category'];
			$updated ="UPDATE tb1_ngo SET name='$name',email='$email',phone='$phone',address='$address',category='$category' WHERE ngo_id='$log'";
            $sql=mysqli_query($con,$updated);
        
			if($updated)
			{
				echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully Updated');window.location.href='managengo.php?flag=1';</script>");    			
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
<body class="hold-transition skin-blue sidebar-mini">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Profile
        <small>Admin Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="manageadmin.php"><i class="fa fa-key"></i> Manage Admin</a></li>
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
              <form role="form" method="post" enctype="multipart/form-data" >
                <!-- text input -->
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter name ..." value="<?php echo $n;?>" required />
                </div>
				<div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Enter Email ..." value="<?php echo $i;?>" required />
                </div>
				<div class="form-group">
                  <label>Phone No</label>
                  <input type="text" name="phone" class="form-control" placeholder="Enter Phone no ..." pattern="[6789][0-9]{9}" oninput="setCustomValidity('')" title='Enter 10 Digit mobile number starting with 6 or 7 or 8 or 9' required value="<?php echo $do;?>" />
                </div>
                <!-- textarea -->
                <div class="form-group">
                  <label>Address</label>
                  <textarea class="form-control" rows="3" name="address" placeholder="Enter Address..." required><?php echo $add; ?></textarea>
                </div>
                <!-- input states -->
                <!-- radio -->
                <!-- select -->
                <div class="form-group">
                  <label>NGO Category</label>
                  <select class="form-control" name="ngo_category">                        
                        <option value="Clothes" <?php if($id=="Clothes") echo "selected";?>>Clothes</option> 
                    <option value="Money" <?php if($id=="Money") echo "selected";?>>Money</option> 
                    <option value="Food" <?php if($id=="Food") echo "selected";?>>Food</option> 
                  </select>
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
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script>
$(document).ready(function () {
$('#datepicker').datepicker({    
    endDate: '+1d',
    autoclose: true
});  });
</script>
<!-- Bootstrap 3.3.7 -->
<?php
	}
?>
<?php include("footer.php"); ?>