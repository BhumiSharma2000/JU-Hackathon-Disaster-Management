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
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-letter-spacing--1">Latest Blogs</h2>
                </div>
                <div class="row">
                <?php
                    include "connection.php";
                    $a=$_GET['id'];
                    $query="SELECT * FROM tb1_blog WHERE blog_id='$a'";
                    $result=mysqli_query($con,$query);
                    $value2 = mysqli_fetch_array($result);
                ?>

                    <div class="col-sm-12 g-margin-b-30--xs g-margin-b-0--md">
                        <!-- News -->
                        <article>
                            <img class="img-responsive" src="<?php echo $value2['image']?>" alt="Image" style="height:200px">
                            <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--black g-letter-spacing--2">Title: <?php echo $value2['Title']; ?></p>
                                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--black g-letter-spacing--2">Author: <?php echo $value2['Author']; ?></p>
                                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2"><?php echo $value2['description']; ?></p>
                            </div>
                        </article>
                        <!-- End News -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Current Blog -->
        
      
        <!--========== END PAGE CONTENT ==========-->

       <?php
            include "footer.php";
        ?>

    </body>
    <!-- End Body -->
</html>
<?php
