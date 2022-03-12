<?php include "./header.php"; ?>
<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-sign-out-alt"></i>Logout</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Company Name</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Username</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
            <a href="./index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Shipper
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./addshipper.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Shipper</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./viewshipper.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Shipper</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Consignee
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./addconsignee.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Consignee</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./viewconsignee.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Consignee</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Agent
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./addagent.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Agent</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./viewagent.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Agent</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Client
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./addclient.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Client</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./viewclient.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Client</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Co-loader
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./addcoloader.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Co-loader</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./viewcoloader.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Co-loader</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-money-bill-alt"></i>
              <p>
                Currency
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./addcurrency.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Currency</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./viewcurrency.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Currency</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-ship"></i>
              <p>
                Port of loading
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./addpol.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add pol</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./viewpol.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View pol</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-ship"></i>
              <p>
                Port of discharge
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./addpod.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add pod</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./viewpod.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View pod</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Booking
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./addbooking.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Booking</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./viewbooking.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Booking</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>