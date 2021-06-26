<?php include("header.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
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
      <?php
      include "connection.php";
      if(!empty($_POST['add'])) {
	$subject = mysqli_real_escape_string($con,$_POST["subject"]);
	$comment = mysqli_real_escape_string($con,$_POST["comment"]);
	$sql = "INSERT INTO comments (subject,comment) VALUES('" . $subject . "','" . $comment . "')";
	mysqli_query($con, $sql);
}
      ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        CMT
        <small>Admin Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Add CMT</li>
      </ol>
      <?php
        if(isset($_GET['flag'])){
        if($_GET['flag']==1)
          {
            echo "<center><font style='color:green; text-align:center'><b>CMT-MEMBERS Added Successfully</b></font></center><br/>";
          }
        }
      ?>  
       <?php
        if(isset($_GET['xyz']))
        {
            if($_GET['xyz']==1)
            { 
                echo "<center><font style='color:blue; text-align:center'>Email Id or Phone No. Already Exists</font></center><br/>";
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
             <form name="frmNotification" id="frmNotification" action="" method="post" >
			<div id="form-header" class="form-row">Add New Message</div>
			<div class="form-row">
				<div class="form-label">Subject:</div><div class="error" id="subject"></div>
				<div class="form-element">
					<input type="text"  name="subject" id="subject" required>
					
				</div>
			</div>
			<div class="form-row">
				<div class="form-label">Comment:</div><div class="error" id="comment"></div>
				<div class="form-element">
					<textarea rows="4" cols="30" name="comment" id="comment"></textarea>
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
  </div>
  <!-- /.content-wrapper -->
  <?php include("footer.php"); ?> 