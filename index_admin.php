<?php
session_start();
include 'koneksi.php';
if($_SESSION['level']==""){
  header("location:index.php");
}elseif($_SESSION['level']=="1"){
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SISTEM INFORMASI PPDB ONLINE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
      
      <span class="brand-text font-weight-light">PPDB Online</span>
    </a>

    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
            <a href="index_admin.php?p=home" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index_admin.php?p=login" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Login
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index_admin.php?p=status" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
               Status Pendaftaran
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index_admin.php?p=siswa" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Siswa Baru
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <?php
			$pages_dir='pages';
			if(!empty($_GET['p'])){
				$pages=scandir($pages_dir,0);
				unset($pages[0],$pages[1]);
				$p=$_GET['p'];
				if(in_array($p.'.php',$pages)){
					include($pages_dir.'/'.$p.'.php');
				}else{
					echo'Halaman Tidak Ditemukan';
				}
			}else{
				include($pages_dir.'/home.php');
			}
		?>
    <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="">Nisa Agustina</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
       <b>Version</b> 1.1.0
    </div>
  </footer>
  
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/dist/js/adminlte.js"></script>
</body>
</html>
<?php } else{
  header("location:index.php");
} ?>
