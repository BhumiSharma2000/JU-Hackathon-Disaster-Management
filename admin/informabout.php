<?php 
error_reporting(E_ERROR | E_PARSE);
include("header.php"); ?>
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
        NGO
        <small>Admin Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Add NGO</li>
      </ol>
          <?php
            if(isset($_GET['flag']))
            {
                if($_GET['flag']==1)
                {
                   echo "<center><font style='color:green; text-align:center;font-size:18px'><b><u><i>NGO Added Successfully</i></u></b></font></center><br/>";
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
              <form role="form" method="POST" enctype="multipart/form-data" >
                <div class="form-group">
                  <label>Message</label>
                  <textarea class="form-control" rows="3" name="Message" placeholder="Enter Message..." required></textarea>
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
      <?php
      include "connection.php";
      $category=$_GET['id'];
      $message=$_POST['Message'];
      $a="SELECT * FROM tb1_ngo WHERE category='$category'";
      $b=mysqli_query($con,$a);
      while($var=mysqli_fetch_array($b))
      {
          $number=$var['phone'];
           otpprog($message,$number);
        }
      function otpprog($message,$number)
        {
            $authKey = "271014AgVqcYpm9kq5ca716a3";
            $senderId = "BHUMII";
            //$message = urlencode($msg);
            $postData = array(
            'authkey' => $authKey,
            'mobiles' => $number,
            'message' => $message,
            'sender' => $senderId,
            );
            $url="http://api.msg91.com/api/sendhttp.php";
            $ch = curl_init($url);
            curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData
            //,CURLOPT_FOLLOWLOCATION => true
            ));
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            $response = curl_exec($ch);
            //Print error if any
            if(curl_errno($ch))
            {
                echo 'error:' . curl_error($ch);
            }
            curl_close($ch);
         
      }
      ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("footer.php"); ?> 
  