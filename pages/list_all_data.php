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
  
  $amanah_get = $_GET['amanah'];
  $nlai = $_GET['val'];

  $tb_request="";
  $sub_title_list="";

  if ($nlai=="1") {
    $tb_request="tb_anggota";
    $sub_title_list="Tim Pejuang Bersatu";
  } else if ($nlai=="2") {
    $tb_request="tb_tpp";
    $sub_title_list="Tim Perempuan Pejuang";
  } else {
    $sub_title_list="Keseluruhan Data";
  }

  $id_member_row="123";

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tim Pejuang| List Data</title>
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
            <li><a href="tpb"><i class="fa fa-circle-o"></i> Tim Pejuang Bersatu</a></li>
            <li><a href="tpp"><i class="fa fa-circle-o"></i> Tim Perempuan Pejuang</a></li>
          </ul>
        </li>
        
        <li><a href="entri_data.php"><i class="fa fa-keyboard-o"></i> <span>Entri Data</span></a></li>
        
        <li class="treeview active">
          <a href="list_all_data.php">
            <i class="fa fa-database"></i> <span>List Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../pages/list_all_data.php?amanah=Kabupaten&val=<?php echo $nlai; ?>"><i class="fa fa-circle-o"></i> Tim Kabupaten</a></li>
            <li><a href="../pages/list_all_data.php?amanah=Koord. Kecamatan&val=<?php echo $nlai; ?>"><i class="fa fa-circle-o"></i> Koord. Kecamatan</a></li>
            <li><a href="../pages/list_all_data.php?amanah=Koord. Kelurahan/Desa&val=<?php echo $nlai; ?>"><i class="fa fa-circle-o"></i> Koord. Kelurahan/Desa</a></li>
            <li><a href="../pages/list_all_data.php?amanah=Koord. TPS&val=<?php echo $nlai; ?>"><i class="fa fa-circle-o"></i> Koord. TPS</a></li>
            <li><a href="../pages/list_all_data.php?amanah=Sekertaris&val=<?php echo $nlai; ?>"><i class="fa fa-circle-o"></i> Sekertaris</a></li>
            <li><a href="../pages/list_all_data.php?amanah=Bendahara Dan Logistik&val=<?php echo $nlai; ?>"><i class="fa fa-circle-o"></i> Bendahara Dan Logistik</a></li>
            <li><a href="../pages/list_all_data.php?amanah=Devisi Dakwah&val=<?php echo $nlai; ?>"><i class="fa fa-circle-o"></i> Devisi Dakwah</a></li>
            <li><a href="../pages/list_all_data.php?amanah=Devisi Relawan&val=<?php echo $nlai; ?>"><i class="fa fa-circle-o"></i> Devisi Relawan</a></li>
            <li><a href="../pages/list_all_data.php?amanah=Tim Relawan&val=<?php echo $nlai; ?>"><i class="fa fa-circle-o"></i> Tim Relawan</a></li>
            <li><a href="../pages/list_all_data.php?amanah=&val=<?php echo $nlai; ?>"><i class="fa fa-circle-o"></i> Semua Data</a></li>
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

