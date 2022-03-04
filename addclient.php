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
            <h1>Add Shipper</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <a href="./viewclient.php" class="breadcrumb-item">
                    <i class="far fa-eye nav-icon"> view Client</i>                    
                </a>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Client Detail</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label>Client Name</label>
                    <input type="text" class="form-control" placeholder=" Enter Client name">
                  </div>
                  <div class="form-group">
                    <label>Client address</label>
                    <input type="text" class="form-control" placeholder=" Enter Client address">
                  </div>
                  <div class="form-group">
                    <label >Client email</label>
                    <input type="email" class="form-control" placeholder=" Enter Client email">
                  </div>
                  <div class="form-group">
                    <label >Client contact</label>
                    <input type="text" class="form-control" placeholder=" Enter Client contact">
                  </div>
                  <div class="form-group">
                    <label>Client ntn</label>
                    <input type="text" class="form-control" placeholder="Enter Client ntn">
                  </div>
                                    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <?php include "./footer.php"; ?>
