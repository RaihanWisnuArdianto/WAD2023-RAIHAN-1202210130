<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$Host = "localhost:3308";
$Username = "root";
$Password = "";
$NamaDatabase = "db_wad_modul4";
// 
$conn = mysqli_connect($Host, $Username, $Password, $NamaDatabase);
// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if($conn -> connect_error){
    echo "Koneksi Gagal";
}
// 
 
?>