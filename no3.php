<?php
function convertToSeconds($jam, $menit, $detik) {
    $jamToSeconds = $jam * 3600;
    $menitToSeconds = $menit * 60;
    $totalSeconds = $jamToSeconds + $menitToSeconds + $detik;
    
    return $totalSeconds;
}

$jam = 1;
$menit = 55;
$detik = 20;

$totalDetik = convertToSeconds($jam, $menit, $detik);
echo "Total detik: " . $totalDetik;
?>