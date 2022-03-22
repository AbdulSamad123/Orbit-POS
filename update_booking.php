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
	$obj-> update_booking($_POST['shipper'],$_POST['client'],$_POST['consignee'],$_POST['pol'],$_POST['pod'],$_POST['cutt'],$_POST['eta'],$_POST['etd'],$_POST['client'],$_POST['consignee'],$_POST['pol'],$_POST['pod'],$_POST['cutt'],$_POST['etd'],$_POST['eta'],$_POST['vessel'],$_POST['voyage'],$_POST['commodity'],$_POST['packages'],$_POST['coloader'],$_POST['agent'],$_POST['buying'],$_POST['selling'],$_POST['roe'],$_POST['currency'],$_POST['profit'],$_POST['mode'],$_POST['sales_person'],$_POST['destufing_yard'],$_POST['container_number'],$_POST['mbl_status'],$_POST['hbl_status'],$_POST['submission_manifest'],$_POST['arival_notice'],$_POST['collection_do'],$_POST['type'],$_POST['hbl'],$_POST['mbl'],$_POST['volume'],$_POST['gross_weight'],$_POST['net_weight'],$_POST['agreed_rate'],$_POST['exwork'],$_POST['ocean_freight'],$_POST['bl'],$_POST['do'],$_POST['thc'],$_POST['round_amount'],$_POST['agree_rate_coloader'],$_POST['dn_charges'],$_POST['of_charges'],$_POST['thc_coloader'],$_POST['docs_charges'],$_POST['net_profit']);
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
                    <select name="shipper" type="text" class="form-control">
                        <option value="<?php echo $row[1];?>">Select Shipper</option>
                        <?php $obj->shipper();?>
                    </select>
                  </div>  
                  <div class="form-group">
                    <label for="cars">Client</label>
                    <select name="client" type="text" class="form-control">
                    <option value="<?php echo $row[2];?>">Select Client</option>
                      <?php $obj->client();?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="cars">Consignee</label>
                    <select name="consignee" type="text" class="form-control">
                      <option value="<?php echo $row[3];?>">Select Consignee</option>  
                      <?php $obj->consignee();?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="cars">Port of Loading</label>
                    <select name="pol" type="text" class="form-control">
                        <option value="<?php echo $row[4];?>">Select Pol</option>
                        <?php $obj->pol();?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="cars">Port of Discharge</label>
                    <select name="pod" type="text" class="form-control">
                      <option value="<?php echo $row[5];?>">Select Pod</option>
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
                    <label>Commodity</label>
                    <input name="commodity" value="<?php echo $row[11];?>" type="text" class="form-control" placeholder="Enter voyage">
                  </div>
                  <div class="form-group">
                    <label>Packages</label>
                    <input name="packages" value="<?php echo $row[12];?>" type="text" class="form-control" placeholder="Enter voyage">
                  </div>
                  <div class="form-group">
                    <label for="cars">Co Loader</label>
                    <select name="coloader" type="text" class="form-control">
                      <option value="<?php echo $row[13];?>">Select Coloader</option> 
                      <?php $obj->coloader();?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="cars">Agent</label>
                    <select name="agent" type="text" class="form-control">
                      <option value="<?php echo $row[14];?>">Select Agent</option> 
                      <?php $obj->agent();?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>buying</label>
                    <input name="buying" value="<?php echo $row[15];?>" type="text" class="form-control" placeholder="Enter buying">
                  </div>
                  <div class="form-group">
                    <label>Selling</label>
                    <input name="selling" value="<?php echo $row[16];?>" type="text" class="form-control" placeholder="Enter selling">
                  </div>
                  <div class="form-group">
                    <label>R.O.E</label>
                    <input name="roe" value="<?php echo $row[17];?>" type="text" class="form-control" placeholder="Enter rate of exchange">
                  </div>
                  <div class="form-group">
                    <label for="cars">Currency</label>
                    <select name="currency" type="text" class="form-control">
                      <option value="<?php echo $row[18];?>">Select Currency</option>
                      <?php $obj->currency();?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Profit Margin</label>
                    <input name="profit" value="<?php echo $row[19];?>" type="text" class="form-control" placeholder="Enter Margin">
                  </div>
                  <div class="form-group">
                    <label for="cars">Shipping Mode</label>
                    <select name="mode" type="text" class="form-control" id="cars" name="cars">
                      <option value="<?php echo $row[20];?>">Select Mode</option>
                      <option value="air">By Air</option>
                      <option value="sea">By Sea</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Sales Person</label>
                    <input name="sales_person" value="<?php echo $row[21];?>" type="text" class="form-control" placeholder="Enter Sales Person">
                  </div>
                  <div class="form-group">
                    <label>Destuffing Yard</label>
                    <input name="destufing_yard" value="<?php echo $row[22];?>" type="text" class="form-control" placeholder="Enter Destuffing Yard">
                  </div>
                  <div class="form-group">
                    <label>Container Number</label>
                    <input name="container_number" value="<?php echo $row[23];?>" type="text" class="form-control" placeholder="Enter Container Number">
                  </div>
                  <div class="form-group">
                    <label>Mbl Telex Release</label>
                    <input name="mbl_status" value="<?php echo $row[24];?>" type="text" class="form-control" placeholder="Enter Mbl Telex Release">
                  </div>
                  <div class="form-group">
                    <label>Hbl Telex Release</label>
                    <input name="hbl_status" value="<?php echo $row[25];?>" type="text" class="form-control" placeholder="Enter Hbl Telex Release">
                  </div>
                  <div class="form-group">
                    <label>Submission of Manifest to Line</label>
                    <input name="submission_manifest" value="<?php echo $row[26];?>" type="text" class="form-control" placeholder="Enter Submission of Manifest">
                  </div>
                  <div class="form-group">
                    <label>Arrival Notice to Consignee</label>
                    <input name="arival_notice" value="<?php echo $row[27];?>" type="text" class="form-control" placeholder="Enter Arrival Notice">
                  </div>
                  <div class="form-group">
                    <label>Collection of D/o by Consignee</label>
                    <input name="collection_do" type="text" value="<?php echo $row[28];?>" class="form-control" placeholder="Enter Collection of D/o by Consignee">
                  </div>
                  <div class="form-group">
                    <label for="cars">Shipping Type</label>
                    <select name="type" type="text" value="<?php echo $row[29];?>" class="form-control" id="cars" name="cars">
                      <option value="<?php echo $row[27];?>">Select Type</option>
                      <option value="import">Import</option>
                      <option value="export">Export</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Hbl No</label>
                    <input name="hbl" type="text" value="<?php echo $row[30];?>" class="form-control" placeholder="Enter Hbl No">
                  </div>
                  <div class="form-group">
                    <label>Mbl No</label>
                    <input name="mbl" type="text" value="<?php echo $row[31];?>" class="form-control" placeholder="Enter Mbl No">
                  </div>
                  <div class="form-group">
                    <label>Volume</label>
                    <input name="volume" type="text" value="<?php echo $row[32];?>" class="form-control" placeholder="Enter Volume">
                  </div>
                  <div class="form-group">
                    <label>Gross Weight</label>
                    <input name="gross_weight" type="text" value="<?php echo $row[33];?>" class="form-control" placeholder="Enter Gross Weight">
                  </div>
                  <div class="form-group">
                    <label>Net Weight</label>
                    <input name="net_weight" type="text" value="<?php echo $row[34];?>" class="form-control" placeholder="Enter Net Weight">
                  </div>
                  <div class="form-group">
                    <label>Agree Rate with Consignee</label>
                    <input name="agreed_rate" type="text" value="<?php echo $row[35];?>" class="form-control" placeholder="Enter Agree Rate with Consignee">
                  </div>
                  <div class="form-group">
                    <label>Exwork</label>
                    <input name="exwork" type="number" value="<?php echo $row[36];?>" class="form-control" placeholder="Enter Exwork">
                  </div>
                  <div class="form-group">
                    <label>Ocean Freight</label>
                    <input name="ocean_freight" type="number" value="<?php echo $row[37];?>" class="form-control" placeholder="Enter Ocean Freight">
                  </div>
                  <div class="form-group">
                    <label>Bl Courier</label>
                    <input name="bl" type="number" value="<?php echo $row[38];?>" class="form-control" placeholder="Enter Bl Courier">
                  </div>
                  <div class="form-group">
                    <label>Delivery Order</label>
                    <input name="do" type="number" value="<?php echo $row[39];?>" class="form-control" placeholder="Enter Delivery Order">
                  </div>
                  <div class="form-group">
                    <label>Thc</label>
                    <input name="thc" type="number" value="<?php echo $row[40];?>" class="form-control" placeholder="Enter Thc">
                  </div>
                  <div class="form-group">
                    <label>Round Amount</label>
                    <input name="round_amount" type="number" value="<?php echo $row[41];?>" class="form-control" placeholder="Enter Round Amount">
                  </div>
                  <!-- <div class="form-group">
                    <label>Total </label>
                    <input name="total_selling" type="number" class="form-control" readonly>
                  </div> -->
                  <div class="form-group">
                    <label>Agree Rate with Co-Loader</label>
                    <input name="agree_rate_coloader" type="text" value="<?php echo $row[42];?>" class="form-control" placeholder="Enter Agree Rate with Co-Loader">
                  </div>
                  <div class="form-group">
                    <label>D/N</label>
                    <input name="dn_charges" type="number" value="<?php echo $row[43];?>" class="form-control" placeholder="Enter D/N">
                  </div>
                  <div class="form-group">
                    <label>Ocean Freight Charges</label>
                    <input name="of_charges" type="number" value="<?php echo $row[44];?>" class="form-control" placeholder="Enter Ocean Freight">
                  </div>
                  <div class="form-group">
                    <label>Thc</label>
                    <input name="thc_coloader" type="number" value="<?php echo $row[45];?>" class="form-control" placeholder="Enter Thc">
                  </div>
                  <div class="form-group">
                    <label>Documentation Charges</label>
                    <input name="docs_charges" type="number" value="<?php echo $row[46];?>" class="form-control" placeholder="Enter Documentation Charges">
                  </div>
                  <!-- <div class="form-group">
                    <label>Total Co-Loader Charges</label>
                    <input type="number" class="form-control" readonly>
                  </div> -->
                  <div class="form-group">
                    <label>Net Profit</label>
                    <input name="net_profit" value="<?php echo $row[47];?>" type="number" class="form-control">
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
