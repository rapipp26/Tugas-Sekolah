<?php
$nama = "Budi Santoso";
$kelas = "XII PPLG 1";
$nilai_tugas = 70;
$nilai_uts = 90;
$nilai_uas = 60;

$nilai_akhir = ($nilai_tugas * 0.30) + ($nilai_uts * 0.30) + ($nilai_uas * 0.40);

if ($nilai_akhir >= 90) {
    $predikat = "A";
    $status = "Lulus";
} elseif ($nilai_akhir >= 80) {
    $predikat = "B";
    $status = "Lulus";
} elseif ($nilai_akhir >= 75) {
    $predikat = "C";
    $status = "Lulus";
} elseif ($nilai_akhir >= 60) {
    $predikat = "D";
    $status = "Tidak Lulus";
} else {
    $predikat = "E";
    $status = "Tidak Lulus";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian</title>
</head>

<body>
    <h2>
        Hasil Penilaian Siswa
    </h2>
    <?php

    echo "Nama: " . $nama;
    echo "<br>";
    echo "Kelas: " . $kelas;
    echo "<hr>";
    echo "Nilai Tugas: " . $nilai_tugas;
    echo "<br>";
    echo "Nilai UTS: " . $nilai_uts;
    echo "<br>";
    echo "Nilai UAS: " . $nilai_uas;
    echo "<br>";
    echo "<hr>";
    echo "Nilai Akhir: " . $nilai_akhir;
    echo "<br>";
    echo "Predikat: " . $predikat;
    echo "<br>";
    echo "Status: " . $status;
    ?>

</body>

</html>