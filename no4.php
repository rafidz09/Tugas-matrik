<?php

function convertToTime($totalDetik) {
    $jam = floor($totalDetik / 3600);
    $sisaDetik = $totalDetik % 3600;
    $menit = floor($sisaDetik / 60);
    $detik = $sisaDetik % 60;
    
    return array($jam, $menit, $detik);
}

$totalDetik = 6789;

list($jam, $menit, $detik) = convertToTime($totalDetik);
echo "Hasil konversi: $jam jam $menit menit $detik detik";
?>