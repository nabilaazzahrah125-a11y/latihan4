<?php
$nama = $_POST['nama'];
$nama_baju = $_POST['nama_baju'];
$jenis_bahan = $_POST['jenis_bahan'];
$ukuran = $_POST['ukuran'];
$jumlah = $_POST['jumlah'];

/* harga bahan */
if ($jenis_bahan == "Katun") {
    $harga_bahan = 50000;
} elseif ($jenis_bahan == "Satin") {
    $harga_bahan = 70000;
} else {
    $harga_bahan = 60000;
}

/* harga ukuran */
if ($ukuran == "S") {
    $harga_ukuran = 10000;
} elseif ($ukuran == "M") {
    $harga_ukuran = 15000;
} elseif ($ukuran == "L") {
    $harga_ukuran = 20000;
} else {
    $harga_ukuran = 25000;
}

$harga_perpcs = $harga_bahan + $harga_ukuran;
$total = $harga_perpcs * $jumlah;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Struk Pembelian</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="struk">
    <h1>🧾 Struk Pembelian</h1>

    <div class="row">
        <span>Nama Barang</span>
        <span><?= $nama_baju ?></span>
    </div>

    <div class="row">
        <span>Ukuran</span>
        <span><?= $ukuran ?></span>
    </div>

    <div class="row">
        <span>Jumlah</span>
        <span><?= $jumlah ?> pcs</span>
    </div>

    <div class="row">
        <span>Jenis Bahan</span>
        <span><?= $jenis_bahan ?></span>
    </div>

    <div class="row">
        <span>Harga / pcs</span>
        <span>Rp <?= number_format($harga_perpcs) ?></span>
    </div>

    <hr>

    <div class="total">
        <span>Total Bayar</span>
        <span>Rp <?= number_format($total) ?></span>
    </div>

    <a href="index.php" class="back">← Kembali Belanja</a>
</div>

</body>
</html>
