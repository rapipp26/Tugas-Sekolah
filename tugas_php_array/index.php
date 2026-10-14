<?php
require_once "config/data.php";
require_once "config/functions.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Array PHP</title>
</head>
<body>

    <?php include "templates/header.php"; ?>
    <?php include "templates/navbar.php"; ?>
    <div class="tabel">
        <table border="1" cellpadding="10" cellspacing="0">
            <caption>Data Nilai & Status Kelulusan</caption>
            <thead>
                <tr>
                    <th>Nama Siswa</th>
                    <th>Daftar Nilai</th>
                    <th>Rata Rata</th>
                    <th>Status Kelulusan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($siswa as $s) : ?>
                <?php
                    $rata = hitungRataRata($s["nilai"]);
                    $status = cekKelulusan($rata); 
                 ?>
                 <tr>
                    <td><?= $s["nama"] ?></td>
                    <td><?= implode(", ", $s["nilai"]) ?></td>
                    <td><?= $rata ?></td>
                    <td><?= $status ?></td>
                 </tr>
                 <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php include "templates/footer.php"; ?>
</body>
</html>