<!-- Button trigger modal -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        List Data
        <small><?php 
          if ($amanah_get=="") {
            echo "Semua Data";
          } else {
            echo $amanah_get; 
          }?>   
          </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>List Data</li>
        <li class="active"><?php echo $sub_title_list; ?></li>
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
      <div class="row hidden-xs hidden-sm">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <a href="../print_page.php?amanah=&kabkota='.$listKota[$i].'" target="_blank"><input type="button" class="btn-success pull-right" value="Selengkapnya & Cetak"></input></a>
              <h3 class="box-title">List Data <font color="#358eb8"><?php echo $sub_title_list; ?></font></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table style="padding: " id="listTable1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <!-- <th>No</th> -->
                    <th>Nama</th>
                    <th>Amanah</th>
                    <th>Tps</th>
                    <th>Kelurahan</th>
                    <th>Kecamatan</th>
                    <th>Kab/Kota</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                    // include_once '../php/Crud.php';

                    // $crud = new Crud();
                    // $hasilAll = $crud->showAllData();

                    // foreach ($hasilAll as $key => $value) {
                    //   echo "

                    //   <tr>
                    //     <td>". $value['nama'] ."</td>
                    //     <td>". $value['amanah'] ."</td>
                    //     <td>". $value['rt_rw'] ."</td>
                    //     <td>". $value['kel'] ."</td>
                    //     <td>". $value['kec'] ."</td>
                    //     <td>". $value['kab_kota'] ."</td>
                    //     <td>". $value['phone'] ."</td>
                    //   </tr>

                    //   "; 
                    // }
                    require '../php/koneksi.php';

                    if ($tb_request!="") {
                      # code...
                    
                      $sql = "SELECT * FROM ".$tb_request." where amanah like '%". $amanah_get ."%'";
                    } else {
                      $sql = "SELECT * FROM tb_anggota where amanah like '%". $amanah_get ."%' UNION SELECT * FROM tb_tpp where amanah like '%". $amanah_get ."%'";
                    }           
                    $result = mysqli_query($conn, $sql);
                    $autoNumb=0;
                    $id_member_delete = array();

                    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                    while($test = mysqli_fetch_array($result)){
                        echo "<tr>";
                                    
                        $id_member=$test['id']; 

                        $id_member_delete[$autoNumb] = $test['id'];
                        $autoNumb+=1;

                        // echo"<td>".$autoNumb."</td>";
                        // echo"<td>".$test['nik']."</td>";
                        echo"<td>".$test['nama']."</td>";
                        echo"<td>".$test['amanah']."</td>";
                  //    echo"<td>".$test['alamat']."</td>";
                        echo"<td>".$test['rt_rw']."</td>";
                        echo "<td>".$test['kel']."</td>";
                        echo"<td>".$test['kec']."</td>";
                        echo"<td>".$test['kab_kota']."</td>";
                        echo"<td>".$test['phone']."</td>";

                        echo "<td class='text-center'>";
                        // edit data
                          echo '<a style="padding:5px" href="../pages/edit_data.php?result='.$id_member.'&amanah='.$amanah_get.'&val='.$nlai.'"><i class="fa fa-pencil"></i></a>';
                          echo '<a onClick="return confirm()" style="padding:5px" href="../php/p_delete.php?result='.$id_member.'&amanah='.$amanah_get.'&val='.$nlai.'"><i class="fa fa-trash-o"></i></a>';
                        echo "</td>";

                        echo "</tr>";

                      }

                      mysqli_close($conn);
                  ?>
                </tbody>

                <tfoot>
                  <tr>
                    <!-- <th>No</th> -->
                    <th>Nama</th>
                    <th>Amanah</th>
                    <th>Tps</th>
                    <th>Kelurahan</th>
                    <th>Kecamatan</th>
                    <th>Kab/Kota</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>


      <!-- small screen data table -->

       <section class="content">      
      <div class="row hidden-ms hidden-lg">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">List Data <font color="#358eb8"><?php echo $sub_title_list; ?></font></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table style="padding: " id="listTable1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <!-- <th>No</th> -->
                    <th>Nama</th>
                    <th>Tps</th>
                    <th>Kelurahan</th>
                    <th>Kecamatan</th>
                    <th>Kab/Kota</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    require '../php/koneksi.php';

                    if ($tb_request!="") {
                      # code...
                    
                      $sql = "SELECT * FROM ".$tb_request." where amanah like '%". $amanah_get ."%'";
                    } else {
                      $sql = "SELECT * FROM tb_anggota where amanah like '%". $amanah_get ."%' UNION SELECT * FROM tb_tpp where amanah like '%". $amanah_get ."%'";
                    }           
                    $result = mysqli_query($conn, $sql);
                    $autoNumb=0;
                    $id_member_delete = array();

                    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                    while($test = mysqli_fetch_array($result)){
                        echo "<tr>";
                                    
                        $id_member=$test['id']; 

                        $id_member_delete[$autoNumb] = $test['id'];
                        $autoNumb+=1;

                        echo"<td>".$test['nama']."</td>";
                        echo"<td>".$test['rt_rw']."</td>";
                        echo "<td>".$test['kel']."</td>";
                        echo"<td>".$test['kec']."</td>";
                        echo"<td>".$test['kab_kota']."</td>";

                        echo "<td class='text-center'>";
                        // edit data
                          echo '<a style="padding:5px" href="../pages/edit_data.php?result='.$id_member.'&amanah='.$amanah_get.'&val='.$nlai.'"><i class="fa fa-pencil"></i></a>';
                          echo '<a class="confirmationDelete" style="padding:5px" href="../php/p_delete.php?result='.$id_member.'&amanah='.$amanah_get.'&val='.$nlai.'"><i class="fa fa-trash-o"></i></a>';
                        echo "</td>";

                        echo "</tr>";

                      }

                      mysqli_close($conn);
                  ?>
                </tbody>



                <tfoot>
                  <tr>
                    <!-- <th>No</th> -->
                    <th>Nama</th>
                    <th>Tps</th>
                    <th>Kelurahan</th>
                    <th>Kecamatan</th>
                    <th>Kab/Kota</th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

      <!-- small screen data table end -->



      <!-- <div class="box container hidden-lg hidden-md">
        <div class="box-header">
          <h3 class="box-title">List Data <small><?php echo $sub_title_list; ?></small></h3>
        </div>

        <div class="box-body no-padding">
          <table class="table table-condensed">
            <tr>
              <th style="width: 10px">#</th>
              <th>Nama</th>
              <th>Kelurahan</th>
              <th>Kecamatan</th>
              <th>Kab/Kota</th>
              <th>TPS</th>
              <th>Aksi</th>
            </tr> -->

            <!-- <?php 

                  
              // require '../php/koneksi.php';

              // if ($tb_request!="") {
              //   $sql = "SELECT * FROM ".$tb_request." where amanah like '%". $amanah_get ."%'";
              // } else {
              //   $sql = "SELECT * FROM tb_anggota where amanah like '%". $amanah_get ."%' UNION SELECT * FROM tb_tpp where amanah like '%". $amanah_get ."%'";
              // }   

              // $result = mysqli_query($conn, $sql);
              // $autoNumb=0;

              // while($test = mysqli_fetch_array($result)){
                                      
              //   $id_member=$test['id'];           
              //   $autoNumb+=1;

              //   echo

              //   '<tr>
              //     <td>'.$autoNumb.'</td>
              //     <td>'.$test['nama'].'</td>
              //     <td>'.$test['amanah'].'</td>
              //     <td>
              //       <a style="padding:5px" href="../pages/edit_data.php?result='.$id_member.'"><i class="fa fa-pencil"></i></a>
              //       <a data-toggle="modal" data-target="#myModal" style="padding:5px" href="#"><i class="fa fa-trash-o"></i></a>
              //     </td>
              //   </tr>';

                       
              // }
              // mysqli_close($conn);
            ?> -->
          <!-- </table>
        </div>
      </div> -->
      <!-- /.box-body -->


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


