<?php 
include "connection.php";
$obj=new functions();
$obj->con();
$conn = $_SESSION['conn'];
$id = $_GET['id'];
$select = mysqli_query( $conn, "select * from agent where id='$id'" );
$row = mysqli_fetch_array( $select );
if(isset($_POST['sub']))
{
    $obj -> update_agent($_POST['txtname'],$_POST['txtaddress'],$_POST['txtemail'],$_POST['txtcon'],$_POST['txtntn']);
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
            <h1>Add Agent</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <a href="./viewagent.php" class="breadcrumb-item">
                    <i class="far fa-eye nav-icon"> view Agent</i>                    
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
                <h3 class="card-title">Agent Detail</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form autocomplete="off" method="post">
                <div class="card-body">
                <div class="form-group">
                    <label>Id No</label>
                    <input name="id" type="text" value="<?php echo $row[0];?>" class="form-control" readonly>
                  </div>
                  <div class="form-group">
                    <label>Agent Name</label>
                    <input name="txtname" type="text" value="<?php echo $row[1];?>" class="form-control" placeholder=" Enter Agent name">
                  </div>
                  <div class="form-group">
                    <label>Agent address</label>
                    <input name="txtaddress" type="text" value="<?php echo $row[2];?>" class="form-control" placeholder=" Enter Agent address">
                  </div>
                  <div class="form-group">
                    <label >Agent email</label>
                    <input name="txtemail" type="email" value="<?php echo $row[3];?>" class="form-control" placeholder=" Enter Agent email">
                  </div>
                  <div class="form-group">
                    <label >Agent contact</label>
                    <input name="txtcon" type="text" value="<?php echo $row[4];?>" class="form-control" placeholder=" Enter Agent contact">
                  </div>
                  <div class="form-group">
                    <label>Agent ntn</label>
                    <input name="txtntn" type="text" value="<?php echo $row[5];?>" class="form-control" placeholder="Enter Agent ntn">
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