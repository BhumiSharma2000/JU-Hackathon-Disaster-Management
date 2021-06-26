<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SAPDS | Forgot Password</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a>Password Assistance</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Enter the Email address associated with your SAPDS account.</p>
    <form method="post">
      <div class="form-group has-feedback">
        <input type="text" name="email-phone" class="form-control" placeholder="Email Address" required/>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="row">
       <div class="col-xs-12">
          <button type="submit" name="submit" class="btn btn-success btn-block btn-flat" style="background-color:#13b1cd">Generate OTP</button>
        </div>
        <!-- /.col -->
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->
<br/>
    <a style="color:black;">Six digit OTP will be Sent to your Registered Email id.</a><br/><br/>
      <?php
      if(isset($_GET['flag']))
      {
        if($_GET['flag']==1)
        {
            echo "<center><font style='color:red; text-align:center;font-size:15px'><b>OOPS !! Access Denied</b></font></center><br/>";
        }
      }
      ?>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<?php
	if(isset($_POST['submit']))
	{
        include "connection.php";
		session_start();
		$id = $_POST['email-phone'];
		$_SESSION['email_id'] = $id;
        $qry = "SELECT * FROM tb1_login WHERE email_id='$id'";
		$result = mysqli_query($con,$qry);
		$value = mysqli_fetch_array($result);
		$count = mysqli_num_rows($result);
		$log=$value['login_id'];
        if($count==1)
        {
            if($value['active']==1 && $value['type']==1 )
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
                $msg="Hi, your one time password for first time verfication is <b>".$otp."</b>";
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
                    header("location:otp.php");
                }
                else
                {
                    echo "<br/><font style='color:red'>OOPS!!! Incorrect OTP :(</font>";
                }
            }
            else if($value['active']==1 && $value['type']==3)
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
                    header("location:otp.php");
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
?>
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
