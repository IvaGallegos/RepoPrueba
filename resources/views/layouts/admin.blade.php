<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FERREMAS | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="/public/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="data:image/png;base64,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" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">FERREMAS SA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Almacen
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Productos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categorías</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Compras
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ingresos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Proveedores</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Ventas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Icons</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Seguridad
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Reporteria
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ventas x Día</p>
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @yield('contenido')
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2024 <a href="https://ticsacorporativo.com/">FERREMAS'SA</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 2.1.0
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
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/plugins/moment/moment.min.js"></script>
<script src="/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/dist/js/pages/dashboard.js"></script>
</body>
</html>
