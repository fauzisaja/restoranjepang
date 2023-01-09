<!-- Cek apakah sudah login -->
<?php
  session_start();

  include 'koneksi.php';

  if(!$_SESSION['id_admin']){
    header('location:login.php');
        exit();
  } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sushi Ichiban | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Sushi Ichiban</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Muhammad Fauzi</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item active">
            <a href="" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Admin_list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Menu_list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Pelanggan_list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pelanggan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Data Transaksi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="transaksi_list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Transaksi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="proses_logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out"></i>
              <p>
                Logout
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
            <h1 class="m-0">Data Transaksi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Data Transaksi</li>
              <li class="breadcrumb-item active">Input Detail Transaksi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-list mr-1"></i>
                  Detail Transaksi
                </h3>
                <div class="card-tools">
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <?php
                  $id = $_GET['id_transaksi'];
                  $q = $koneksi->query("SELECT * FROM transaksi, pelanggan, admin 
                    WHERE transaksi.Id_Pelanggan = pelanggan.Id_Pelanggan
                    AND transaksi.Id_Admin = admin.Id_Admin
                    AND Id_Transaksi = $id");
                  $data = $q->fetch_assoc();
                ?>
                <table class="table">
                  <tr>
                    <th>Tanggal</th>
                    <td><?php echo $data['Tanggal'] ?></td>
                  </tr>
                  <tr>
                    <th>Pelanggan</th>
                    <td><?php echo $data['Nama_Pelanggan'] ?></td>
                  </tr>
                  <tr>
                    <th>Admin</th>
                    <td><?php echo $data['Nama_Admin'] ?></td>
                  </tr>
                  <tr>
                    <th>No. Meja</th>
                    <td><?php echo $data['No_Meja'] ?></td>
                  </tr>
                  <tr>
                    <th>Total</th>
                    <td><?php echo $data['Total'] ?></td>
                  </tr>
                </table>
              </div>

              <div class="card-body">
                <table class="table">
                  <tr>
                    <th>No.</th>
                    <th>Menu</th>
                    <th>Qty</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                  </tr>
              <form method ="POST" action="add_detail_action.php">
                <?php
                  $no = 1;
                  $id = $_GET['id_transaksi'];
                  $q = $koneksi->query("SELECT * FROM transaksi, detail_transaksi, menu 
                    WHERE transaksi.Id_Transaksi = detail_transaksi.Id_Transaksi
                    AND menu.Id_Menu = detail_transaksi.Id_Menu 
                    AND detail_transaksi.Id_Transaksi = $id");
                  while($data = $q->fetch_assoc()){ ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $data['Nama_Menu']; ?></td>
                      <td><?php echo $data['Jumlah']; ?></td>
                      <td><?php echo $data['Harga']; ?></td>
                      <td>
                        <a href="delete_detail_action.php?id_transaksi=<?= $data['Id_Transaksi'] ?>&id_menu=<?= $data['Id_Menu']?>"
                        class="btn btn-sm btn-danger" onclick="return confirm('Anda Yakin?')">
                        <i class="fas fa-trash mr-1"></i></a>
                      </td>
                    </tr>
                <?php } ?>
                  <tr>
                      <td colspan="2">
                        <input type="hidden" name="id_transaksi" value="<?php echo $id; ?>">
                        <select name="id_menu" class="form-control">
                        <?php
                          $q = $koneksi->query("SELECT * FROM menu");
                          while($m = $q->fetch_assoc()){ ?>
                          <option value="<?php echo $m['Id_Menu'] ?>">
                            <?php echo $m['Nama_Menu'] ?>
                          </option>
                        <?php } ?>
                        </select>
                      </td>
                      <td>
                        <input type="number" name="jumlah" class="form-control">
                      </td>
                      <td>
                        <input type="number" name="harga" class="form-control">
                      </td>
                      <td>
                        <input type="submit" class="btn btn-sm btn-success" value="+">
                      </td>
                    </tr>
                </table>
              <div class="form-group">
                    <a href="transaksi_list.php" class="btn btn-danger">
                        Kembali
                    </a>
                    </div>
              </form>
              </div>
            </div>
            <!-- /.card -->

            
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
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
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
