
<html>
  <head>
    <title>Belajar</title>
  </head>
  <body>
    <h1>Belajar PHP gae LSP</h1>
    <p>Tambahkan data disini <a href="tambah.php">Tambah Data</a></p>
    <?php
      include 'koneksi.php';
      $data = "SELECT * FROM tbl_sinau";
      $result = $con -> query($data);

      echo "<table border = '1'>";
      echo "<tr>";
      echo "<th>Id</th>";
      echo "<th>Nama</th>";
      echo "<th>Umur</th>";
      echo "<th>Jenis kelamin</th>";
      echo "<th>Edit || Delete</th>";
      echo "</tr>";

      if ($result->num_rows > 0) {
        # code...
        while ($row = $result->fetch_assoc()) {
          # code...
          echo "<tr>";
          echo "<td>".$row['id']."</td>";
          echo "<td>".$row['nama']."</td>";
          echo "<td>".$row['umur']."</td>";
          echo "<td>".$row['jk']."</td>";
          echo '<td><a href="edit.php?id='.$row['id'].'">Edit</a>||
              <a href="delete_proses.php?id='.$row['id'].'">Delete</a></td>';
          echo "</tr>";
        }
      } else {
        echo "0 results";
      }
      echo "</table>";


      $con->close();
     ?>
  </body>
</html>
