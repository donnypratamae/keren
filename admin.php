<?php 
  require_once 'controllers/cek_session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!-- <link rel="shortcut icon" type="image/jpg" href="assets/img/logo.svg" /> -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="assets/ionicons/css/ionicons.css">
  <link rel="stylesheet" href="assets/popper/popper.min.js">
  <link rel="stylesheet" href="assets/pretty-checkbox/dist/pretty-checkbox.css">
  <script src="assets/jquery/jquery-3.6.0.js">
  </script>
  <script src="assets/js/bootstrap.bundle.min.js">
  </script> 
  <title>Halaman Admin</title>
</head>   

<body >
  <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <!-- container untuk menu -->
      <!-- brand -->
      <a href="admin.php" class="navbar-brand">LMS-STMIK_WP</a>
      <!-- Links -->
      <ul class="navbar-nav">
      <li class="nav-item">
          <a href="pages/laporan_cetak.php" class="nav-link">Cetak Laporan</a>
        </li>
        <li class="nav-item">
          <a href="?page=mahasiswa" class="nav-link">Mahasiswa</a>
        </li>
        
      </ul>
      <ul class="navbar-nav ml-auto">
        <!-- dropdown 2 -->
        <li class="nav-item dropdown">
           
            <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown"><?=$_SESSION['realname']?></a>
          <div class="dropdown-menu dropdown-menu-right ">
            <a href="?page=ubah_password" class="dropdown-item"><i class="ion ion-android-create"></i> Ubah Password</a>
            <a href="index.php" class="dropdown-item"><i class="ion ion-android-exit"></i> Log out</a>
          </div>
        </li>
       
      </ul>
  </nav>
  <br>
  <div class="container">
    <?php
    $pg=isset($_GET['page'])?$_GET['page']:'';
    
    if ($pg=="mahasiswa")
     {
        $action=isset($_GET['action'])?$_GET['action']:'';
        if($action =='form_tambah')
        {
          include 'pages/mahasiswa_form.php';
        }
        elseif($action=='simpan')
        {
          require 'controllers/mahasiswa_simpan.php';
        }
        elseif ($action=='hapus') {
          require 'controllers/mahasiswa_hapus.php';
        }
        elseif ($action=='form_ubah') {
          include 'pages/mahasiswa_ubah.php';
        }
        elseif ($action=='ubah') {
          require 'controllers/mahasiswa_simpan_ubah.php';
        }
        else{
          include 'pages/mahasiswa_list.php';
        }
    }
    
    else{
      include 'pages/dashboard.php';
    }
    
    ?>
  </div>

</body>

</html>