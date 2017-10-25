<?php
  include 'koneksi.php';

  if(isset($_GET['id']))
  {
    $id = ($_GET["id"]);
    $query = "SELECT * FROM tbl_sinau WHERE id='$id'";
    $result = mysqli_query($con, $query);

    if(!$result){
      die ("Query Error: ".mysqli_errno($$con).
         " - ".mysqli_error($$con));
    }

    $data = mysqli_fetch_assoc($result);
    $id = $data['id'];
    $nama = $data['nama'];
    $umur = $data['umur'];
    $jk = $data['jk'];
  } else {
    header ("loaction:index.php");
  }
?>

<html>
  <head>
    <title>Edit</title>
  </head>
  <body>
    <form action="update_proses.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $id ?>">
      Id :<input type="text" name="id" value="<?php echo $id ?>" disabled><br><br>
      Nama :<input type="text" name="nama" value="<?php echo $nama ?>"><br><br>
      Umur :<input type="number" name="umur" value="<?php echo $umur ?>"><br><br>
      JK   :<input type="text" name="jk" value="<?php echo $jk ?>"><br><br>
      <input type="submit" name="Tambah" value="coba">
    </form>
  </body>
</html>
