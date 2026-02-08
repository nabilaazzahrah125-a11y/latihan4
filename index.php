<?php
include "koneksi.php";
$data = mysqli_query($koneksi, "SELECT * FROM pesanan");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pesanan Jahit</title>
</head>
<body>

<h2>Data Pesanan Jahit</h2>

<table border="1" cellpadding="8" cellspacing="0">
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

<hr>

<h3>Tambah Pesanan</h3>

<form action="simpan.php" method="post">
Nama Pemesan <br>
<input type="text" name="nama" required><br><br>

Nama Baju <br>
<input type="text" name="nama_baju" required><br><br>

Jenis Bahan <br>
<select name="jenis_bahan" required>
    <option value="">-- Pilih --</option>
    <option value="Katun">Katun</option>
    <option value="Satin">Satin</option>
    <option value="Denim">Denim</option>
</select><br><br>

Jenis Baju <br>
<select name="jenis_baju">
    <option value="Kemeja">Kemeja</option>
    <option value="Gamis">Gamis</option>
    <option value="Celana">Celana</option>
</select><br><br>

Jumlah <br>
<input type="number" name="jumlah" required><br><br>

Harga <br>
<input type="number" name="harga" required><br><br>

<button type="submit">Simpan</button>
</form>

</body>
</html>
