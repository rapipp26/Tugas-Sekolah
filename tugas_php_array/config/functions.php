<?php
function hitungRataRata($data) {
    return array_sum($data) / count($data);
}

function cekKelulusan($avg) {
    if($avg >= 80) {
        return "Lulus Sangat Baik";
    } else if($avg >= 75) {
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
}