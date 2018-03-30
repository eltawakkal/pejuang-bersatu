<?php 

  if (!isset($_COOKIE['user_log']) && $_COOKIE['pass_log'] == '') {
        header('location:login.php');
        exit();
  }else{
    $id_user = $_COOKIE['id_user_log'];
    $user_loign = $_COOKIE['user_log'];
    $email_login = $_COOKIE['email_log'];
    $pass_login = $_COOKIE['pass_log'];
    $full_name = $_COOKIE['name_log'];

    $getfirstName=explode(' ', $full_name);
    $firstName=$getfirstName[0];
  }

  $amanah_print = $_GET['amanah'];
  $kab_print = $_GET['kabkota'];

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tim Pejuang Bersatu (Rekap Data)</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../tpb_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../tpb_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../tpb_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../tpb_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <style type="text/css" media="print">
    .NonPrintable
    {
      display: none;
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini fixed">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b> TPB</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b> Tim Pejuang Bersatu</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

<!-- notificaton bell -->

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $full_name; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $full_name; ?> - Admin
                  <small><?php echo $email_login; ?></small>
                </p>
              </li>
              <!-- Menu Body -->
            
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right" style="margin-left: 10px">
                  <a href="../php/p_logout.php" class="btn btn-danger">Keluar</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $firstName; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php"><i class="fa fa-circle-o"></i> Dashboard Utama</a></li>
            <li><a href="tpb"><i class="fa fa-circle-o"></i> Tim Pejuang Bersatu</a></li>
            <li><a href="tpp"><i class="fa fa-circle-o"></i> Tim Perempuan Pejuang</a></li>
          </ul>
        </li>
        
        <li><a href="entri_data.php"><i class="fa fa-keyboard-o"></i> <span>Entri Data</span></a></li>
        
        <li class="treeview">
          <a href="pages/list_all_data.php">
            <i class="fa fa-database"></i> <span>List Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="list_all_data.php?amanah=Tim Kabupaten&val"><i class="fa fa-circle-o"></i> Tim Kabupaten</a></li>
            <li><a href="list_all_data.php?amanah=Koord. Kecamatan&val"><i class="fa fa-circle-o"></i> Koord. Kecamatan</a></li>
            <li><a href="list_all_data.php?amanah=Koord. Kelurahan/Desa&val"><i class="fa fa-circle-o"></i> Koord. Kelurahan/Desa</a></li>
            <li><a href="list_all_data.php?amanah=Koord. TPS&val"><i class="fa fa-circle-o"></i> Koord. TPS</a></li>
            <li><a href="list_all_data.php?amanah=Sekertaris&val"><i class="fa fa-circle-o"></i> Sekertaris</a></li>
            <li><a href="list_all_data.php?amanah=Bendahara Dan Logistik&val"><i class="fa fa-circle-o"></i> Bendahara Dan Logistik</a></li>
            <li><a href="list_all_data.php?amanah=Devisi Dakwah&val"><i class="fa fa-circle-o"></i> Devisi Dakwah</a></li>
            <li><a href="list_all_data.php?amanah=Devisi Relawan&val"><i class="fa fa-circle-o"></i> Devisi Relawan</a></li>
            <li><a href="list_all_data.php?amanah=Tim Relawan&val"><i class="fa fa-circle-o"></i> Tim Relawan</a></li>
            <li><a href="list_all_data.php?amanah&val"><i class="fa fa-circle-o"></i> Semua Data</a></li>
          </ul>
        </li>
        <li class="active"><a href="#"><i class="fa fa fa-user"></i> <span>Akun Pengguna</span></a></li>
        <li>
          <a href="qq">
            <i class="fa fa fa-line-chart"></i> <span>QQ TPB</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-orange">coming soon!</small>
            </span>
          </a>
        </li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Rincian Dan Cetak
        <small>Laporan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Print prev</li>
      </ol>
    </section>

    <!-- Main content -->
  
    <section class="content">
  <div class="row">


    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
    <button class="btn btn-success btn-xs NonPrintable pull-right" onclick="printHalaman()"><i class="fa fa-print" aria-hidden="true"></i> Cetak</button>
          <h3 class="box-title">Laporan Data Tim Pejuang Bersatu</h3>
        </div>
        <div class="box-body">
          <table class="table table-bordered">
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>Amanah</th>
              <th>TPS</th>
              <th>Kelurahan</th>
              <th>Kecamatan</th>
              <th>Kab/Kota</th>
              <th>Telpon</th>
            
            <?php

              require '../php/koneksi.php';

              $auto_numb=0;

              $sql_korkab = "SElECT * FROM tb_anggota where amanah like '%Kabupaten%' and kab_kota = '$kab_print'";
              $resultKab = mysqli_query($conn, $sql_korkab);
              while ($rowkab = mysqli_fetch_array($resultKab)) {

                $auto_numb++;
                $namakab = $rowkab['nama'];
                $amanahkab = $rowkab['amanah'];
                $tpskab = $rowkab['rt_rw'];
                $kelurahankab = $rowkab['kel'];
                $kecamatankab = $rowkab['kec'];
                $kabkotakab = $rowkab['kab_kota'];
                $teleponkab = $rowkab['phone'];

                echo "
                </tr>
                <td>$auto_numb</td>
                <td>$namakab</td>
                <td>$amanahkab</td>
                <td>$tpskab</td>
                <td>$kelurahankab</td>
                <td>$kecamatankab</td>
                <td>$kabkotakab</td>
                <td>$teleponkab</td>
                </tr>
                ";
              }
              $sql_sek = "SElECT * FROM tb_anggota where amanah like '%Sekertaris%' and kab_kota = '$kab_print'";
              $resultsek = mysqli_query($conn, $sql_sek);
              while ($rowsek = mysqli_fetch_array($resultsek)) {

                $auto_numb++;
                $namasek = $rowsek['nama'];
                $amanahsek = $rowsek['amanah'];
                $tpssek = $rowsek['rt_rw'];
                $kelurahansek = $rowsek['kel'];
                $kecamatansek = $rowsek['kec'];
                $kabkotasek = $rowsek['kab_kota'];
                $teleponsek = $rowsek['phone'];

                echo "
                </tr>
                <td>$auto_numb</td>
                <td>$namasek</td>
                <td>$amanahsek</td>
                <td>$tpssek</td>
                <td>$kelurahansek</td>
                <td>$kecamatansek</td>
                <td>$kabkotasek</td>
                <td>$teleponsek</td>
                </tr>
                ";
              }
              $sql_ben = "SElECT * FROM tb_anggota where amanah like '%Bendahara%' and kab_kota = '$kab_print'";
              $resultben = mysqli_query($conn, $sql_ben);
              while ($rowben = mysqli_fetch_array($resultben)) {

                $auto_numb++;
                $namaben = $rowben['nama'];
                $amanahben = $rowben['amanah'];
                $tpsben = $rowben['rt_rw'];
                $kelurahanben = $rowben['kel'];
                $kecamatanben = $rowben['kec'];
                $kabkotaben = $rowben['kab_kota'];
                $teleponben = $rowben['phone'];

                echo "
                </tr>
                <td>$auto_numb</td>
                <td>$namaben</td>
                <td>$amanahben</td>
                <td>$tpsben</td>
                <td>$kelurahanben</td>
                <td>$kecamatanben</td>
                <td>$kabkotaben</td>
                <td>$teleponben</td>
                </tr>
                ";
              }
              $sql_dak = "SElECT * FROM tb_anggota where amanah like '%Dakwah%' and kab_kota = '$kab_print'";
              $resultdak = mysqli_query($conn, $sql_dak);
              while ($rowdak = mysqli_fetch_array($resultdak)) {

                $auto_numb++;
                $namadak = $rowdak['nama'];
                $amanahdak = $rowdak['amanah'];
                $tpsdak = $rowdak['rt_rw'];
                $kelurahandak = $rowdak['kel'];
                $kecamatandak = $rowdak['kec'];
                $kabkotadak = $rowdak['kab_kota'];
                $telepondak = $rowdak['phone'];

                echo "
                </tr>
                <td>$auto_numb</td>
                <td>$namadak</td>
                <td>$amanahdak</td>
                <td>$tpsdak</td>
                <td>$kelurahandak</td>
                <td>$kecamatandak</td>
                <td>$kabkotadak</td>
                <td>$telepondak</td>
                </tr>
                ";
              }
              $sql_devrel = "SElECT * FROM tb_anggota where amanah like '%devisi relawan%' and kab_kota = '$kab_print'";
              $resultdevrel = mysqli_query($conn, $sql_devrel);
              while ($rowdevrel = mysqli_fetch_array($resultdevrel)) {

                $auto_numb++;
                $namadevrel = $rowdevrel['nama'];
                $amanahdevrel = $rowdevrel['amanah'];
                $tpsdevrel = $rowdevrel['rt_rw'];
                $kelurahandevrel = $rowdevrel['kel'];
                $kecamatandevrel = $rowdevrel['kec'];
                $kabkotadevrel = $rowdevrel['kab_kota'];
                $telepondevrel = $rowdevrel['phone'];

                echo "
                </tr>
                <td>$auto_numb</td>
                <td>$namadevrel</td>
                <td>$amanahdevrel</td>
                <td>$tpsdevrel</td>
                <td>$kelurahandevrel</td>
                <td>$kecamatandevrel</td>
                <td>$kabkotadevrel</td>
                <td>$telepondevrel</td>
                </tr>
                ";
              }
              $sql_kec = "SElECT * FROM tb_anggota where amanah like '%kecamatan%' and kab_kota = '$kab_print'";
              $resultkec = mysqli_query($conn, $sql_kec);
              while ($rowkec = mysqli_fetch_array($resultkec)) {

                $auto_numb++;
                $namakec = $rowkec['nama'];
                $amanahkec = $rowkec['amanah'];
                $tpskec = $rowkec['rt_rw'];
                $kelurahankec = $rowkec['kel'];
                $kecamatankec = $rowkec['kec'];
                $kabkotakec = $rowkec['kab_kota'];
                $teleponkec = $rowkec['phone'];

                echo "
                </tr>
                <td>$auto_numb</td>
                <td>$namakec</td>
                <td>$amanahkec</td>
                <td>$tpskec</td>
                <td>$kelurahankec</td>
                <td>$kecamatankec</td>
                <td>$kabkotakec</td>
                <td>$teleponkec</td>
                </tr>
                ";
              }
              $sql_kel = "SElECT * FROM tb_anggota where amanah like '%kelurahan%' and kab_kota = '$kab_print'";
              $resultkel = mysqli_query($conn, $sql_kel);
              while ($rowkel = mysqli_fetch_array($resultkel)) {

                $auto_numb++;
                $namakel = $rowkel['nama'];
                $amanahkel = $rowkel['amanah'];
                $tpskel = $rowkel['rt_rw'];
                $kelurahankel = $rowkel['kel'];
                $kecamatankel = $rowkel['kec'];
                $kabkotakel = $rowkel['kab_kota'];
                $teleponkel = $rowkel['phone'];

                echo "
                </tr>
                <td>$auto_numb</td>
                <td>$namakel</td>
                <td>$amanahkel</td>
                <td>$tpskel</td>
                <td>$kelurahankel</td>
                <td>$kecamatankel</td>
                <td>$kabkotakel</td>
                <td>$teleponkel</td>
                </tr>
                ";
              }
              $sql = "SElECT * FROM tb_anggota where amanah = 'tim Relawan' and kab_kota = '$kab_print'";
              $result = mysqli_query($conn, $sql);
              while ($row = mysqli_fetch_array($result)) {

                $auto_numb++;
                $nama = $row['nama'];
                $amanah = $row['amanah'];
                $tps = $row['rt_rw'];
                $kelurahan = $row['kel'];
                $kecamatan = $row['kec'];
                $kabkota = $row['kab_kota'];
                $telepon = $row['phone'];

                echo "
                </tr>
                <td>$auto_numb</td>
                <td>$nama</td>
                <td>$amanah</td>
                <td>$tps</td>
                <td>$kelurahan</td>
                <td>$kecamatan</td>
                <td>$kabkota</td>
                <td>$telepon</td>
                </tr>
                ";

              }

              mysqli_close($conn);
            ?>
          </table>  
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.1.0
    </div>
    <strong>Copyright &copy; 2017-2018 <a target="_blank" href="http://pejuangbersatu.com">Tim Pejuang Bersatu</a>.</strong> All rights
    reserved.
  </footer>


<!-- ./wrapper -->

<script>
function printHalaman() {
    window.print();
}
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>

<!-- jQuery 3 -->
<script src="../tpb_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../tpb_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../tpb_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../tpb_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../tpb_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../tpb_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script src="../dist/js/demo.js"></script>
</body>
</html>