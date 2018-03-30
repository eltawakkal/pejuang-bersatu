<?php 

  if (!isset($_COOKIE['user_log']) && $_COOKIE['pass_log'] == '') {
        header('location:pages/login.php');
        exit();
  }else{
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
  <title>Tim Pejuang| Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="tpb_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="tpb_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="tpb_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="tpb_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="tpb_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="tpb_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="tpb_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

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


<?php
    require 'php/koneksi.php';

    $sql= "SELECT count(*) as total from tb_anggota where amanah != 'Tim Relawan'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);

    $sql1= "SELECT count(*) as total from tb_tpp";
    $result1 = mysqli_query($conn, $sql1);
    $data1 = mysqli_fetch_assoc($result1);

    $sql2= "SELECT count(*) as total from tb_anggota where amanah = 'Tim Relawan'";
    $result2 = mysqli_query($conn, $sql2);
    $data2 = mysqli_fetch_assoc($result2);

    // semua data tim Kabupaten

    $sql= "SELECT (SELECT count(*) from tb_tpp where amanah like '%Kabupaten%') as total, (SELECT count(*) from tb_anggota where amanah like '%Kabupaten%') as total1";
    $result3 = mysqli_query($conn, $sql);
    $data3 = mysqli_fetch_assoc($result3);
    $totalAllKab = $data3['total'] + $data3['total1'];
    $timKabAll = ($totalAllKab/10000)*100;
    $timKabAllPercent = round($timKabAll, 2);

    // ===============

    $sql= "SELECT (SELECT count(*) from tb_anggota where amanah = 'Koord. Kecamatan') AS total, (SELECT count(*) from tb_tpp where amanah = 'Koord. Kecamatan') as total1";
    $result4 = mysqli_query($conn, $sql);
    $data4 = mysqli_fetch_assoc($result4);
    $totalAllKec = $data4['total'] + $data4['total1'];
    $korKecAll = ($totalAllKec/10000)*100;
    $korKecPercent = round($korKecAll, 2);

    $sql= "SELECT (SELECT count(*) from tb_anggota where amanah = 'Koord. Kelurahan/Desa') as total, (SELECT count(*) from tb_tpp where amanah = 'Koord. Kelurahan/Desa') as total1";
    $result5 = mysqli_query($conn, $sql);
    $data5 = mysqli_fetch_assoc($result5);
    $totalAllKel = $data5['total'] + $data5['total1'];
    $korKelAll = ($totalAllKel/10000)*100;
    $korKelPercent = round($korKelAll, 2);

    $sql= "SELECT (SELECT count(*) from tb_anggota where amanah = 'Koord. TPS') as total, (SELECT count(*) from tb_tpp where amanah = 'Koord. TPS') as total1";
    $result6 = mysqli_query($conn, $sql);
    $data6 = mysqli_fetch_assoc($result6);
    $totalAllTps = $data6['total'] + $data6['total1'];
    $korTpsAll = ($totalAllTps/10000)*100;
    $korTpsPercent = round($korTpsAll, 2);
    
?>
  
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
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
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $full_name; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $full_name; ?> - Admin
                  <small><?php echo $email_login; ?></small>
                </p>
              </li>
              <!-- Menu Body -->
            
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right" style="margin-left: 10px">
                  <a href="php/p_logout.php" class="btn btn-danger">Keluar</a>
                </div>
                <div class="pull-right">
                  <a href="pages/akun.php" class="btn btn-default">Profil</a>
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
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.php"><i class="fa fa-circle-o"></i> Dashboard Utama</a></li>
            <li><a href="pages/tpb"><i class="fa fa-circle-o"></i> Tim Pejuang Bersatu</a></li>
            <li><a href="pages/tpp"><i class="fa fa-circle-o"></i> Tim Perempuan Pejuang</a></li>
          </ul>
        </li>
        
        <!-- <li><a href="pages/entri_data.php"><i class="fa fa-keyboard-o"></i> <span>Entri Data</span></a></li> -->
        
        <li class="treeview">
          <a href="pages/list_all_data.php">
            <i class="fa fa-database" disabled></i> <span>List Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="./pages/list_all_data.php?amanah=Tim Kabupaten&val"><i class="fa fa-circle-o"></i> Tim Kabupaten</a></li>
            <li><a href="./pages/list_all_data.php?amanah=Koord. Kecamatan&val"><i class="fa fa-circle-o"></i> Koord. Kecamatan</a></li>
            <li><a href="./pages/list_all_data.php?amanah=Koord. Kelurahan/Desa&val"><i class="fa fa-circle-o"></i> Koord. Kelurahan/Desa</a></li>
            <li><a href="./pages/list_all_data.php?amanah=Koord. TPS&val"><i class="fa fa-circle-o"></i> Koord. TPS</a></li>
            <li><a href="./pages/list_all_data.php?amanah=Sekertaris&val"><i class="fa fa-circle-o"></i> Sekertaris</a></li>
            <li><a href="./pages/list_all_data.php?amanah=Bendahara Dan Logistik&val"><i class="fa fa-circle-o"></i> Bendahara Dan Logistik</a></li>
            <li><a href="./pages/list_all_data.php?amanah=Devisi Dakwah&val"><i class="fa fa-circle-o"></i> Devisi Dakwah</a></li>
            <li><a href="./pages/list_all_data.php?amanah=Devisi Relawan&val"><i class="fa fa-circle-o"></i> Devisi Relawan</a></li>
            <li><a href="./pages/list_all_data.php?amanah=Tim Relawan&val"><i class="fa fa-circle-o"></i> Tim Relawan</a></li>
            <li><a href="./pages/list_all_data.php?amanah&val"><i class="fa fa-circle-o"></i> Semua Data</a></li>
          </ul>
        </li>
        <li><a href="pages/akun.php"><i class="fa fa fa-user"></i> <span>Akun Pengguna</span></a></li>
        <li>
          <a href="pages/qq">
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
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
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


      <!-- graph perkembangan -->
      <div class="box box-solid">
            <div class="box-header">
              <i class="fa fa-th"></i>

              <h3 class="box-title">Perkembangan</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <!-- <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button> -->
              </div>
            </div>
            
            <!-- /.box-body -->
            <div class="box-footer no-border">
              <div class="row">
                <div class="col-xs-12 col-md-3 text-center" style="border-right: 1px solid #f4f4f4">
                  <input type="text" class="knob" data-readonly="true" value="<?php echo($timKabAllPercent); ?>" data-width="150" data-height="150"
                         data-fgColor="#39CCCC">

                  <div class="">
                    <h3>Tim Kabupaten</h3>
                    <h4><?php echo $totalAllKab ?>/10000</h4>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-xs-12 col-md-3 text-center" style="border-right: 1px solid #f4f4f4">
                  <input type="text" class="knob" data-readonly="true" value="<?php echo($korKecPercent); ?>" data-width="150" data-height="150"
                         data-fgColor="#39CCCC">

                  <div class="">
                    <h3>Kor. Kecamatan</h3>
                    <h4>10000/10000</h4>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-xs-12 col-md-3 text-center" style="border-right: 1px solid #f4f4f4">
                  <input type="text" class="knob" data-readonly="true" value="<?php echo($korKelPercent); ?>" data-width="150" data-height="150"
                         data-fgColor="#39CCCC">

                  <div class="">
                    <h3>Kor. Kelurahan/Desa</h3>
                    <h4><?php echo $totalAllKel ?>/10000</h4>
                  </div>
                </div>

                <div class="col-xs-12 col-md-3 text-center">
                  <input type="text" class="knob" data-readonly="true" value="<?php echo($korTpsPercent); ?>" data-width="150" data-height="150"
                         data-fgColor="#39CCCC">

                  <div class="">
                    <h3>Kor. TPS</h3>
                    <h4><?php echo $totalAllTps ?>/10000</h4>
                  </div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->

      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $data['total']; ?></h3>

              <p>Tim Pejuang Bersatu</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="pages/tpb" class="small-box-footer">Info lengkap <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $data1['total']; ?></h3>

              <p>Tim Perempuan Pejuang</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="pages/tpp" class="small-box-footer">Info lengkap <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-12">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $data2['total']; ?></h3>

              <p>Tim Relawan</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="pages/list_all_data.php?amanah=Tim Relawan&val" class="small-box-footer">Info lengkap <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

<!-- chart for 24 kab -->




<!-- chart for 24 kab -->
      
      <!-- Main row -->

      <!-- /.row (main row) -->
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
<script src="tpb_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="tpb_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="tpb_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="tpb_components/raphael/raphael.min.js"></script>
<script src="tpb_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="tpb_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="tpb_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="tpb_components/moment/min/moment.min.js"></script>
<script src="tpb_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="tpb_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="tpb_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="tpb_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<!-- <script>
  var ctxL = document.getElementById("lineChart").getContext('2d');
  var myLineChart = new Chart(ctxL, {
      type: 'line',
      data: {
          labels: ["January", "February", "March", "April", "May", "June", "July"],
          datasets: [
              {
                  label: "My First dataset",
                  fillColor: "rgba(220,220,220,0.2)",
                  strokeColor: "rgba(220,220,220,1)",
                  pointColor: "rgba(220,220,220,1)",
                  pointStrokeColor: "#fff",
                  pointHighlightFill: "#fff",
                  pointHighlightStroke: "rgba(220,220,220,1)",
                  data: [65, 59, 80, 81, 56, 55, 40]
              },
              {
                  label: "My Second dataset",
                  fillColor: "rgba(151,187,205,0.2)",
                  strokeColor: "rgba(151,187,205,1)",
                  pointColor: "rgba(151,187,205,1)",
                  pointStrokeColor: "#fff",
                  pointHighlightFill: "#fff",
                  pointHighlightStroke: "rgba(151,187,205,1)",
                  data: [28, 48, 40, 19, 86, 27, 90]
              }
          ]
      },
      options: {
          responsive: true
      }    
  });
</script> -->

</body>
</html>