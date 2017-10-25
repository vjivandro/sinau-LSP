<?php 

    include 'koneksi.php';

    if ($_GET['id'] == true) {
        
        $id = $_GET['id'];

        $query = "DELETE FROM tbl_sinau WHERE id='$id'";
        $result = mysqli_query($con, $query);

        if($result == false){
            die ("Query Error: ".mysqli_errno($con)." - ".mysqli_error($con));
        } else {
            echo "data berhasil di hapus.";
            echo "<br/>";
            echo '<a href="index.php">back</a>';  
        }

    } else {
        header('index.php');
    }

 ?>