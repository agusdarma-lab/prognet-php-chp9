<?php
function pisah($arr, &$pos, &$neg) {
    $pos = [];
    $neg = [];
    foreach ($arr as $x) {
        if ($x > 0)     $pos[] = $x;
        elseif ($x < 0) $neg[] = $x;
    }
}

$angka = [4, -2, 0, 7, -5, 3];
pisah($angka, $positif, $negatif);
print "Asli   : " . implode(", ", $angka) . "<br>";
print "Positif: " . implode(", ", $positif) . "<br>";
print "Negatif: " . implode(", ", $negatif);
?>