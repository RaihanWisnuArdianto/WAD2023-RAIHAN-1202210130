<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$Host = "localhost:3308";
$Username = "root";
$Password = "";
$NamaDatabase = "db_wad_modul3";
// 
$conn = mysqli_connect($Host, $Username, $Password, $NamaDatabase);
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if($conn -> connect_error){
    echo "Koneksi Gagal";
}
// 
?>