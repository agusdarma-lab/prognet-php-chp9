<?php
function topKata($str) {
    $kata = preg_split('/[ ,.?]+/', $str, -1, PREG_SPLIT_NO_EMPTY);
    $freq = [];
    foreach ($kata as $k) {
        if (strlen($k) > 3) {
            $freq[$k] = ($freq[$k] ?? 0) + 1;
        }
    }
    arsort($freq);
    return array_slice($freq, 0, 3, true);
}

$teks = "apel merah, apel hijau. apel manis? jeruk manis dan jeruk segar";
foreach (topKata($teks) as $kata => $jml) {
    print "$kata = $jml <br>";
}
?>
