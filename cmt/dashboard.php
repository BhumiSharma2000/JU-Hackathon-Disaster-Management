<?php include("header.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
              <div class="row">
                <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-gray">
            <div class="inner">
              <h3>Users
              </h3>
              <p>Users Details</p>
            </div>
            <div class="icon">
              <i class="ion ion-user"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo $countusers[0];  ?></h3>
              <p>Total Users</p>
            </div>
            <div class="icon">
              <i class="ion ion-user"></i>
            </div>
          </div>
        </div>
         <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo $countausers[0]; ?></h3>
              <p>Total Active Users</p>
            </div>
            <div class="icon">
              <i class="ion ion-user"></i>
            </div>
              </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-gray">
            <div class="inner">
              <h3>CMT
              </h3>
              <p>CMT Details</p>
            </div>
            <div class="icon">
              <i class="ion ion-user"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-navy blue">
            <div class="inner">
              <h3><?php echo $countcmt[0]; ?></h3>
              <p>Total CMT-Members</p>
            </div>
            <div class="icon">
              <i class="ion ion-user"></i>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-navy blue">
            <div class="inner">
              <h3><?php echo $countacmt[0]; ?></h3>
              <p>Total Active CMT-Members</p>
            </div>
            <div class="icon">
              <i class="ion ion-user"></i>
            </div>
        </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
    error_reporting(E_ERROR | E_PARSE);
    if($_GET['ep']==1)
    {
      echo "<script> alert('Profile Updated Successfully...');</script>";
    }

  ?>
<?php include("footer.php"); ?>
