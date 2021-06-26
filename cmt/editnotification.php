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
    $a = "SELECT * FROM comments WHERE id='$log'";
    $aa = mysqli_query($con,$a);
    $value = mysqli_fetch_array($aa);
    $name=$value['comment'];
    $description=$value['subject'];
?>
<?php
if(isset($_POST['add']))
{	
        $name1 = $_POST['subject'];
        $description1 = $_POST['comment'];
        $updated = mysqli_query($con,"UPDATE comments SET comment='$name1',subject='$description1' WHERE id='$log'");	    
        if($updated)
        {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully Updated');window.location.href='managenotification.php?flag=1';</script>");	
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
             <form name="frmNotification" id="frmNotification" action="" method="post" >
			<div id="form-header" class="form-row">Add New Message</div>
			<div class="form-row">
				<div class="form-label">Subject:</div><div class="error" id="subject"></div>
				<div class="form-element">
					<input type="text"  name="subject" id="subject" value= "<?php echo $description; ?>"required>
				</div>
			</div>
			<div class="form-row">
				<div class="form-label">Comment:</div><div class="error" id="comment"></div>
				<div class="form-element">
					<textarea rows="4" cols="30" name="comment" id="comment"><?php echo $name; ?></textarea>
				</div>
			</div>
			<div class="form-row">
				<div class="form-element">
					<input type="submit" name="add" id="btn-send" value="Submit">
				</div>
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