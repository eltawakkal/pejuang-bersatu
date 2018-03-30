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

    $amanah_print = $_GET['amanah'];
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

  <style type="text/css" media="print">
    .NonPrintable
    {
      display: none;
    }
  </style>

</head>
<body class="hold-transition skin-blue sidebar-mini fixed">


<!-- main content -->

<section class="content">
  <div class="row">


    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border bg-yellow">
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

              $sql = "SElECT * FROM tb_anggota where amanah like '%". $amanah_print . "%'";
              $result = mysqli_query($conn, $sql);
              $auto_numb=0;

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

<!-- main content -->

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