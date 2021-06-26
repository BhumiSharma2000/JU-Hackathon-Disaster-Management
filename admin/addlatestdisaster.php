<?php include("header.php");?>
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
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Latest-Disaster
        <small>Admin Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Add Latest-Disaster</li>
      </ol>
      <?php
        if(isset($_GET['flag'])){
        if($_GET['flag']==1)
          {
           echo "<center><font style='color:green; text-align:center;font-size:18px'><b><u><i>Latest-Disaster Added Successfully</i></u></b></font></center><br/>"; 
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
              <form role="form" method="POST" action="insertdisaster.php" enctype="multipart/form-data" >
                <!-- text input -->
                <div class="form-group">
                  <label>Name of Disaster</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter name ..." required />
                </div>
				<div class="form-group" >
                <label>Date of Occurred:</label>
					<div class="input-group date">
					<div class="input-group-addon">
						<i class="fa fa-calendar"></i>
					</div>
					<input type="date" name="dob" class="form-control pull-right" id="datepicker" autocomplete="off" required />
					</div>
					<!-- /.input group -->
				</div>
                <!-- textarea -->
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" rows="3" name="description" placeholder="Enter Description of Latest Disaster..." maxlength="430" required></textarea>
                </div>
				<div class="form-group">
                  <label>Add Profile Pic</label>
                  <input type="file" id="profile-img" name="image" accept="image/png,image/jpg,image/jpeg" class="form-control" placeholder="">
					<div id="myDiv" align="center"> 
						<!--<p class="square"> -->
					  <img src="../photos/a.jpg" id="profile-img-tag" alt="Profile Pic" width="200px" height="200px" style="border:5px solid #ffffff; background-color: #ffffff;" />
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
  </div>
  <!-- /.content-wrapper -->
<?php include("footer.php"); ?> 