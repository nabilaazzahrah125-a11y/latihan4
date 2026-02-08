<?php
include "koneksi.php";

$nama        = $_POST['nama'];
$nama_baju   = $_POST['nama_baju'];
$jenis_bahan = $_POST['jenis_bahan'];
$jenis_baju  = $_POST['jenis_baju'];
$jumlah      = $_POST['jumlah'];
$harga       = $_POST['harga'];

$query = mysqli_query($koneksi,
"INSERT INTO pesanan VALUES (
 '',
 '$nama',
 '$nama_baju',
 '$jenis_bahan',
 '$jenis_baju',
 '$jumlah',
 '$harga'
)"
);

header("location:index.php");
?>
