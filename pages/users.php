<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Users</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Profile</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index.html" class="nav-link">Logout</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">XYT Company</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrator</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <i class="nav-icon far fa-list-alt"></i>
              <p>
                Inventory
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <i class="nav-icon fa fa-box-open"></i>
              <p>
                Products
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="suppliers.php" class="nav-link">
              <i class="nav-icon fa fa-truck-loading"></i>
              <p>
                Suppliers
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-chart-line"></i>
              <p>
                Reports 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sales Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inventory Report</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="users.php" class="nav-link active">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Users
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../dashboard.html">Home</a></li>
              <li class="breadcrumb-item active">Users</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">List of Users</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th class="text-center">Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>902121</td>
                    <td>Abdul Salsalani</td>
                    <td>Block 1 Lot 3 Talomo Proper, Davao City</td>
                    <td>abdul321@gmail.com</td>
                    <td class="text-center">
                      <button class="btn btn-info btn-xs">
                        <i class="fa fa-info fa-fw"></i>
                      </button> 
                      <button class="btn btn-success btn-xs">
                        <i class="fa fa-pencil-alt fa-fw"></i>
                      </button>
                      <a href="#" target="_blank" class="btn btn-warning btn-xs">
                        <i class="fa fa-print fa-fw" style="color: white;"></i>
                      </a>   
                      <button class="btn btn-danger btn-xs">
                        <i class="fa fa-trash-alt fa-fw"></i>
                      </button> 
                    </td>
                  </tr>
                  <tr>
                    <td>902121</td>
                    <td>Abdul Salsalani</td>
                    <td>Block 1 Lot 3 Talomo Proper, Davao City</td>
                    <td>abdul321@gmail.com</td>
                    <td class="text-center">
                      <button class="btn btn-info btn-xs">
                        <i class="fa fa-info fa-fw"></i>
                      </button> 
                      <button class="btn btn-success btn-xs">
                        <i class="fa fa-pencil-alt fa-fw"></i>
                      </button>
                      <a href="#" target="_blank" class="btn btn-warning btn-xs">
                        <i class="fa fa-print fa-fw" style="color: white;"></i>
                      </a>   
                      <button class="btn btn-danger btn-xs">
                        <i class="fa fa-trash-alt fa-fw"></i>
                      </button> 
                    </td>
                  </tr>
                  <tr>
                    <td>902121</td>
                    <td>Abdul Salsalani</td>
                    <td>Block 1 Lot 3 Talomo Proper, Davao City</td>
                    <td>abdul321@gmail.com</td>
                    <td class="text-center">
                      <button class="btn btn-info btn-xs">
                        <i class="fa fa-info fa-fw"></i>
                      </button> 
                      <button class="btn btn-success btn-xs">
                        <i class="fa fa-pencil-alt fa-fw"></i>
                      </button>
                      <a href="#" target="_blank" class="btn btn-warning btn-xs">
                        <i class="fa fa-print fa-fw" style="color: white;"></i>
                      </a>   
                      <button class="btn btn-danger btn-xs">
                        <i class="fa fa-trash-alt fa-fw"></i>
                      </button> 
                    </td>
                  </tr>
                  <tr>
                    <td>902121</td>
                    <td>Abdul Salsalani</td>
                    <td>Block 1 Lot 3 Talomo Proper, Davao City</td>
                    <td>abdul321@gmail.com</td>
                    <td class="text-center">
                      <button class="btn btn-info btn-xs">
                        <i class="fa fa-info fa-fw"></i>
                      </button> 
                      <button class="btn btn-success btn-xs">
                        <i class="fa fa-pencil-alt fa-fw"></i>
                      </button>
                      <a href="#" target="_blank" class="btn btn-warning btn-xs">
                        <i class="fa fa-print fa-fw" style="color: white;"></i>
                      </a>   
                      <button class="btn btn-danger btn-xs">
                        <i class="fa fa-trash-alt fa-fw"></i>
                      </button> 
                    </td>
                  </tr>
                  <tr>
                    <td>902121</td>
                    <td>Abdul Salsalani</td>
                    <td>Block 1 Lot 3 Talomo Proper, Davao City</td>
                    <td>abdul321@gmail.com</td>
                    <td class="text-center">
                      <button class="btn btn-info btn-xs">
                        <i class="fa fa-info fa-fw"></i>
                      </button> 
                      <button class="btn btn-success btn-xs">
                        <i class="fa fa-pencil-alt fa-fw"></i>
                      </button>
                      <a href="#" target="_blank" class="btn btn-warning btn-xs">
                        <i class="fa fa-print fa-fw" style="color: white;"></i>
                      </a>   
                      <button class="btn btn-danger btn-xs">
                        <i class="fa fa-trash-alt fa-fw"></i>
                      </button> 
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
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
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.2
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
</body>
</html>
