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
    <!-- Begin Head -->
        <?php
    include("header.php");
  ?>

    <!-- Body -->
    <body>
        <!--========== PROMO BLOCK ==========-->
        <div class="s-promo-block-v3 g-bg-position--center g-fullheight--sm" style="background: url('img/1920x1080/latest.jpg');">
            <div class="container g-ver-center--sm g-padding-y-125--xs g-padding-y-0--sm">
                <div class="g-margin-t-30--xs g-margin-t-0--sm g-margin-b-30--xs g-margin-b-70--md">
                    <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-50--lg g-color--white">The Latest Disasters</h1>
                </div>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- Speakers -->
        
        <div class="g-hor-divider__dashed--sky-light">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-text-center--xs g-margin-b-80--xs">
                    <h2 class="g-font-size-32--xs g-font-size-36--sm">Latest Disaster</h2>
                </div>
                <div class="row">
                <?php
                    include "connection.php";
                    $query="SELECT * FROM tb1_disaster WHERE status='1' ";
                    $result=mysqli_query($con,$query);
					while($value2 = mysqli_fetch_array($result))
					{
                ?>

                    <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                        <!-- News -->
                        <article>
                            <img class="img-responsive" src="<?php echo $value2['image']?>" alt="Image">
                            <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2"><?php echo $value2['description']; ?></p>
                            </div>
                        </article>
                        <!-- End News -->
                    </div>
                <?php
                    }
                ?>
                </div>
            </div>
        </div>
        <!-- End Speakers -->
        
        <!-- Speakers -->
        <div class="g-hor-divider__dashed--sky-light">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-text-center--xs g-margin-b-80--xs">
                    <h2 class="g-font-size-32--xs g-font-size-36--sm">Latest Raise Incidence</h2>
                </div>
                <div class="row g-overflow--hidden">
                <?php
                    include "connection.php";
                    $sql="SELECT * FROM tb1_incidence WHERE status='1' AND verified='1'";
                    $query=mysqli_query($con,$sql);
                    while($result=mysqli_fetch_array($query))
                    {
                ?>
                    <div class="col-xs-6 g-full-width--xs g-margin-b-30--xs g-margin-b-0--lg">
                        <!-- Speaker -->
                        <div class="center-block g-box-shadow__dark-lightest-v1 g-width-100-percent--xs g-width-400--lg">
                            <img class="img-responsive g-width-100-percent--xs" src="<?php echo $result['image']?>" alt="Image">
                            <div class="g-position--overlay g-padding-x-30--xs g-padding-y-30--xs g-margin-t-o-60--xs">
                                <div class="g-bg-color--primary g-padding-x-15--xs g-padding-y-10--xs g-margin-b-20--xs">
                                    <h4 class="g-font-size-22--xs g-font-size-26--sm g-color--white g-margin-b-0--xs"><?php echo $result['location'];?></h4>
                                </div>
                                <p class="g-font-weight--700"><?php echo $result['occurred_date'];?></p>
                                <p><?php echo $result['description'];?></p>
                            </div>
                        </div>
                        <!-- End Speaker -->
                    </div>
                <?php
                    }
                ?>
            </div>
            </div>
        </div>
        <!-- End Speakers -->
                <!-- Form -->
        <?php
        error_reporting(E_ERROR | E_PARSE);
        session_start();
        if(!isset($_SESSION['log']))
        {
            header("location:index.php");
        }
        else
        {
            $email=$_SESSION['log'];
        ?>
        <div id="js__scroll-to-appointment" class="g-bg-color--sky-light g-padding-y-80--xs g-padding-y-125--sm" style="margin-top:-120px">
            <div class="container g-bg-color--white g-box-shadow__dark-lightest-v3">
                <div class="row">
                    <!-- Form -->
                    <div class="col-md-8 js__form-eqaul-height-v1">
                        <div class="g-padding-x-40--xs g-padding-y-50--xs">
                            <h2 class="g-font-size-24--xs g-color--primary g-margin-b-50--xs">Write a Incidence</h2>
                            <form method="post" action="insertincidence.php" enctype="multipart/form-data">
                                <div class="g-margin-b-50--xs">
                                    <textarea class="form-control s-form-v4__input g-padding-l-0--xs" rows="5" placeholder="Location" name="location"></textarea>
                                </div>
                                <div class="g-margin-b-50--xs">
                                    <textarea class="form-control s-form-v4__input g-padding-l-0--xs" rows="5" placeholder="Description" name="description"></textarea>
                                </div>
                                <div class="row g-margin-b-30--xs g-margin-b-50--md">
                                    <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                        <input type="date" name="occurred_date" class="form-control pull-right" id="datepicker" autocomplete="off" required place/>
                                    </div>
                                </div>
                                <div class="row g-margin-b-30--xs g-margin-b-50--md">
                                    <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                        <input type="time" name="occurred_time" class="form-control pull-right" id="datepicker" autocomplete="off" required place/>
                                    </div>
                                </div>
                                <div class="form-group">
                                      <label>Add Incidence Pic</label>
                                      <input type="file" id="profile-img" name="image" accept="image/png,image/jpg,image/jpeg" class="form-control" placeholder="">
                                        <div id="myDiv" align="center"> 
                                            <!--<p class="square"> -->
                                          <img src="../photos/a.jpg" id="profile-img-tag" alt="Profile Pic" width="200px" height="200px" style="border:5px solid #ffffff; background-color: #ffffff;" />
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
    include("footer.php");
  ?>
    </body>
    <!-- End Body -->
</html>
