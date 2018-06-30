<?php

  require_once "koneksi.php";

  $d=$_GET['d'];

  $con=mysqli_query($koneksi, "delete from customer where id_customer='$d'");

  if ($con) {
    echo "<script>alert('data berhasil dihapus');window.location='../view/datacustomer.php'</script>";
  }else {
    echo "<script>alert('data gagal dihapus');window.location='../view/datacustomer.php'</script>";
  }
 ?>
