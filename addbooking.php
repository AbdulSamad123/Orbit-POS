<?php 
include "connection.php";
$obj=new functions();
$obj->con();
if(isset($_POST['sub']))
{
	$obj->add_booking($_POST['shipper'],$_POST['client'],$_POST['consignee'],$_POST['pol'],$_POST['pod'],$_POST['cutt'],$_POST['etd'],$_POST['eta'],$_POST['vessel'],$_POST['voyage'],$_POST['coloader'],$_POST['agent'],$_POST['buying'],$_POST['selling'],$_POST['roe'],$_POST['currency'],$_POST['profit'],$_POST['mode'],$_POST['sales_person'],$_POST['yard'],$_POST['con_num'],$_POST['mbl_telex'],$_POST['hbl_telex'],$_POST['submission_manifest'],$_POST['arrival_notice'],$_POST['do'],$_POST['type'],$_POST['hbl_no'],$_POST['mbl_no'],$_POST['volume'],$_POST['gross'],$_POST['net'],$_POST['agreed_rate'],$_POST['exwork'],$_POST['of'],$_POST['bl'],$_POST['do_charges'],$_POST['thc'],$_POST['round'],$_POST['coloader_rate'],$_POST['dn'],$_POST['of_charges'],$_POST['agree_thc'],$_POST['doc_charges'],$_POST['netprofit']);
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
                <i class="far fa-eye nav-icon"> View Booking</i>                    
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
                    <label for="cars">Shipper</label>
                    <select name="shipper" type="text" id="choseshipper" class="form-control">
                        <option value="0">Select Shipper</option>
                        <?php $obj->shipper();?>
                    </select>
                  </div>  
                  <div class="form-group">
                    <label for="cars">Client</label>
                    <select name="client" type="text" id="choseclient" class="form-control">
                      <option value="0">Select Client</option>
                      <?php $obj->client();?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="cars">Consignee</label>
                    <select name="consignee" type="text" id="choseconsignee" class="form-control">
                       <option value="0">Select Consignee</option>
                        <?php $obj->consignee();?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="cars">Port of Loading</label>
                    <select name="pol" type="text" id="chosepol" class="form-control">
                        <option value="0">Select Pol</option>
                        <?php $obj->pol();?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="cars">Port of Discharge</label>
                    <select name="pod" type="text" id="chosepod" class="form-control">
                      <option value="0">Select Pod</option>
                      <?php $obj->pod();?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Expected time cutt of</label>
                    <input name="cutt" type="date" class="form-control" placeholder="Enter pod">
                  </div>
                  <div class="form-group">
                    <label>Expected time departure</label>
                    <input name="etd" type="date" class="form-control" placeholder="Enter pod">
                  </div>
                  <div class="form-group">
                    <label>Expected time arrival</label>
                    <input name="eta" type="date" class="form-control" placeholder="Enter pod">
                  </div>
                  <div class="form-group">
                    <label>Vessel</label>
                    <input name="vessel" type="text" class="form-control" placeholder="Enter Vessel">
                  </div>
                  <div class="form-group">
                    <label>Voyage</label>
                    <input name="voyage" type="text" class="form-control" placeholder="Enter voyage">
                  </div>
                  <div class="form-group">
                    <label for="cars">Co Loader</label>
                    <select name="coloader" type="text" id="chosecoloader" class="form-control">
                        <option value="0">Select CoLoader</option>
                        <?php $obj->coloader();?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="cars">Agent</label>
                    <select name="agent" type="text" id="choseagent" class="form-control">
                       <option value="0">Select Agent</option>
                       <?php $obj->agent();?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>buying</label>
                    <input name="buying" type="text" class="form-control" placeholder="Enter buying">
                  </div>
                  <div class="form-group">
                    <label>Selling</label>
                    <input name="selling" type="text" class="form-control" placeholder="Enter selling">
                  </div>
                  <div class="form-group">
                    <label>R.O.E</label>
                    <input name="roe" type="text" class="form-control" placeholder="Enter rate of exchange">
                  </div>
                  <div class="form-group">
                    <label for="cars">Currency</label>
                    <select name="currency" type="text" id="chosecurrency" class="form-control">
                      <option value="0">Select Currency</option>
                      <?php $obj->currency();?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Profit Margin</label>
                    <input name="profit" type="text" class="form-control" placeholder="Enter Margin">
                  </div>
                  <div class="form-group">
                    <label for="cars">Shipping Mode</label>
                    <select name="mode" type="text" class="form-control" id="cars" name="cars">
                      <option value="0">Select Mode</option>
                      <option value="air">By Air</option>
                      <option value="sea">By Sea</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Sales Person</label>
                    <input name="sales_person" type="text" class="form-control" placeholder="Enter Sales Person">
                  </div>
                  <div class="form-group">
                    <label>Destuffing Yard</label>
                    <input name="yard" type="text" class="form-control" placeholder="Enter Destuffing Yard">
                  </div>
                  <div class="form-group">
                    <label>Container Number</label>
                    <input name="con_num" type="text" class="form-control" placeholder="Enter Container Number">
                  </div>
                  <div class="form-group">
                    <label>Mbl Telex Release</label>
                    <input name="mbl_telex" type="text" class="form-control" placeholder="Enter Mbl Telex Release">
                  </div>
                  <div class="form-group">
                    <label>Hbl Telex Release</label>
                    <input name="hbl_telex" type="text" class="form-control" placeholder="Enter Hbl Telex Release">
                  </div>
                  <div class="form-group">
                    <label>Submission of Manifest to Line</label>
                    <input name="submission_manifest" type="text" class="form-control" placeholder="Enter Submission of Manifest">
                  </div>
                  <div class="form-group">
                    <label>Arrival Notice to Consignee</label>
                    <input name="arrival_notice" type="text" class="form-control" placeholder="Enter Arrival Notice">
                  </div>
                  <div class="form-group">
                    <label>Collection of D/o by Consignee</label>
                    <input name="do" type="text" class="form-control" placeholder="Enter Collection of D/o by Consignee">
                  </div>
                  <div class="form-group">
                    <label for="cars">Shipping Type</label>
                    <select name="type" type="text" class="form-control" id="cars" name="cars">
                      <option value="0">Select Type</option>
                      <option value="import">Import</option>
                      <option value="export">Export</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Hbl No</label>
                    <input name="hbl_no" type="text" class="form-control" placeholder="Enter Hbl No">
                  </div>
                  <div class="form-group">
                    <label>Mbl No</label>
                    <input name="mbl_no" type="text" class="form-control" placeholder="Enter Mbl No">
                  </div>
                  <div class="form-group">
                    <label>Volume</label>
                    <input name="volume" type="text" class="form-control" placeholder="Enter Volume">
                  </div>
                  <div class="form-group">
                    <label>Gross Weight</label>
                    <input name="gross" type="text" class="form-control" placeholder="Enter Gross Weight">
                  </div>
                  <div class="form-group">
                    <label>Net Weight</label>
                    <input name="net" type="text" class="form-control" placeholder="Enter Net Weight">
                  </div>
                  <div class="form-group">
                    <label>Agree Rate with Consignee</label>
                    <input name="agreed_rate" type="text" class="form-control" placeholder="Enter Agree Rate with Consignee">
                  </div>
                  <div class="form-group">
                    <label>Exwork</label>
                    <input name="exwork" type="number" class="form-control" placeholder="Enter Exwork">
                  </div>
                  <div class="form-group">
                    <label>Ocean Freight</label>
                    <input name="of" type="number" class="form-control" placeholder="Enter Ocean Freight">
                  </div>
                  <div class="form-group">
                    <label>Bl Courier</label>
                    <input name="bl" type="number" class="form-control" placeholder="Enter Bl Courier">
                  </div>
                  <div class="form-group">
                    <label>Delivery Order</label>
                    <input name="do_charges" type="number" class="form-control" placeholder="Enter Delivery Order">
                  </div>
                  <div class="form-group">
                    <label>Thc</label>
                    <input name="thc" type="number" class="form-control" placeholder="Enter Thc">
                  </div>
                  <div class="form-group">
                    <label>Round Amount</label>
                    <input name="round" type="number" class="form-control" placeholder="Enter Round Amount">
                  </div>
                  <!-- <div class="form-group">
                    <label>Total </label>
                    <input name="total_selling" type="number" class="form-control" readonly>
                  </div> -->
                  <div class="form-group">
                    <label>Agree Rate with Co-Loader</label>
                    <input name="coloader_rate" type="text" class="form-control" placeholder="Enter Agree Rate with Co-Loader">
                  </div>
                  <div class="form-group">
                    <label>D/N</label>
                    <input name="dn" type="number" class="form-control" placeholder="Enter D/N">
                  </div>
                  <div class="form-group">
                    <label>Ocean Freight Charges</label>
                    <input name="of_charges" type="number" class="form-control" placeholder="Enter Ocean Freight">
                  </div>
                  <div class="form-group">
                    <label>Thc</label>
                    <input name="agree_thc" type="number" class="form-control" placeholder="Enter Thc">
                  </div>
                  <div class="form-group">
                    <label>Documentation Charges</label>
                    <input name="doc_charges" type="number" class="form-control" placeholder="Enter Documentation Charges">
                  </div>
                  <!-- <div class="form-group">
                    <label>Total Co-Loader Charges</label>
                    <input type="number" class="form-control" readonly>
                  </div> -->
                  <div class="form-group">
                    <label>Net Profit</label>
                    <input name="netprofit" type="number" class="form-control">
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js" integrity="sha512-rMGGF4wg1R73ehtnxXBt5mbUfN9JUJwbk21KMlnLZDJh7BkPmeovBuddZCENJddHYYMkCh9hPFnPmS9sspki8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" integrity="sha512-yVvxUQV0QESBt1SyZbNJMAwyKvFTLMyXSyBHDO4BG5t7k/Lw34tyqlSDlKIrIENIzCl+RVUNjmCPG+V/GMesRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script>
    $("#choseshipper").chosen();
    $("#choseclient").chosen();
    $("#choseconsignee").chosen();
    $("#chosepol").chosen();
    $("#chosepod").chosen();
    $("#chosecoloader").chosen();
    $("#choseagent").chosen();
    $("#chosecurrency").chosen();
  </script>

  <?php include "./footer.php"; ?>
