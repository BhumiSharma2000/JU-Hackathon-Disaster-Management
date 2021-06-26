<?php
                 include "connection.php";
		session_start();
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
                    <h2 class="g-font-size-26--xs g-font-size-26--md">Password Assistance</h2>
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Enter the Email address associated with your SAPDS account.</p>
                </div>
                    <section class="content">
      <!-- Small boxes (Stat box) -->
       <div class="row">
	   <div class="box box-warning">
            <!-- /.box-header -->
            <div class="box-body">
                <form method="post" style="margin-left:370px;margin-top:-50px">
                  <div class="form-group has-feedback col-xs-6">
                    <input type="text" name="email-phone" class="form-control" placeholder="Email Address" required/>
                       <button type="submit" name="submit" class="btn btn-success btn-block btn-flat" style="background-color:#13b1cd;margin-top:10px">Generate OTP</button>
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
      if(isset($_GET['flag']))
      {
        if($_GET['flag']==1)
        {
            echo "<center><font style='color:red; text-align:center;font-size:15px'><b>OOPS !! Access Denied</b></font></center><br/>";
        }
      }
      ?>
<?php
	if(isset($_POST['submit']))
	{
        
		$id = $_POST['email-phone'];
		$_SESSION['email_id'] = $id;
        $qry = "SELECT * FROM tb1_login WHERE email_id='$id'";
		$result = mysqli_query($con,$qry);
		$value = mysqli_fetch_array($result);
		$count = mysqli_num_rows($result);
		$log=$value['login_id'];
        if($count==1)
        {
            if($value['active']==1 && $value['type']==2)
			{
                require_once 'PHPMailer-master/src/PHPMailer.php';
                require_once 'PHPMailer-master/src/Exception.php';
                require_once 'PHPMailer-master/src/SMTP.php';
                $otp = rand(100000,999999);
                $qry="INSERT INTO tb1_otp(otp_id,login_id,otp) VALUES('','$id','$otp')";
                $rs=mysqli_query($con,$qry);
                echo $qry;
                $to=$id;
                $subject="SAPDS OTP MAIL";
                $msg="Hi, your one time password for first time verfication is ".$otp;
                $mail = new PHPMailer\PHPMailer\PHPMailer(true);                      // Passing `true` enables exceptions
                //Server settings
                $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'bhumit0111@gmail.com';                 // SMTP username
                $mail->Password = 'CRMS@123';                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to
                //Recipients
                $mail->setFrom('bhumit0111@gmail.com');
                $mail->addAddress($to);
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = $subject;
                $mail->Body    = $msg;
                if(!$mail->send()) 
                {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
                }
                $sql = "SELECT login_id FROM tb1_login WHERE email_id='$id' OR phone_no='$id'";
                $result = mysqli_query($con,$sql);
                $value = mysqli_fetch_array($result);
                $id = $value['login_id'];
                $qry = "INSERT INTO tb1_otp(otp_id,login_id,otp) VALUES('','$id','$otp')";
                $result1 = mysqli_query($con,$qry);
                if($result1)
                {
                    ?>
                  <script>
                    window.location="otp.php";
                </script>
                <?php
                    
                }
                else
                {
                    echo "<br/><font style='color:red'>OOPS!!! Incorrect OTP :(</font>";
                }
            }
            else
            {
                ?>
                <script>
                    window.location="forgot.php?flag=1";
                </script>
    <?php
            }
	}
}
?>           </div>
        </div>
        <!-- End Feedback Form -->
   <?php
    include("footer.php");
  ?>
