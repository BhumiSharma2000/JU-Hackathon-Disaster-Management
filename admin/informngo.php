<?php include("header.php");
error_reporting(E_PARSE | E_ERROR );?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Informed NGO
        <small>Admin Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Inform Officers</li>
      </ol>
      <?php
        if(isset($_GET['flag'])){
        if($_GET['flag']==1)
          {
            echo "<center><font style='color:green; text-align:center;font-size:18px'><b><u><i>Profile Updated Successfully</i></u></b></font></center><br/>";
          
          }
        }

      ?>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
      <div class="row">
	    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Inform Officers</h3>
            </div>
              
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <form method="POST">
                    <select name="ans" style="margin-left:2px">
                    <option value="pick">--select disaster---</option>
	                    <option value="Clothes" selected>Clothes</option> 
                    <option value="Money" >Money</option> 
                    <option value="Food">Food</option> 
                    </select>
                    <input type="submit" name ="myform" value="show"><br/>
            </form>
                <?php 
                if(isset($_POST['myform']))
                {
                    ?>
              <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Sr.No</th>
                  <th>User Name</th>
				  <th>Email</th>
				  <th>Phone</th>
                    <th>Category</th>
                           </tr>
				<?php
					 $select=$_POST['ans'];
                    include "connection.php";
                    $query="SELECT * FROM tb1_ngo WHERE status=1 AND category='$select'";
                //var_dump($query);
                    $sql=mysqli_query($con,$query); 
					$seq=1;
					while($value2=mysqli_fetch_array($sql))
					{
                        $a=$value2['category'];
				?>
                <tr>
                  <td><?php echo $seq;?></td>
                  <td><?php echo $value2['name'];?></td>
                  <td><?php echo $value2['email'];?></td>
				  <td><?php echo $value2['phone'];?></td>
                    <td><?php echo $value2['category'];?></td>
				</tr>
				<?php
					$seq++;
					}
				?>
                    <td> 
				  <a class="btn btn-success btn-xs" href="informabout.php?id=<?php echo $a;?> " 
					onclick="return confirm('Sure to Inform ?');">Inform</a>
					</td> 
              </table>
              </div>
                <?php
                }
                ?>
</div>
	</div>
        </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <?php include("footer.php"); ?>