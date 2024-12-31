<?php

include 'koneksi.php';
$getnama = $_GET['wisata'];
$name = $_POST['nama'];
$kota = $_POST['kota'];
$harga = $_POST['harga'];
$alamat = $_POST['alamat'];
$deskripsi = $_POST['deskripsi'];
$url = $_POST['url'];

// echo $name;
// echo $kota;
// echo $harga;
// echo $alamat;
// echo $deskripsi;
// echo $url;

// $data =mysqli_query ($koneksi,("SELECT * FROM object_Wisata WHERE kota = '$kota'"));


$edit = ("UPDATE object_wisata SET nama_object='$name', kota='$kota', alamat='$alamat', harga_tiket='$harga', deskripsi='$deskripsi', url_maps='$url' WHERE nama_object='$getnama' ");
     if (mysqli_query($koneksi, $edit)) {
          ?>
          <script>
          // alert('Daftar Berhasil');
          location='../admin.php';
          </script>
     <?php
     }else {
          log("Error: " . $edit . "<br>") . 
          mysqli_error($koneksi, $edit);
     }

?>