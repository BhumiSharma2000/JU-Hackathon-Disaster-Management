<?php //include("header.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
       <div class="row">
	   <div class="box box-warning">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			<br/>
			<?php
				if(isset($_GET['flag'])){
				if($_GET['flag']==1)
					{
						echo "<center><font style='color:green; text-align:center'>Video Added Successfully</font></center><br/>";
					
					}
				}

			?>	
			<br/>
              <form role="form" method="POST" action="insetvid.php" enctype="multipart/form-data" >
                <!-- text input -->
                
				  
				<div class="form-group">
				  <label> Video Link</label>
				<input type="url" name="uploadlink" class="form-control"  placeholder="https://example.com" required>  </div>
				
				 <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" rows="3" name="msg" placeholder="Enter Address..." required></textarea>
                </div>
               

				
              
                <input type="submit" name="submit" value="ADD" class="btn btn-primary">
            
			  
              </form>
			 
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  
 
  <!-- /.content-wrapper -->
<?php //include("footer.php"); ?>