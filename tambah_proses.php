<?php

  print_r($_POST);
  exit();

  if(isset($_POST['Tambah'])){

      include 'koneksi.php';

      $nama = $_POST['nama'];
      $umur = $_POST['umur'];
      $jk = $_POST['jk'];

      $input = mysqli_query ($con, "INSERT INTO tbl_sinau (nama, umur, jk) VALUES ('$nama','$umur','$jk')") or die (mysqli_error());

      if($input){
        echo "Tambah data suskses";
      } else {
        echo "Error: ";
      }
  } else {
    echo "array tambah kosong";
  }
 ?>
