<?php
  include 'koneksi.php';

  if(isset($_POST['id']))
  {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $jk = $_POST['jk'];

    $query = "UPDATE tbl_sinau SET nama='$nama', umur='$umur', jk='$jk'  WHERE id='$id'";
    $result = mysqli_query($con, $query);

    if($result == false){
      die ("Query Error: ".mysqli_errno($con).
         " - ".mysqli_error($con));
    } else {
      echo "data berhasil di perbaruhi.";
      echo "<br/>";
      echo '<a href="index.php">back</a>';
    }

  } else {
    header ("loaction:index.php");
  }
?>
