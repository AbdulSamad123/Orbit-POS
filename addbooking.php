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
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="cars">Shipper</label>
                    <select type="text" class="form-control" id="cars" name="cars">
                      <option value="volvo">Volvo</option>
                      <option value="saab">Saab</option>
                      <option value="fiat">Fiat</option>
                      <option value="audi">Audi</option>
                    </select>
                  </div>  
                  <div class="form-group">
                    <label for="cars">Client</label>
                    <select type="text" class="form-control" id="cars" name="cars">
                      <option value="volvo">Volvo</option>
                      <option value="saab">Saab</option>
                      <option value="fiat">Fiat</option>
                      <option value="audi">Audi</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="cars">Consignee</label>
                    <select type="text" class="form-control" id="cars" name="cars">
                      <option value="volvo">Volvo</option>
                      <option value="saab">Saab</option>
                      <option value="fiat">Fiat</option>
                      <option value="audi">Audi</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="cars">Port of Loading</label>
                    <select type="text" class="form-control" id="cars" name="cars">
                      <option value="volvo">Volvo</option>
                      <option value="saab">Saab</option>
                      <option value="fiat">Fiat</option>
                      <option value="audi">Audi</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="cars">Port of Discharge</label>
                    <select type="text" class="form-control" id="cars" name="cars">
                      <option value="volvo">Volvo</option>
                      <option value="saab">Saab</option>
                      <option value="fiat">Fiat</option>
                      <option value="audi">Audi</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Expected time cutt of</label>
                    <input type="date" class="form-control" placeholder="Enter pod">
                  </div>
                  <div class="form-group">
                    <label>Expected time departure</label>
                    <input type="date" class="form-control" placeholder="Enter pod">
                  </div>
                  <div class="form-group">
                    <label>Expected time arrival</label>
                    <input type="date" class="form-control" placeholder="Enter pod">
                  </div>
                  <div class="form-group">
                    <label>Vessel</label>
                    <input type="text" class="form-control" placeholder="Enter Vessel">
                  </div>
                  <div class="form-group">
                    <label>Voyage</label>
                    <input type="text" class="form-control" placeholder="Enter voyage">
                  </div>
                  <div class="form-group">
                    <label for="cars">Co Loader</label>
                    <select type="text" class="form-control" id="cars" name="cars">
                      <option value="volvo">Volvo</option>
                      <option value="saab">Saab</option>
                      <option value="fiat">Fiat</option>
                      <option value="audi">Audi</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="cars">Agent</label>
                    <select type="text" class="form-control" id="cars" name="cars">
                      <option value="volvo">Volvo</option>
                      <option value="saab">Saab</option>
                      <option value="fiat">Fiat</option>
                      <option value="audi">Audi</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>buying</label>
                    <input type="text" class="form-control" placeholder="Enter buying">
                  </div>
                  <div class="form-group">
                    <label>Selling</label>
                    <input type="text" class="form-control" placeholder="Enter selling">
                  </div>
                  <div class="form-group">
                    <label>R.O.E</label>
                    <input type="text" class="form-control" placeholder="Enter rate of exchange">
                  </div>
                  <div class="form-group">
                    <label for="cars">Currency</label>
                    <select type="text" class="form-control" id="cars" name="cars">
                      <option value="volvo">Volvo</option>
                      <option value="saab">Saab</option>
                      <option value="fiat">Fiat</option>
                      <option value="audi">Audi</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Profit Margin</label>
                    <input type="text" class="form-control" placeholder="Enter Margin">
                  </div>
                  <div class="form-group">
                    <label for="cars">Shipping Mode</label>
                    <select type="text" class="form-control" id="cars" name="cars">
                      <option value="volvo">By Air</option>
                      <option value="saab">By Sea</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Sales Person</label>
                    <input type="text" class="form-control" placeholder="Enter Sales Person">
                  </div>
                  <div class="form-group">
                    <label>Destuffing Yard</label>
                    <input type="text" class="form-control" placeholder="Enter Destuffing Yard">
                  </div>
                  <div class="form-group">
                    <label>Container Number</label>
                    <input type="text" class="form-control" placeholder="Enter Container Number">
                  </div>
                  <div class="form-group">
                    <label>Mbl Telex Release</label>
                    <input type="text" class="form-control" placeholder="Enter Mbl Telex Release">
                  </div>
                  <div class="form-group">
                    <label>Hbl Telex Release</label>
                    <input type="text" class="form-control" placeholder="Enter Hbl Telex Release">
                  </div>
                  <div class="form-group">
                    <label>Submission of Manifest to Line</label>
                    <input type="text" class="form-control" placeholder="Enter Submission of Manifest">
                  </div>
                  <div class="form-group">
                    <label>Arrival Notice to Consignee</label>
                    <input type="text" class="form-control" placeholder="Enter Arrival Notice">
                  </div>
                  <div class="form-group">
                    <label>Collection of D/o by Consignee</label>
                    <input type="text" class="form-control" placeholder="Enter Collection of D/o by Consignee">
                  </div>
                  <div class="form-group">
                    <label for="cars">Shipping Type</label>
                    <select type="text" class="form-control" id="cars" name="cars">
                      <option value="volvo">Import</option>
                      <option value="saab">Export</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Hbl No</label>
                    <input type="text" class="form-control" placeholder="Enter Hbl No">
                  </div>
                  <div class="form-group">
                    <label>Mbl No</label>
                    <input type="text" class="form-control" placeholder="Enter Mbl No">
                  </div>
                  <div class="form-group">
                    <label>Volume</label>
                    <input type="text" class="form-control" placeholder="Enter Volume">
                  </div>
                  <div class="form-group">
                    <label>Gross Weight</label>
                    <input type="text" class="form-control" placeholder="Enter Gross Weight">
                  </div>
                  <div class="form-group">
                    <label>Net Weight</label>
                    <input type="text" class="form-control" placeholder="Enter Net Weight">
                  </div>
                  <div class="form-group">
                    <label>Agree Rate with Consignee</label>
                    <input type="text" class="form-control" placeholder="Enter Agree Rate with Consignee">
                  </div>
                  <div class="form-group">
                    <label>Exwork</label>
                    <input type="number" class="form-control" placeholder="Enter Exwork">
                  </div>
                  <div class="form-group">
                    <label>Ocean Freight</label>
                    <input type="number" class="form-control" placeholder="Enter Ocean Freight">
                  </div>
                  <div class="form-group">
                    <label>Bl Courier</label>
                    <input type="number" class="form-control" placeholder="Enter Bl Courier">
                  </div>
                  <div class="form-group">
                    <label>Delivery Order</label>
                    <input type="number" class="form-control" placeholder="Enter Delivery Order">
                  </div>
                  <div class="form-group">
                    <label>Thc</label>
                    <input type="number" class="form-control" placeholder="Enter Thc">
                  </div>
                  <div class="form-group">
                    <label>Round Amount</label>
                    <input type="number" class="form-control" placeholder="Enter Round Amount">
                  </div>
                  <div class="form-group">
                    <label>Total </label>
                    <input type="number" class="form-control" readonly>
                  </div>
                  <div class="form-group">
                    <label>Agree Rate with Co-Loader</label>
                    <input type="text" class="form-control" placeholder="Enter Agree Rate with Co-Loader">
                  </div>
                  <div class="form-group">
                    <label>D/N</label>
                    <input type="number" class="form-control" placeholder="Enter D/N">
                  </div>
                  <div class="form-group">
                    <label>Ocean Freight Charges</label>
                    <input type="number" class="form-control" placeholder="Enter Ocean Freight">
                  </div>
                  <div class="form-group">
                    <label>Thc</label>
                    <input type="number" class="form-control" placeholder="Enter Thc">
                  </div>
                  <div class="form-group">
                    <label>Documentation Charges</label>
                    <input type="number" class="form-control" placeholder="Enter Documentation Charges">
                  </div>
                  <div class="form-group">
                    <label>Total Co-Loader Charges</label>
                    <input type="number" class="form-control" readonly>
                  </div>
                  <div class="form-group">
                    <label>Net Profit</label>
                    <input type="number" class="form-control" readonly>
                  </div>
                                   


                  <!-- <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div> -->
                  
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
