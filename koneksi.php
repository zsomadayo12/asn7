<?php 
$host = "localhost";
$user ="root";
$pass ="";
$dbname ="db_sistem_data_karyawan";

$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
    die("koneksi gagal:" . 
    mysqli_connect_error());
}
?>