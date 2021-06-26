<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
   <?php include "header.php";
    include "connection.php";?>
     <div class="g-fullheight--xs js__parallax-window" style="background: url(img/1920x1080/track.jpg) 50% 0 no-repeat fixed; background-size: cover;">
        </div>
    <table class="table table-hover" >
        <form  method="post" role="form">
                <!-- text input -->
                  
        <div class="form-group" style="margin-top:30px">
               <div class="g-text-center--xs g-margin-b-80--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Current-Disaster</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-letter-spacing--1">Track Current Disaster</h2>
                </div>
          <tr>
          <td> 
               <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                        <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" placeholder="Track" name="trid">
              </div></td></tr>
         <tr><td>
         <div class="box-footer">
                <input type="submit" name="submit" value="SEND" class="btn btn-primary">
             </div></td></tr></div>
       </form>
    </table>
        <?php 
    $tid=$_POST['trid'];
  //echo $tid;
    $qry="SELECT * FROM tb1_currentdisaster WHERE name='$tid'";
    $rs=mysqli_query($con,$qry);
    $row=mysqli_fetch_array($rs);
    $status=$row['current_status'];
              echo "<center><font style='color:blue; text-align:center;font-size:30px'>Your Current Disaster Status is :  
              </font> <font style='color:green; text-align:center;font-size:30px'>  " .$status."</font></center><br/>";
             // echo "<center><font style='color:green; text-align:center;font-size:30px'>".$var."</font></center><br/>";
              
        ?>
        <section class="content-header">
      <h1>
        Track the Disaster
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.html"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Track Disaster</li>
      </ol>
    </section>
<?php
  if(isset($_GET['flag'])){
  if($_GET['flag']==1)
  {
    echo "<center><font style='color:green; text-align:center'>Status Updated Successfully</font></center><br/>";
  
  }
  }
error_reporting(E_PARSE | E_ERROR);
?>  
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
      <div class="row">
      <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                </tr>
                <?php
                    include("connection.php");
                    $sqlx = "SELECT * FROM tb1_currentdisaster";
                    $resultx = mysqli_query($con,$sqlx);
                    while($value=mysqli_fetch_array($resultx))
                    {
                ?>
                         <tr>
                            <td><?php echo $value['name'];?></td>
                            <td><?php echo $value['description'];?></td>
                            <td><img src="<?php echo $value['image']; ?>" height="50" width="50" border="1px" alt="profile pic"></td>
                            <td><a href="generate.php?id=<?php echo $value['disaster_id'];?>" onclick="return confirm('Sure to Generate');" class="btn btn-danger btn-xs">Generate QR code</a></td>
                        </tr>
                <?php
                    }
                  ?>    
        
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        </div>
      <!-- /.row (main row) -->

    </section>
    <?php
    include "footer.php";
    ?>
</html>
