<?php
include "koneksi.php";
$data = mysqli_query($koneksi, "SELECT * FROM pesanan");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pesanan</title>
</head>
<body>

<h2>Data Pesanan Jahit</h2>

<table border="1" cellpadding="8">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Nama Baju</th>
    <th>Jenis Bahan</th>
    <th>Jenis Baju</th>
    <th>Jumlah</th>
    <th>Harga</th>
    <th>Aksi</th>
</tr>

<?php
$no = 1;
while ($d = mysqli_fetch_array($data)) {
?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $d['nama'] ?></td>
    <td><?= $d['nama_baju'] ?></td>
    <td><?= $d['jenis_bahan'] ?></td>
    <td><?= $d['jenis_baju'] ?></td>
    <td><?= $d['jumlah'] ?></td>
    <td><?= $d['harga'] ?></td>
    <td>
        <a href="hapus.php?id=<?= $d['id'] ?>">Hapus</a>
    </td>
</tr>
<?php } ?>

</table>

<br>
<a href="index.php">Tambah Pesanan</a>

</body>
</html>
