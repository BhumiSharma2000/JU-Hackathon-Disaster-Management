<?php include("header.php"); ?>
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
        Graphical Representation
        <small>Admin Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Add Graphical Representation</li>
      </ol>
          <?php
            if(isset($_GET['flag']))
            {
                if($_GET['flag']==1)
                {
                    echo "<center><font style='color:green; text-align:center'><b>Admin Added Successfully</b></font></center><br/>";
                }
            }
          ?>
          <?php
          if(isset($_GET['xyz']))
          {
            if($_GET['xyz']==1)
            {
                echo "<center><font style='color:blue; text-align:center'><b>Email Id or Phone No. Already Exists</b></font></center><br/>";
            }
          }
          ?>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
       <div class="row">
           <form method="POST" action="update.php">
            <select name="ans" style="margin-left:2px">
            <option value="pick">--select disaster---</option>
	   <?php
            include("connection.php");
            $q="SELECT * FROM graph";
			$c=mysqli_query($con,$q);
			$d=mysqli_num_rows($c);
			while($d=mysqli_fetch_array($c))
			{
			     echo"<option value='".$d['disaster']."'>".$d['disaster']."</option>";
			 }
			?>	 
            </select>
            <input type="submit" name ="myform" value="show"><br/>
            </form>
            <?php
                if(isset($_POST["myform"]))
                {
                    $a=$_POST["ans"];
                    echo $a;
                }
		      ?>
           <table border="1"  class="table table-hover" style="margin-top:50px">
               <th>No</th>
        <th>Disaster Name</th>
        <th>No. of Times Occurred</th>
		<?php
               $sql = "SELECT disaster,count FROM graph"; 
               $res = mysqli_query($con, $sql);
               $seq=1;
               while ($row = mysqli_fetch_array($res)) 
                {  
        ?>                           
               <tr>
                  <td><?php echo $seq;?></td>
				  <td><?php echo $row['disaster'];?></td>
				  <td><?php echo $row['count'];?></td>

               </tr>
               <?php
                $seq++;
                }  
               ?> 
           </table>
           <table border="1"  class="table table-hover" style="margin-top:50px">
           <form method="POST" action="addinsert.php">
               <tr>
                   <td>DISASTER NAME:</td><td><input type="text" name="disaster" /><br/></td></tr><tr>
               <td>NO OF TIME DISASTER OCCUR:</td><td><input type="number" name="count" /><br/></td></tr><tr><td colspan="2">
               <input type="submit" name="insert" value="insert" /><br/></td></tr>
               
</form>
               </table>
        </div>
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("footer.php"); ?> 
  