<?php
session_start();
// include "session_login.php";
include "koneksi.php"; //menghubungkan ke database

if( isset($_POST["tombol"]) ){ // jika terdapat nama tombol
    $user = $_POST["email"];
    $pass = $_POST["password"];

    if ($user=="admin@gmail.com" && $pass=="adminadminadminadmin"){
        header("location:../admin.php");
    }else{
    // penyeleksian apakah inputan user berada di database
    $login = mysqli_query($koneksi,"SELECT * FROM wisatawan where BINARY email_wisatawan='$user' and sandi_wisatawan='$pass'");
    $cek = mysqli_num_rows($login);
    if ($cek > 0){
    //jika ada maka hasilnya nanti pasti satu
    if( mysqli_num_rows($login) == 1){
        $row = mysqli_fetch_assoc($login); // berfungsi untuk mengambil data dalam satu baris
        if( $row["sandi_wisatawan"] == $pass){
            $_SESSION["username"] = $row['nama_wisatawan'];
            // echo $_SESSION['username'];
            header("location:../index.php");
            exit;
        }
    }else{
                echo "Data tidak bisa di update";
            };
        }
    ?>
    <div style="color: red; margin: 5px;"><i><?= "username atau password salah";?></i></div>
<?php 
}
}
?>