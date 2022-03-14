<?php 
include "connection.php";
$obj=new functions();
$obj->con();
$conn = $_SESSION['conn'];
$id = $_GET['id'];
$select = mysqli_query( $conn, "select * from booking where id='$id'" );
$row = mysqli_fetch_array( $select );
if(isset($_POST['sub']))
{
	$obj-> update_booking($_POST['shipper'],$_POST['client'],$_POST['consignee'],$_POST['pol'],$_POST['pod'],$_POST['cutt'],$_POST['eta'],$_POST['etd'],$_POST['client'],$_POST['consignee'],$_POST['pol'],$_POST['pod'],$_POST['cutt'],$_POST['etd'],$_POST['eta'],$_POST['vessel'],$_POST['voyage'],$_POST['coloader'],$_POST['agent'],$_POST['buying'],$_POST['selling'],$_POST['roe']);
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
            <h1>Add Booking</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a href="./viewbooking.php" class="breadcrumb-item">
                <i class="far fa-eye nav-icon"> view Booking</i>                    
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
                <h3 class="card-title">Booking Detail</h3>
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
                    <label for="cars">Shipper</label>
                    <select name="shipper" value="<?php echo $row[1];?>" type="text" class="form-control">
                        <?php $obj->shipper();?>
                    </select>
                  </div>  
                  <div class="form-group">
                    <label for="cars">Client</label>
                    <select name="client" value="<?php echo $row[2];?>" type="text" class="form-control">
                      <?php $obj->client();?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="cars">Consignee</label>
                    <select name="consignee" value="<?php echo $row[3];?>" type="text" class="form-control">
                        <?php $obj->consignee();?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="cars">Port of Loading</label>
                    <select name="pol" value="<?php echo $row[4];?>" type="text" class="form-control">
                        <?php $obj->pol();?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="cars">Port of Discharge</label>
                    <select name="pod" value="<?php echo $row[5];?>" type="text" class="form-control">
                      <?php $obj->pod();?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Expected time cutt of</label>
                    <input name="cutt" value="<?php echo $row[6];?>" type="date" class="form-control" placeholder="Enter pod">
                  </div>
                  <div class="form-group">
                    <label>Expected time departure</label>
                    <input name="etd" value="<?php echo $row[7];?>" type="date" class="form-control" placeholder="Enter pod">
                  </div>
                  <div class="form-group">
                    <label>Expected time arrival</label>
                    <input name="eta" value="<?php echo $row[8];?>" type="date" class="form-control" placeholder="Enter pod">
                  </div>
                  <div class="form-group">
                    <label>Vessel</label>
                    <input name="vessel" value="<?php echo $row[9];?>" type="text" class="form-control" placeholder="Enter Vessel">
                  </div>
                  <div class="form-group">
                    <label>Voyage</label>
                    <input name="voyage" value="<?php echo $row[10];?>" type="text" class="form-control" placeholder="Enter voyage">
                  </div>
                  <div class="form-group">
                    <label for="cars">Co Loader</label>
                    <select name="coloader" value="<?php echo $row[11];?>" type="text" class="form-control">
                        <?php $obj->coloader();?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="cars">Agent</label>
                    <select name="agent" value="<?php echo $row[12];?>" type="text" class="form-control">
                       <?php $obj->agent();?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>buying</label>
                    <input name="buying" value="<?php echo $row[13];?>" type="text" class="form-control" placeholder="Enter buying">
                  </div>
                  <div class="form-group">
                    <label>Selling</label>
                    <input name="selling" value="<?php echo $row[14];?>" type="text" class="form-control" placeholder="Enter selling">
                  </div>
                  <div class="form-group">
                    <label>R.O.E</label>
                    <input name="roe" value="<?php echo $row[15];?>" type="text" class="form-control" placeholder="Enter rate of exchange">
                  </div>
                  <div class="form-group">
                    <label for="cars">Currency</label>
                    <select name="currency" value="<?php echo $row[16];?>" type="text" class="form-control">
                      <?php $obj->currency();?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Profit Margin</label>
                    <input name="profit" value="<?php echo $row[17];?>" type="text" class="form-control" placeholder="Enter Margin">
                  </div>
                  <div class="form-group">
                    <label for="cars">Shipping Mode</label>
                    <select name="mode" value="<?php echo $row[18];?>" type="text" class="form-control" id="cars" name="cars">
                      <option value="volvo">By Air</option>
                      <option value="saab">By Sea</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Sales Person</label>
                    <input name="sales_person" value="<?php echo $row[19];?>" type="text" class="form-control" placeholder="Enter Sales Person">
                  </div>
                  <div class="form-group">
                    <label>Destuffing Yard</label>
                    <input name="yard" value="<?php echo $row[20];?>" type="text" class="form-control" placeholder="Enter Destuffing Yard">
                  </div>
                  <div class="form-group">
                    <label>Container Number</label>
                    <input name="con_num" value="<?php echo $row[21];?>" type="text" class="form-control" placeholder="Enter Container Number">
                  </div>
                  <div class="form-group">
                    <label>Mbl Telex Release</label>
                    <input name="mbl_telex" value="<?php echo $row[22];?>" type="text" class="form-control" placeholder="Enter Mbl Telex Release">
                  </div>
                  <div class="form-group">
                    <label>Hbl Telex Release</label>
                    <input name="hbl_telex" value="<?php echo $row[23];?>" type="text" class="form-control" placeholder="Enter Hbl Telex Release">
                  </div>
                  <div class="form-group">
                    <label>Submission of Manifest to Line</label>
                    <input name="submission_manifest" value="<?php echo $row[24];?>" type="text" class="form-control" placeholder="Enter Submission of Manifest">
                  </div>
                  <div class="form-group">
                    <label>Arrival Notice to Consignee</label>
                    <input name="arrival_notice" value="<?php echo $row[25];?>" type="text" class="form-control" placeholder="Enter Arrival Notice">
                  </div>
                  <div class="form-group">
                    <label>Collection of D/o by Consignee</label>
                    <input name="do" type="text" value="<?php echo $row[26];?>" class="form-control" placeholder="Enter Collection of D/o by Consignee">
                  </div>
                  <div class="form-group">
                    <label for="cars">Shipping Type</label>
                    <select name="type" type="text" value="<?php echo $row[27];?>" class="form-control" id="cars" name="cars">
                      <option value="volvo">Import</option>
                      <option value="saab">Export</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Hbl No</label>
                    <input name="hbl_no" type="text" value="<?php echo $row[28];?>" class="form-control" placeholder="Enter Hbl No">
                  </div>
                  <div class="form-group">
                    <label>Mbl No</label>
                    <input name="mbl_no" type="text" value="<?php echo $row[29];?>" class="form-control" placeholder="Enter Mbl No">
                  </div>
                  <div class="form-group">
                    <label>Volume</label>
                    <input name="volume" type="text" value="<?php echo $row[30];?>" class="form-control" placeholder="Enter Volume">
                  </div>
                  <div class="form-group">
                    <label>Gross Weight</label>
                    <input name="gross" type="text" value="<?php echo $row[31];?>" class="form-control" placeholder="Enter Gross Weight">
                  </div>
                  <div class="form-group">
                    <label>Net Weight</label>
                    <input name="net" type="text" value="<?php echo $row[32];?>" class="form-control" placeholder="Enter Net Weight">
                  </div>
                  <div class="form-group">
                    <label>Agree Rate with Consignee</label>
                    <input name="agreed_rate" type="text" value="<?php echo $row[33];?>" class="form-control" placeholder="Enter Agree Rate with Consignee">
                  </div>
                  <div class="form-group">
                    <label>Exwork</label>
                    <input name="exwork" type="number" value="<?php echo $row[34];?>" class="form-control" placeholder="Enter Exwork">
                  </div>
                  <div class="form-group">
                    <label>Ocean Freight</label>
                    <input name="of" type="number" value="<?php echo $row[35];?>" class="form-control" placeholder="Enter Ocean Freight">
                  </div>
                  <div class="form-group">
                    <label>Bl Courier</label>
                    <input name="bl" type="number" value="<?php echo $row[36];?>" class="form-control" placeholder="Enter Bl Courier">
                  </div>
                  <div class="form-group">
                    <label>Delivery Order</label>
                    <input name="do_charges" type="number" value="<?php echo $row[37];?>" class="form-control" placeholder="Enter Delivery Order">
                  </div>
                  <div class="form-group">
                    <label>Thc</label>
                    <input name="thc" type="number" value="<?php echo $row[38];?>" class="form-control" placeholder="Enter Thc">
                  </div>
                  <div class="form-group">
                    <label>Round Amount</label>
                    <input name="round" type="number" value="<?php echo $row[39];?>" class="form-control" placeholder="Enter Round Amount">
                  </div>
                  <!-- <div class="form-group">
                    <label>Total </label>
                    <input name="total_selling" type="number" class="form-control" readonly>
                  </div> -->
                  <div class="form-group">
                    <label>Agree Rate with Co-Loader</label>
                    <input name="coloader_rate" type="text" value="<?php echo $row[40];?>" class="form-control" placeholder="Enter Agree Rate with Co-Loader">
                  </div>
                  <div class="form-group">
                    <label>D/N</label>
                    <input name="dn" type="number" value="<?php echo $row[41];?>" class="form-control" placeholder="Enter D/N">
                  </div>
                  <div class="form-group">
                    <label>Ocean Freight Charges</label>
                    <input name="of_charges" type="number" value="<?php echo $row[42];?>" class="form-control" placeholder="Enter Ocean Freight">
                  </div>
                  <div class="form-group">
                    <label>Thc</label>
                    <input name="agree_thc" type="number" value="<?php echo $row[43];?>" class="form-control" placeholder="Enter Thc">
                  </div>
                  <div class="form-group">
                    <label>Documentation Charges</label>
                    <input name="doc_charges" type="number" value="<?php echo $row[44];?>" class="form-control" placeholder="Enter Documentation Charges">
                  </div>
                  <!-- <div class="form-group">
                    <label>Total Co-Loader Charges</label>
                    <input type="number" class="form-control" readonly>
                  </div> -->
                  <div class="form-group">
                    <label>Net Profit</label>
                    <input name="netprofit" value="<?php echo $row[45];?>" type="number" class="form-control">
                  </div>                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="sub" type="submit" class="btn btn-primary">Update</button>
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
