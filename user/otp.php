<?php
	include "connection.php";
	session_start();
	if(!isset($_SESSION['email_id']))
	{
		header("location:index.php");
	}
	else
	{
		$req = $_SESSION['email_id'];	
		$qry = "SELECT login_id FROM tb1_login WHERE email_id='$req' OR phone_no='$req'";
		$result = mysqli_query($con,$qry);
		$value = mysqli_fetch_array($result);
		$id = $value['login_id'];
		$sql = "SELECT otp FROM tb1_otp WHERE otp_id = (SELECT MAX(otp_id) FROM tb1_otp WHERE login_id='$id' )";
		$result1 = mysqli_query($con,$sql);
		$value1 = mysqli_fetch_array($result1);
		$otp = $value1['otp'];
?>
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
                    <h2 class="g-font-size-26--xs g-font-size-26--md">Change Password ?</h2>
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Enter six digit OTP to generate new password</p>
                </div>
                    <section class="content">
      <!-- Small boxes (Stat box) -->
       <div class="row">
	   <div class="box box-warning">
            <!-- /.box-header -->
            <div class="box-body">
                <form  method="post" style="margin-left:310px;margin-top:-50px">
                    <div class="form-group has-feedback col-xs-8" >
                        <input type="text" name="otp_num" class="form-control" style="margin-bottom:10px" placeholder="Enter OTP" required /> 
                        <input type="password" name="pass1" id="pass1" class="form-control" style="margin-bottom:10px" placeholder="Enter New Password" required />
                        <input type="password" name="pass2" id="pass2" class="form-control" style="margin-bottom:10px" placeholder="Re Enter New Password" oninput="check(this)" required />
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
                         <button type="submit" name="submit" class="btn btn-success btn-block btn-flat"style="background-color:#13b1cd">Change</button>
                        </div>
              <div class="row">
               <div class="col-xs-12">
                 
                </div>
                <!-- /.col -->
                <!-- /.col -->
              </div>
        <?php
              if(isset($_POST['submit']))
              {
                  $otp_num = $_POST['otp_num'];
                  $passx = $_POST['pass1'];
                  $passw1=md5($passx);
                  $passy = $_POST['pass2'];
                  $passw2=md5($passy);
                  if($otp==$otp_num)
                  {
                    if($passw1==$passw2)
                    {
                      $update = "UPDATE tb1_login SET password='$passw1' WHERE login_id='$id'";
                      $up = mysqli_query($con,$update);
                      if($up)
                      {
                        echo "<br/><font style='color:green'>Password Change Successfully....</font>";
                        unset($_SESSION['email_id']);
                        session_destroy();
                          ?>
                        <script>
                    window.location="index.php";
                </script>
                    <?php
                      }
                    }		
                  }
                  else
                  {
                        echo "<br/><font style='color:red'>OOPS!!! Incorrect OTP :(</font>";
                  }
              }
        ?>
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
    }
  ?>
