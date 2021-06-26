<?php include("header.php");?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Body -->
    <body>
        <!--========== PAGE CONTENT ==========-->
        <!-- Feedback Form -->
        <div class="g-position--relative g-bg-color--primary">
            <div>
                <form action="check.php" method="post" style="border: #000000 solid 5px;margin-bottom:-10px;margin-top:150px;">
                    <center>
                        <p class="login-box-msg" style="color:black;font-size:20px;margin-top:20px"><b><u>Sign-in to Start your Session</u></b></p>
                      <div class="col-xs-5 form-group has-feedback" style="margin-left:400px">
                        <input type="text" name="email" class="form-control" placeholder="Email or mobile phone number" style="margin-top:10px" required  />
                      </div>
                      <div class=" col-xs-5 form-group has-feedback" style="margin-left:400px">
                        <input type="password" name="pass" class="form-control" placeholder="Password" required /><br/>
                          <button type="submit" name="submit" class="btn btn-success btn-block btn-flat" style="background-color:#000000;;margin-bottom:10px">Sign In</button><p style="margin-bottom:150px"><a href="forgot.php" style="color:black;font-size:15px;margin-left:-400px"><b>Forgot Password ?</b></a></p>
                          <?php
                                if(isset($_GET['flag']))
                                {
                                    if($_GET['flag']==1)
                                    {
                                        echo "<center><font style='color:red; text-align:center;font-size:15px;'><b>OOPS !! Incorrect Details</b></font></center><br/>";
                                    }
                                    if($_GET['flag']==3)
                                    {
                                        echo "<center><font style='color:red; text-align:center;font-size:15px'><b>OOPS !! Access Denied</b></font></center><br/>";
                                    }
                                }
                            ?>
                      </div>
                        <img class="s-mockup-v2" src="img/mockups/pencil-01.png" alt="Mockup Image">
                      <div class="row">
                       <div class="col-xs-7" style="margin-left:250px;margin-bottom:150px">
                        </div>
                      </div>
                        </center>
                </form>
            </div>
        </div>
        <!-- End Feedback Form -->
        <!--========== END PAGE CONTENT ==========-->
    </body>
    <!-- End Body -->
</html>
<?php
include "footer.php";
?>
