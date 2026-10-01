<?php
if (isset($_POST['submit'])) {
    $nama_barang = $_POST['nb'];
    $harga_satuan = $_POST['hs'];
    $jumlah_pembelian = $_POST['jp'];
    if ($nama_barang == null || $harga_satuan == null || $jumlah_pembelian == null) {
        echo "Silahkan isi form di bawah terlebih dahulu";
    } else {
        $total_harga = $harga_satuan * $jumlah_pembelian;
        if ($total_harga >= 500000) {
            $diskon = 0.20;
        } else if ($total_harga >= 250000) {
            $diskon = 0.10;
        } else {
            $diskon = null;
        };

        if ($diskon) {
            $total_diskon = $total_harga * $diskon;
        } else {
            $total_diskon = 0;
        };
        $total_harga_setelah_diskon = $total_harga - $total_diskon;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
</head>

<body>
    <form action="" method="post">
        <label for="nb">Nama Barang: </label>
        <input type="text" name="nb" id="nb">
        <br>
        <label for="hs">Harga Satuan: </label>
        <input type="number" name="hs" id="hs">
        <br>
        <label for="jp">Jumlah Pembelian: </label>
        <input type="number" name="jp" id="jp">
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <p>Nama Barang: <?= isset($nama_barang) ? $nama_barang : "" ?></p>
    <p>Harga Barang Satuan: <?= isset($harga_satuan) ? "Rp" . number_format($harga_satuan, '0', ".", ",") : "" ?></p>
    <p>Jumlah Barang: <?= isset($jumlah_pembelian) ? $jumlah_pembelian : "" ?></p>
    <p>Total Harga Barang: <?= isset($total_harga) ? "Rp" . number_format($total_harga, '0', ".", ",") : "" ?></p>
    <p>Jumlah Diskon: <?= isset($total_diskon) ? "Rp" . number_format($total_diskon, '0', ".", ",") . " / " . $diskon * 100 . "%" : "" ?></p>
    <p>Harga Yang Harus Dibayar: <?= isset($total_harga_setelah_diskon) ? "Rp" . number_format($total_harga_setelah_diskon, '0', ".", ",") : "" ?></p>
</body>

</html>