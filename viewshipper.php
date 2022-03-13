<?php 
include "connection.php";
$obj=new functions();
$obj->con();
?>
<!DOCTYPE html>
<html>
<?php include "./header.php"; ?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php include "./sidebar.php";?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Shipper Detail</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <a href="./addshipper.php" class="breadcrumb-item">
                    <i class="far fa-plus-square nav-icon"> Add Shipper</i>                    
                </a>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Records of data</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Shipper Name</th>
                  <th>Address</th>
                  <th>Contact</th>
                  <th>E-mail</th>
                  <th>Ntn</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                 <?php $obj->view_shipper();?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <?php include "./footer.php"; ?>
