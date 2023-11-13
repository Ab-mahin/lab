<?php
  session_start();

  include '../config.php';

  $uemail = $_POST['uemail'];
  $upass = $_POST['upass'];

  $res = mysqli_query($conn, "SELECT * FROM `admin` WHERE `aemail` = '$uemail' AND `apass` = '$upass';");

  if(mysqli_num_rows($res)) {
    $customer = mysqli_fetch_assoc($res);
    $_SESSION['aid'] = $customer['aid'];
    header('location: ../admin/admin.php');
  }
  else{
    $res = mysqli_query($conn, "SELECT * FROM `customer` WHERE `uemail` = '$uemail' AND `upass` = '$upass';");

    if(mysqli_num_rows($res)) {
      $customer = mysqli_fetch_assoc($res);
      $_SESSION['uid'] = $customer['uid'];
      header('location: ../restaurant.php');
    }
    else{
      header('location: ../login.php');
    }
  }

  

?>