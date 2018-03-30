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
    $tim_login = $_COOKIE['tim_log'];

    $getfirstName=explode(' ', $full_name);
    $firstName=$getfirstName[0];

    $getStatus = $_GET['status'];
  }

?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tim Pejuang| Entri Data</title>
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

  <link rel="stylesheet" href="../dist/css/autocomplete.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
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
                <div class="pull-right">
                  <a href="akun.php" class="btn btn-default">Profil</a>
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
            <li><a href="../index.php"><i class="fa fa-circle-o"></i> Dashboard Utama</a></li>
            <li><a href="tpb"><i class="fa fa-circle-o"></i> Rincian Data</a></li>
          </ul>
        </li>
        
        <li class="active"><a href="entri_data.php"><i class="fa fa-keyboard-o"></i> <span>Entri Data</span></a></li>
        
        <li class="treeview">
          <a href="list_all_data.php">
            <i class="fa fa-database"></i> <span>List Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../pages/list_all_data.php?amanah=Tim Kabupaten&val"><i class="fa fa-circle-o"></i> Tim Kabupaten</a></li>
            <li><a href="../pages/list_all_data.php?amanah=Koord. Kecamatan&val"><i class="fa fa-circle-o"></i> Koord. Kecamatan</a></li>
            <li><a href="../pages/list_all_data.php?amanah=Koord. Kelurahan/Desa&val"><i class="fa fa-circle-o"></i> Koord. Kelurahan/Desa</a></li>
            <li><a href="../pages/list_all_data.php?amanah=Koord. TPS&val"><i class="fa fa-circle-o"></i> Koord. TPS</a></li>
            <li><a href="../pages/list_all_data.php?amanah=Sekertaris&val"><i class="fa fa-circle-o"></i> Sekertaris</a></li>
            <li><a href="../pages/list_all_data.php?amanah=Bendahara Dan Logistik&val"><i class="fa fa-circle-o"></i> Bendahara Dan Logistik</a></li>
            <li><a href="../pages/list_all_data.php?amanah=Devisi Dakwah&val"><i class="fa fa-circle-o"></i> Devisi Dakwah</a></li>
            <li><a href="../pages/list_all_data.php?amanah=Devisi Relawan&val"><i class="fa fa-circle-o"></i> Devisi Relawan</a></li>
            <li><a href="../pages/list_all_data.php?amanah=Tim Relawan&val"><i class="fa fa-circle-o"></i> Tim Relawan</a></li>
            <li><a href="../pages/list_all_data.php?amanah&val"><i class="fa fa-circle-o"></i> Semua Data</a></li>
          </ul>
        </li>
        <li><a href="akun.php"><i class="fa fa fa-user"></i> <span>Akun Pengguna</span></a></li>
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Entri Data
        <small><?php echo $tim_login; ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Entri Data</li>
      </ol>
    </section>

    <!-- <div class="text-center hidden-xs">
        <img src="gambar/samasama.png">
    </div>

     <div class="hidden-sm hidden-md hidden-lg">
        <img src="gambar/samasama.png" class="img-responsive">
    </div> -->
 

    <!-- Main content -->
   
  <section class="content">

    <?php 

      if ($getStatus == 1) {
        echo '
          <div id="success-alert" class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Perhatian!</strong> Data gagal tersimpan, data yang sama terdeteksi.
          </div>
        ';
      } else if ($getStatus == 2) {
        echo '
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Berhasil!</strong> Data telah tersimpan.
          </div>
        ';
      }

    ?>

      <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Silakan Isi Kolom Dibawah Untuk Menambah Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="../php/p_add.php" method="POST">
              <div class="box-body">

                <div class="col-lg-5">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nik</label>
                    <input type="text" class="form-control" name="nik" id="nik" placeholder="ex : 1172709872488765">
                  </div>  
                </div>
                
                <div class="col-lg-5">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="ex : Fulan" required="">
                  </div>
                </div>

                <div class="col-lg-5">
                  <div class="form-group">
                    <!-- <label for="exampleInputEmail1">Amanah</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> -->
                    <div class="form-group">
                      <label>Amanah</label>
                        <select class="form-control" name="amanah" id="amanah">
                          <option>Tim Kabupaten/Kota</option>
                          <option>Koord. Kecamatan</option>
                          <option>Koord. Kelurahan/desa</option>
                          <option>Koord. TPS</option>
                          <option>Sekertaris</option>
                          <option>Bendahara dan logistik</option>
                          <option>Devisi dakwah</option>
                          <option>Devisi Relawan</option>
                          <option>Tim Relawan</option>
                        </select>
                    </div>
                  </div>  
                </div>
                
                <div class="col-lg-5">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="ex : Jl. tamalanrea BTP Blok M, no 26">
                  </div>
                </div>

                <div class="col-lg-5">
                  <div class="form-group">
                    <label for="exampleInputEmail1">TPS</label>
                    <input type="text" class="form-control" name="rt_rw" id="rt_rw" placeholder="ex : 1">
                  </div>  
                </div>
                
                <div class="col-lg-5">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kelurahan</label>
                    <input type="text" class="form-control" name="kel" id="kel" placeholder="ex : Tamalanrea">
                  </div>
                </div>

                <div class="col-lg-5">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kecamatan</label>
                    <input type="text" class="form-control" name="kec" id="kec" placeholder="ex : Tamalanrea">
                  </div>  
                </div>
                
                <div class="col-lg-5">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kabupaten/Kota</label>
                    <input type="text" class="form-control" name="kab_kota" id="kab_kota" placeholder="Makassar">
                  </div>
                </div>

                <div class="col-lg-5">
                  <div class="form-group">
                    <label for="exampleInputPassword1">HP/Telp</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="082333394411">
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer col-md-12 hidden-xs">
                <button style="width: 100px" type="reset" value="Reset" class="btn btn-warning">Batal</button>
                <button style="width: 100px" type="submit" value="Submit" class="btn btn-success">Simpan</button>
              </div>

              
              <div class="box-footer col-md-13 hidden-md hidden-lg hidden-sm">
                <button type="reset" value="Reset" style="margin-bottom: 5px" class="btn btn-warning col-xs-12">Batal</button>
                <button type="submit" value="Submit" class="btn btn-success col-xs-12">Simpan</button>
              </div>

            </form>
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