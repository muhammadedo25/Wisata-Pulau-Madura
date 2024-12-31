<?php

session_start();

include 'koneksi.php';

$nama = $_POST['nama'];
$wisata = $_POST['wisata'];
$tanggal = $_POST['tanggal'];
$komentar = $_POST['komen'];
$rating = count($_POST['rating']);

// echo $rating;
// echo $nama;
// echo $wisata;
// echo $tanggal;
// echo $komentar;
$data = mysqli_query($koneksi, ("SELECT * FROM wisatawan WHERE nama_wisatawan = '$nama'"));
$ambildata = mysqli_fetch_array($data);
$id_wisatawan = $ambildata['id_wisatawan'];

$data2 = mysqli_query($koneksi, ("SELECT * FROM object_wisata WHERE nama_object = '$wisata'"));
$ambildata2 = mysqli_fetch_array($data2);
$id_object = $ambildata2['id_object'];


$daftar = ("INSERT INTO testimoni (id_testimoni, tanggal_testimoni,id_wisatawan, id_object, testimoni, nilai) VALUES ('', '$tanggal', '$id_wisatawan', '$id_object', '$komentar','$rating')");
if (mysqli_query($koneksi, $daftar)) {
?>
     <script>
          //   alert('Daftar Berhasil');
          location = '../post-single.php?wisata=<?php echo $wisata ?>';
     </script>
<?php
} else {
     log("Error: " . $daftar . "<br>") .
          mysqli_error($koneksi, $daftar);
}


?>