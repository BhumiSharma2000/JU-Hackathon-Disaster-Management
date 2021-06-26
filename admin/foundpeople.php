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
        Found-Peoples
        <small>Admin Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Add Found-Peoples</li>
      </ol>
      <?php
        if(isset($_GET['flag'])){
        if($_GET['flag']==1)
          {
            echo "<center><font style='color:green; text-align:center'><b>Disaster Added Successfully</b></font></center><br/>";
          }
        }
      ?>  
      <?php
        if(isset($_GET['xyz'])){
        if($_GET['xyz']==1)
          {
            echo "<center><font style='color:blue; text-align:center'><b>Email Id or Phone No. Already Exists</b></font></center><br/>";
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
              <form role="form" method="POST" action="insertpeople.php" enctype="multipart/form-data" >
                <!-- text input -->
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" placeholder="Enter Name..." name="name">
                </div>
                  <div class="form-group">
                  <label>Age</label>
                  <input type="number" class="form-control" placeholder="Enter Age..." name="age">
                </div>
                  <div class="form-group">
                  <label>Mobile</label>
                   <input type="text" name="mobile" class="form-control" placeholder="Enter Phone no ..." pattern="[6789][0-9]{9}" oninput="setCustomValidity('')" title='Enter 10 Digit mobile number starting with 6 or 7 or 8 or 9' required />
                </div>
                  <div class="form-group">
                  <label>Address</label>
                  <textarea class="form-control s-form-v4__input g-padding-l-0--xs" rows="5" placeholder="Address" name="address"></textarea>
                </div>
                <div class="form-group">
                  <label>Date of Found</label>
                   <input type="date" name="lost_on" class="form-control pull-right" id="datepicker" autocomplete="off" required />
                </div>
                <!-- textarea -->
				 <div class="form-group">
                                      <label>Add Image</label>
                                      <input type="file" id="profile-img" name="image" accept="image/png,image/jpg,image/jpeg" class="form-control" placeholder="">
                                        <div id="myDiv" align="center"> 
                                            <!--<p class="square"> -->
                                          <img src="../photos/default.png" id="profile-img-tag" alt="Profile Pic" width="200px" height="200px" style="border:5px solid #ffffff; background-color: #ffffff;" />
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