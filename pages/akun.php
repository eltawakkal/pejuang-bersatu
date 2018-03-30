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

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tim Pejuang| Profil</title>
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
        Dashboard
        <small>Tim Pejuang Bersatu</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Akun Pengguna</li>
      </ol>
    </section>

    <!-- Main content -->
   
  <section class="content">

    <div class="col-lg-6 col-md-offset-3" style="margin-top: 20px">

      <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Profile Anda</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="../php/p_update_user.php" method="POST">
              <div class="box-body">

                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Lengkap</label>
                    <input value="<?php echo $full_name; ?>" type="text" class="form-control" id="name" name="name" placeholder="ex : Fulan bin fulan">
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pengguna</label>
                    <input value="<?php echo $user_loign; ?>" type="text" class="form-control" id="username" name="username" id="nik" placeholder="ex : fulan">
                  </div>  
                </div>
                
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input value="<?php echo $email_login; ?>" type="text" class="form-control" id="email" name="email" placeholder="ex : fulan@tpb.com" required="">
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input value="<?php echo $pass_login; ?>" type="Password" class="form-control" id="pass" name="pass" placeholder="ex : 123456" data-toggle="password">
                  </div>  
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer col-md-12 hidden-xs">
                <div class="pull-right" style="margin: 15px">
                  <button type="submit" class="btn btn-success">Perbaharui</button>
                </div>
              </div>

              
              <div class="box-footer col-md-13 hidden-md hidden-lg hidden-sm">
                <button type="submit" class="btn btn-success col-xs-12">Perbaharui</button>
              </div>

            </form>
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