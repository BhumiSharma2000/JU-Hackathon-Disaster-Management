<!DOCTYPE html>
<html lang="en" class="no-js">
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
    <!-- Begin Head -->
     <?php
    include("header.php");
  ?>    
    <!-- Feedback Form -->
        <div class="g-bg-color--sky-light">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-text-center--xs g-margin-b-80--xs">
                    <h2 class="g-font-size-32--xs g-font-size-36--md">Register</h2>
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Please provide all required details to register with us.</p>
                </div>
                    <section class="content-header">
                      <?php
                        if(isset($_GET['flag'])){
                        if($_GET['flag']==1)
                          {
                            echo "<center><font style='color:green; text-align:center'>User Added Successfully</font></center><br/>";
                          }
                        }
                      ?>  
                      <?php
                        if(isset($_GET['xyz'])){
                        if($_GET['xyz']==1)
                          {
                            echo "<b><center><font style='color:red;font-size:20px;text-align:center'>Email Id or Phone No. Already Exists</font></center><br/></b>";
                          }
                        }
                      ?>
                    </section>
                 <section class="content">
      <!-- Small boxes (Stat box) -->
       <div class="row">
	   <div class="box box-warning">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="POST" action="insert.php" enctype="multipart/form-data" >
                <!-- text input -->
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter name ..." required />
                </div>
				<div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Enter Email ..." required />
                </div>
				<div class="form-group">
                  <label>Phone No</label>
                  <input type="text" name="phone" class="form-control" placeholder="Enter Phone no ..." pattern="[6789][0-9]{9}" oninput="setCustomValidity('')" title='Enter 10 Digit mobilenumber starting with 6 or 7 or 8 or 9' required />
                </div>
				<div class="form-group">
                  <label>Password</label>
                  <input type="password" name="pass1" id ="pass1" pattern=.{8,12} title="Enter 8 to 12 characters" class="form-control" placeholder="Enter Password ..." required />
                </div>
				<div class="form-group">
                  <label>Re-Enter Password</label>
                  <input type="password" name="pass2" id="pass2" pattern=.{8,12} title="Enter 8 to 12 characters" class="form-control" placeholder="Re-Enter Password ..." oninput="check(this)" required />
					<script language='javascript' type='text/javascript'>
						function check(input) {
							if (input.value != document.getElementById('pass1').value) {
								input.setCustomValidity('Password Must be Matching.');
							} else {
								// input is valid -- reset the error message
								input.setCustomValidity('');
							}
						}
					</script>
                </div>
				<div class="form-group" >
                <label>Birth Date:</label>
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
                  <label>Address</label>
                  <textarea class="form-control" rows="3" name="address" placeholder="Enter Address..." required></textarea>
                </div>
                <!-- input states -->
                <!-- radio -->
                <div class="form-group">
				<label>Gender</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="gender" id="optionsRadios1" value="male" checked>
							Male
					 </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="gender" id="optionsRadios2" value="female">
							Female
					  </label>
                  </div>
                </div>
                <!-- select -->
                <div class="form-group">
                  <label>User Type</label>
                  <select class="form-control" name="user_type" >
                    <option value="2" selected>User</option>                   
                  </select>
                </div>
				<div class="form-group">
                  <label>Add Profile Pic</label>
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
            </div>
        </div>
        <!-- End Feedback Form -->
   <?php
    include("footer.php");
  ?>
