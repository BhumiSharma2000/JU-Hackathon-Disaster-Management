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
    ?>

    <!-- Body -->
    <body>

        <!-- Parallax -->
        <div class="s-promo-block-v5 g-bg-position--center js__parallax-window" style="background: url(img/1920x1080/blog.jpg) 50% 0 no-repeat fixed;">
            <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm" style="margin-bottom:-50px">
                <div class="g-margin-b-30--xs">
                    <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white"style="margin-top:50px">The Way to Share Your Ideas</h2>
                </div>
            </div>
        </div>
        <!-- End Parallax -->
        <!-- Current Blog -->
        <div class="g-bg-color--sky-light">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-text-center--xs g-margin-b-80--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Blogs</p>
                </div>
                <div class="row">
                <?php
                    include "connection.php";
                    $query="SELECT * FROM tb1_blog WHERE status='1' AND verified='1' ";
                    $result=mysqli_query($con,$query);
					while($value2 = mysqli_fetch_array($result))
					{
                        $date=$value2['publish_date'];
                        if(strtotime($date) <= strtotime('now'))
                        {
                            $b=$value2['blog_id'];
                ?>

                    <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                        <!-- News -->
                        <article><a href="blogread.php?id=<?php echo $value2['blog_id'];?> ">
                            <img class="img-responsive" src="<?php echo $value2['image']?>" alt="Image"></a>
                            <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2"><?php echo $value2['Title']; ?></p>
                            </div>
                        </article>
                        <!-- End News -->
                    </div>
                <?php
                    }
                    }
                ?>
                </div>
            </div>
        </div>
        <!-- End Current Blog -->
        <!-- Upcoming Blog -->
        <div class="g-bg-color--sky-light">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-text-center--xs g-margin-b-80--xs"  style="margin-top:-130px">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Blogs</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-letter-spacing--1">Upcoming Blogs</h2>
                </div>
                <div class="row">
                <?php
                    include "connection.php";
                    $query="SELECT * FROM tb1_blog WHERE status='1' AND verified='1' ";
                    $result=mysqli_query($con,$query);
					while($value2 = mysqli_fetch_array($result))
					{
                        $date=$value2['publish_date'];
                        if(strtotime($date) > strtotime('now'))
                        {
                ?>

                    <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                        <!-- News -->
                        <article>
                            <img class="img-responsive" src="<?php echo $value2['image']?>" alt="Image">
                            <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2"><?php echo $value2['Title']; ?></p>
                            </div>
                        </article>
                        <!-- End News -->
                    </div>
                <?php
                    }
                    }
                ?>
                </div>
            </div>
        </div>
        <!-- End Current Blog -->
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
        <div id="js__scroll-to-appointment" class="g-bg-color--sky-light g-padding-y-80--xs g-padding-y-125--sm" style="margin-top:-120px">
            <div class="container g-bg-color--white g-box-shadow__dark-lightest-v3">
                <div class="row">
                    <!-- Form -->
                    <div class="col-md-8 js__form-eqaul-height-v1">
                        <div class="g-padding-x-40--xs g-padding-y-50--xs">
                            <h2 class="g-font-size-24--xs g-color--primary g-margin-b-50--xs">Write a Blog</h2>
                            <form method="post" action="insertblog.php" enctype="multipart/form-data">
                                <div class="row g-margin-b-30--xs g-margin-b-50--md">
                                    <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                        <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" placeholder="Title" name="title">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" placeholder="Author" name="author">
                                    </div>
                                </div>
                                <div class="g-margin-b-50--xs">
                                    <textarea class="form-control s-form-v4__input g-padding-l-0--xs" rows="5" placeholder="Description" name="description"></textarea>
                                </div>
                                <div class="row g-margin-b-30--xs g-margin-b-50--md">
                                    <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                        <input type="date" name="dob" class="form-control pull-right" id="datepicker" autocomplete="off" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                      <label>Add Profile Pic</label>
                                      <input type="file" id="profile-img" name="image" accept="image/png,image/jpg,image/jpeg" class="form-control" placeholder="">
                                        <div id="myDiv" align="center"> 
                                            <!--<p class="square"> -->
                                          <img src="../photos/blog.jpg" id="profile-img-tag" alt="Profile Pic" width="200px" height="200px" style="border:5px solid #ffffff; background-color: #ffffff;" />
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
        <!--========== END PAGE CONTENT ==========-->

       <?php
        }
            include "footer.php";
        ?>

    </body>
    <!-- End Body -->
</html>
<?php
