<?php
  $host = "localhost"; 
  $user = "root";
  $pass = "";
  $database = "db_buku"; //nama database
  $koneksi = mysqli_connect($host,$user,$pass,$database); 

  if(!$koneksi){ //jika tidak terkoneksi maka akan tampil error
    die ("Koneksi dengan database gagal: ".mysql_connect_error());
  }
?>