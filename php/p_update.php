<?php
require 'koneksi.php';


$nik = $_POST["nik"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$tps = $_POST["tps"];
$kel = $_POST["kel"];
$kec = $_POST["kec"];
$amanah = $_POST["amanah"];
$kab_kota = $_POST["kab_kota"];
$phone = $_POST["phone"];
$id = $_POST["id"];

$amanah_get = $_GET['amanah'];
$val_get = $_GET['val'];

  $sql = "UPDATE tb_anggota SET nik='$nik', nama='$nama', amanah='$amanah', alamat='$alamat', rt_rw='$tps', kel='$kel', kec='$kec', kab_kota='$kab_kota', phone='$phone' WHERE id='$id'";

  // $sql = "UPDATE tb_tpp SET jaringan ='$jaringan', nik='$nik', nama='$nama', amanah='$amanah', alamat='$alamat', rt_rw='$tps', kel='$kel', kec='$kec', kab_kota='$kab_kota', phone='$phone' WHERE id='$id'";


//$sql = "UPDATE tb_anggota SET jaringan ='$jaringan', nik='$nik', nama='$nama', amanah='$amanah', alamat='$alamat', rt_rw='$tps', kel='$kel', kec='$kec', kab_kota='$kab_kota', phone='$phone' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  header('location: ../pages/list_all_data.php?amanah='.$amanah_get.'&val='.$val_get);
    exit();

} else {
  echo "Error updating record: " . $conn->error;
  header('location: edit_data.php?kode=$nik');
  exit();
}

  $conn->close();
?>