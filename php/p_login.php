<?php
require 'koneksi.php';


if ( $_POST["user"]!='' && $_POST["pass"]!='' ) {
  $user = $_POST["user"];
  $sandi = $_POST["pass"];

  $sql = "SELECT fullname, username, email, password, tim, id  FROM tb_user WHERE username='".$user."' or email='".$user."' AND password='".$sandi."'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {


    while($row = mysqli_fetch_assoc($result)) {

      $userDB=$row["email"];
      $sandiDB=$row["password"];



      if ($sandiDB==$sandi) {
        
        setcookie("user_log", $row["username"], time()+3600, "/");
        setcookie("email_log", $row["email"], time()+3600, "/");
        setcookie("pass_log", $row["password"], time()+3600, "/");
        setcookie("name_log", $row["fullname"], time()+3600, "/");
        setcookie("tim_log", $row["tim"], time()+3600, "/");
        setcookie("id_user_log", $row["id"], time()+3600, "/");

        header('location: ../');
        exit();

      } else {

        $login = "login.php";

        header('location: ../pages/'.$login);
      }
      

    }

  } else {

    header('location: ../pages/login.php');

    echo "ssalah";
          exit();
  }
mysqli_close($conn);
} else {
  header('location: ../pages/login.php');
}

?>