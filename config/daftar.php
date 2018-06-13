<?php

  require_once "koneksi.php";

  $nama_customer=$_POST['nama_customer'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $no_tlp=$_POST['no_tlp'];

    $con= mysqli_query($koneksi, "INSERT INTO customer (nama_customer, email, password, no_tlp)
    values ('$nama_customer', '$email', '$password', '$no_tlp')");
    echo "<script>alert('terima kasih telah mendaftar');window.location='../index.php'</script>";
?>
