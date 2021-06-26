<?php
	include "connection.php";
	session_start();
	if(!isset($_SESSION['log']))
	{
		header("location:index.php");
	}
	else
	{
		$log = $_SESSION['log'];
		$qry = "SELECT login_id FROM tb1_login WHERE email_id='$log'";
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
                <div class="g-text-center--xs g-margin-b-80--xs"><br/><br/>
                    <h2 class="g-font-size-26--xs g-font-size-26--md">First Time Login Verification Page</h2>
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Enter six digit OTP sent to your registered email</p>
                </div>
                    <section class="content">
      <!-- Small boxes (Stat box) -->
       <div class="row">
	   <div class="box box-warning">
            <!-- /.box-header -->
            <div class="box-body">
            <form action="" method="post" style="margin-left:295px;margin-top:-40px">
              <div class="form-group has-feedback col-xs-8">
                <input type="text" name="otp_num" class="form-control" placeholder="Enter OTP" required />
                <button type="submit" name="submit" class="btn btn-success btn-block btn-flat" style="background-color:#13b1cd;margin-top:10px">Verify</button><br/>
                  <?php
                        if(isset($_GET['flag']))
                        {
                            if($_GET['flag']==1)
                            {
                                echo "<center><font style='color:red; text-align:center;font-size:15px;'><b>OOPS !! Incorrect Details</b></font></center><br/>";
                            }
                        }
                    ?>
              </div>
            </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      <!-- /.row (main row) -->
    </section>
<?php
                if(isset($_POST['submit']))
                {
                    $otp_num = $_POST['otp_num'];
                    $type = $_SESSION['utype'];
                    if($otp_num==$otp && $type==2)
                    {
                        $update = "UPDATE tb1_login SET status='1' WHERE login_id='$id'";
                        $result2 = mysqli_query($con,$update);
                        if($result2)
                        {
                            ?>
                            <script>
                              window.location="index.php";
                            </script>
                <?php
                        }
                    }
                    else
                    {
                      ?>
                            <script>
                              window.location="verification.php?flag=1";
                            </script>
                <?php
                    }
                }
            ?>	
            </div>
        </div>
        <!-- End Feedback Form -->
   <?php
    include("footer.php");
    }
  ?>
