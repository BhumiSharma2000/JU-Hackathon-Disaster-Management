<!DOCTYPE html>
<?php
  session_start();
?>
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
    <?php
    include "header.php";
    include "connection.php";
    ?>
    <!-- Body -->
    <body>
        <!-- Parallax -->
        <div class="s-promo-block-v5 g-bg-position--center js__parallax-window" style="background: url(img/1920x1080/lost.jpg) 50% 0 no-repeat fixed;">
            <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm" style="margin-bottom:-50px">
                <div class="g-margin-b-30--xs">
                    <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white"style="margin-top:50px">Find Your Peoples Here !!</h2>
                </div>
            </div>
        </div>
        <!-- End Parallax -->
        <form method="POST" action="">
         <div class="row g-row-col--0" style="margin-top:50px">
             <div class="row g-margin-b-30--xs g-margin-b-50--md" style="margin-left:20px;margin-top:20px">
                                <div class="g-text-center--xs g-margin-b-80--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Peoples</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-letter-spacing--1">Search Found People</h2>
                </div>
                    <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                        <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" placeholder="Search through name,age,address or mobile number" name="search">
                    </div>
                    <div class="col-sm-6">
                        <input type="submit" name="ok" value="submit" class="btn btn-primary">
                    </div>
                </div>         
                <?php
                    if(isset($_POST['ok']))
                    {
                        $search=$_POST['search'];
                        $sql1="SELECT * FROM tb1_people WHERE name LIKE '%$search%' OR mobile LIKE '%$search%' OR age LIKE '%$search%' OR address LIKE '%$search%'  AND found='0'";
                        $res=mysqli_query($con,$sql1);
                        while($row = mysqli_fetch_array($res))
                        {
                ?>
            <div class="col-md-3 col-xs-6 g-full-width--xs">
                <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                    <!-- Team -->
                    <div class="s-team-v1">
                        <img class="img-responsive g-width-100-percent--xs" src="<?php echo $row['image'];?>" alt="Image">
                        <div class="g-text-center--xs g-bg-color--white g-padding-x-30--xs g-padding-y-40--xs">
                            <h1 class="g-font-size-18--xs g-margin-b-5--xs"><?php echo "Name: ".$row['name'];?></h1>
                            <h1 class="g-font-size-18--xs g-margin-b-5--xs"><?php echo "Mobile: ".$row['mobile'];?></h1>
                            <h1 class="g-font-size-18--xs g-margin-b-5--xs"><?php echo "Address: ".$row['address'];?></h1>
                            <span class="g-font-size-15--xs g-color--text"><i><?php echo "Age: ".$row['age'];?></i></span>
                        </div>
                    </div>
                    <!-- End Team -->
                </div>
                            </div>
                <?php
                    }
                    }
                ?>
        </div>
        </form>
<!-- Team -->
        <div class="row g-row-col--0" style="margin-top:50px">
            <div class="g-text-center--xs g-margin-b-80--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Peoples</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-letter-spacing--1">Found Peoples</h2>
                </div>
                <?php
                    $sql="SELECT * FROM tb1_people WHERE type='1' AND active='1' AND found='0'";
                    $query=mysqli_query($con,$sql);
                    while($result=mysqli_fetch_array($query))
                    {
                ?>
            <div class="col-md-3 col-xs-6 g-full-width--xs">
                <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                    <!-- Team -->
                    <div class="s-team-v1">
                        <img class="img-responsive g-width-100-percent--xs" src="<?php echo $result['image'];?>" alt="Image">
                        <div class="g-text-center--xs g-bg-color--white g-padding-x-30--xs g-padding-y-40--xs">
                            <h1 class="g-font-size-18--xs g-margin-b-5--xs"><?php echo "Name: ".$result['name'];?></h1>
                            <h1 class="g-font-size-18--xs g-margin-b-5--xs"><?php echo "Mobile: ".$result['mobile'];?></h1>
                            <h1 class="g-font-size-18--xs g-margin-b-5--xs"><?php echo "Address: ".$result['address'];?></h1>
                            <span class="g-font-size-15--xs g-color--text"><i><?php echo "Age: ".$result['age'];?></i></span>
                        </div>
                    </div>
                    <!-- End Team -->
                </div>
                            </div>
                <?php
                    }
                ?>
        </div>
        <!-- End Team -->
        <!-- Form -->
         <?php
        error_reporting(E_ERROR | E_PARSE);
        if(!isset($_SESSION['log']))
        {
            header("location:index.php");
        }
        else
        {
            $email=$_SESSION['log'];
        ?>
        <div id="js__scroll-to-appointment" class="g-bg-color--sky-light g-padding-y-80--xs g-padding-y-125--sm">
            <div class="container g-bg-color--white g-box-shadow__dark-lightest-v3">
                <div class="row">
                    <!-- Form -->
                    <div class="col-md-8 js__form-eqaul-height-v1">
                        <div class="g-padding-x-40--xs g-padding-y-50--xs">
                            <h2 class="g-font-size-24--xs g-color--primary g-margin-b-50--xs">Add Lost People</h2>
                            <form method="post" action="lostpeople.php" enctype="multipart/form-data">
                                <div class="row g-margin-b-30--xs g-margin-b-50--md">
                                    <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                        <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" placeholder="Name" name="name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" placeholder="age" name="age">
                                    </div>
                                </div>
                                <div class="row g-margin-b-30--xs g-margin-b-50--md">
                                    <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                        <label>Mobile</label>
                                        <input type="text" name="mobile" class="form-control pull-right" id="datepicker" autocomplete="off" required />
                                    </div>
                                </div>
                                <div class="g-margin-b-50--xs">
                                    <textarea class="form-control s-form-v4__input g-padding-l-0--xs" rows="5" placeholder="Address" name="address"></textarea>
                                </div>
                                <div class="row g-margin-b-30--xs g-margin-b-50--md">
                                    <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                        <label>Lost_on</label>
                                        <input type="date" name="lost_on" class="form-control pull-right" id="datepicker" autocomplete="off" required />
                                    </div>
                                </div>
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
                                    <input type="submit" name="submit" value="submit" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Form -->

                    <!-- Contacts -->
        <div class="col-md-4 g-bg-color--primary-ltr js__form-eqaul-height-v1">
            <div class="g-overflow--hidden g-padding-x-40--xs g-padding-y-50--xs"> 
               
                    <i class="g-font-size-150--xs g-color--white-opacity-lightest ti-comments" style="position: absolute; bottom: -1.25rem; right: -1.25rem;"></i>
                        </div>
                    <!-- End Contacts -->
                </div>
            </div>
        </div>
        </div>
        <!-- End Form -->
        <?php  
            }
        ?>
        <!--========== END PAGE CONTENT ==========-->

       <?php
            include "footer.php";
        ?>

    </body>
    <!-- End Body -->
</html>
