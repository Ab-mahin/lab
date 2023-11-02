<?php
  session_start();

  include '../config.php';

  $uemail = $_POST['uemail'];
  $upass = $_POST['upass'];
  $uname = $_POST['uname'];
  $uphon = $_POST['uphon'];

  $res = mysqli_query($conn, "SELECT * FROM `customer` WHERE `uemail` = '$uemail';");
  $adm = mysqli_query($conn, "SELECT * FROM `admin` WHERE `aemail` = '$uemail';");

  if(!mysqli_num_rows($res) && !mysqli_num_rows($adm)) {
    mysqli_query($conn, "INSERT INTO `customer` (`uid`, `uemail`, `upass`, `uname`, `uphon`) VALUES (NULL, '$uemail', '$upass', '$uname', '$uphon');");
    $res = mysqli_query($conn, "SELECT * FROM `customer` WHERE `uemail` = '$uemail';");
    $customer = mysqli_fetch_assoc($res);
    $_SESSION['uid'] = $customer['uid'];
    header('location: ../restaurant.php');
    $_SESSION['usedMail'] = 0;
  }
  else{
    header('location: ../signup.php');
    $_SESSION['usedMail'] = 1;
  }

?>