<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Hapus data</h4>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin menghapus data ini?</p>
      </div>
      <div class="modal-footer">
        <form action="../php/p_delete.php">
          <input type="text" name="result" value="<?php echo $id_member_row; ?>">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="button submit" class="btn btn-danger">Hapus</button>
        </form>
      </div>
    </div>                          
  </div>
</div>

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
<!-- Data table -->
<script>
  $(function () {
    $('#listTable1').DataTable()
    $('#listTable2').DataTable()
  });
</script>

<script>
  $('#listTable1').dataTable( {
  "search": {
    "caseInsensitive": true
  }
});
</script>

<!-- modal delete -->
<script>
  $('#btnDelete').click(function() {
     $('#modalID').val($('#btnDelete').val());
     // $('#fname').text($('#firstname').val());
});

$('#submit').click(function(){
    alert('submitting');
    $('#formfield').submit();
});
</script>

<script>
function myFunction(result.id) {
    var txt;
    var r = confirm("Press a button!");
    if (r == true) {
        txt = "You pressed OK!";
    } else {
        txt = "You pressed Cancel!";
    }
    document.getElementById("demo").innerHTML = txt;
}
</script>

<script type="text/javascript">
    var elems = document.getElementsByClassName('confirmationDelete');
    var confirmIt = function (e) {
        if (!confirm('Yakin Hapus Data?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>

</body>
</html>