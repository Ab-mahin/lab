<?php
    session_start();
    if(!isset($_SESSION['aid'])) {
        header('location: ../../login.php');
    }
    include '../../config.php';

    $rid = $_POST['rid'];
    $res = mysqli_query($conn, "DELETE FROM `reslist` WHERE `rid` = '$rid';");
    header('location: ../admin.php');
?>