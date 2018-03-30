<?php
  require 'koneksi.php';

  $id_user = $_COOKIE["id_user_log"];
  $fullname = $_POST["name"];
  $email = $_POST["email"];
  $username = $_POST["username"];
  $password = $_POST["pass"];


  $sql = "UPDATE tb_user SET fullname ='".$fullname."', email='".$email."', username='".$username."', password='".$password."' WHERE id='".$id_user."'";

  if ($conn->query($sql) === TRUE) {
  
    setcookie("user_log", $username, time()+3600, "/");
    setcookie("email_log", $email, time()+3600, "/");
    setcookie("pass_log", $password, time()+3600, "/");
    setcookie("name_log", $fullname, time()+3600, "/");
    setcookie("id_user_log", $id_user, time()+3600, "/");
      
    header('location: ../pages/akun.php');

    exit();

  } else {
      echo "Error updating record: " . $conn->error;
      header('location: account.php?kode=$nik');
              exit();
  }

  $conn->close();

?>