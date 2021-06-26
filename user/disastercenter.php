<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
   <?php include "header.php";?>
     <div class="g-fullheight--xs js__parallax-window" style="background: url(img/1920x1080/search.jpg) 50% 0 no-repeat fixed; background-size: cover;">
        </div>
        <!--========== PROMO BLOCK ==========-->
       
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->
    <table class="table table-hover" >
        <form  method="post" role="form">
                <!-- text input -->
                  
        <div class="form-group" style="margin-top:30px">
               <div class="g-text-center--xs g-margin-b-80--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Disaster-Center</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-letter-spacing--1">Search Disaster Center</h2>
                </div>
          <tr>
          <td> 
               <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                        <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" placeholder="Search" name="service">
              </div></td></tr>
         <tr><td>
         <div class="box-footer">
                <input type="submit" name="submit" value="SEND" class="btn btn-primary">
             </div></td></tr></div>
       </form>
      <?php
       if(isset($_POST['submit']))
       {
          include "connection.php";
           $z=$_POST['service'];
          $xs="SELECT *  FROM `tb1_map` WHERE address LIKE '%$z%' ";
           //var_dump($xs);
          $zx=mysqli_query($con,$xs);
          $count=mysqli_num_rows($zx);
           //echo $count;
          if($count!=0)
          {
            ?>
            <tr><td style=color:green;font-size:23px;><img src="1.png" height="40px" width="40px"> &nbsp;FOUND!!! Following Disaster Centers at Your City</td></tr>
                <tr>
                  <th>Sr.No</th>
          <th>Address</th>
          <th>Mobile Number</th>
                </tr>
                <?php
              $seq=1;
          while($value=mysqli_fetch_array($zx))
            {
       ?>     
            <tr>
            <td><?php echo $seq?></td>
              <td><?php echo $value['address'];?></td>
                <td><a href="tel:<?php echo $value['mobile'];?>"><?php echo $value['mobile'];?></a></td></tr>

            <?php
              $seq++;
      }
          }
else
{
  echo "<tr><td style=color:red;font-size:23px;><img src='2.png' height='40px' width='40px'> &nbsp;OOPS! Disaster center not available at Your City :( </td></tr>";
}
}
        
?>
        </table>
        <div class="box-footer" style="margin:50px">
            <form action="backup.php">
                <input type="submit" name="submit" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Show On Map&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" class="btn btn-warning"></form>
        </div>
    <?php
    include "footer.php";
    ?>
</html>
