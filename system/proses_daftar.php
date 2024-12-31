<?php

session_start();

include 'koneksi.php';

$name = $_POST['name'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$hp = $_POST['hp'];
$email = $_POST['email'];
$password = $_POST['password'];
// echo $name;
// echo $jenis_kelamin;
// echo $hp;
// echo $email;
// echo $password;

$cek = ("SELECT email_wisatawan FROM wisatawan WHERE email_wisatawan = '$email'");
$cekuser =  (mysqli_query($koneksi, $cek));
if (mysqli_num_rows($cekuser)>0){ //proses mengingatkan data sudah ada
     echo "<script>alert('Email telah digunakan');history.go(-1) </script>";

 }else {$daftar = ("INSERT INTO wisatawan (id_wisatawan, nama_wisatawan,jenis_kelamin_wisatawan, hp_wisatawan, email_wisatawan, sandi_wisatawan) VALUES ('', '$name', '$jenis_kelamin', '$hp', '$email', '$password')");
     if (mysqli_query($koneksi, $daftar)) {
          ?>
          <script>
          alert('Daftar Berhasil');
          location='../index.php';
          </script>
     <?php
     }else {
          log("Error: " . $daftar . "<br>") . 
          mysqli_error($koneksi, $daftar);
     }

 }
?>