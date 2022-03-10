<?php 
include "connection.php";
$obj=new functions();
$obj->con();
if(isset($_POST['sub']))
{
	$obj->add_client($_POST['txtname'],$_POST['txtaddress'],$_POST['txtemail'],$_POST['txtcon'],$_POST['txtntn']);
}

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
            <h1>Add Client</h1>
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
              <form autocomplete="off" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label>Client Name</label>
                    <input name="txtname" type="text" class="form-control" placeholder=" Enter Client name">
                  </div>
                  <div class="form-group">
                    <label>Client address</label>
                    <input name="txtaddress" type="text" class="form-control" placeholder=" Enter Client address">
                  </div>
                  <div class="form-group">
                    <label >Client email</label>
                    <input name="txtemail" type="email" class="form-control" placeholder=" Enter Client email">
                  </div>
                  <div class="form-group">
                    <label >Client contact</label>
                    <input name="txtcon" type="text" class="form-control" placeholder=" Enter Client contact">
                  </div>
                  <div class="form-group">
                    <label>Client ntn</label>
                    <input name="txtntn" type="text" class="form-control" placeholder="Enter Client ntn">
                  </div>
                                    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="sub" type="submit" class="btn btn-primary">Submit</button>
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
