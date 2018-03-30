<?php
  require 'koneksi.php';

  $id_member = $_GET['result'];

  $amanah_get = $_GET['amanah'];
  $val_get = $_GET['val'];

  $sql = "DELETE FROM tb_anggota WHERE id='$id_member'";

if ($conn->query($sql) === TRUE) {
  header('location: ../pages/list_all_data.php?amanah='.$amanah_get.'&val='.$val_get);
          exit();
  echo "Record deleted successfully";
} else {
  header('location: ../pages/list_all_data.php?amanah&val');
          exit();
  echo "Error deleting record: " . $conn->error;
}

?>