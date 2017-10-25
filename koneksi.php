<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "belajar";

    // membuat koneksi ke database
    $con = new mysqli ($servername, $username, $password, $dbname);

    // mengetes koneksi berhasil apa tidak
    if (mysqli_connect_errno()) {
      echo 'Koneksi gagal : ' .mysqli_connect_error();
      exit();
      mysqli_close($mysqli);
    } 

?>
