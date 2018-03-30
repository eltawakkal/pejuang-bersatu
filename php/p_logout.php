<?php
 
  setcookie("user_log", "", time()-1, "/");
  setcookie("email_log", "", time()-1, "/");
  setcookie("pass_log", "", time()-1, "/");
  setcookie("name_log", "", time()-1, "/");
  setcookie("id_user_log", "", time()-1, "/");

  header("location: ../pages/login.php");//setelah cookies dihapus maka file login.php akan dipanggil

?>