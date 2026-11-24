<?php
function uniqueStrings($arr) {
    $hasil = [];
    foreach ($arr as $s) {
        if (!in_array($s, $hasil)) {
            $hasil[] = $s;
        }
    }
    return $hasil;
}

$data = ["apel", "jeruk", "apel", "mangga", "jeruk", "pisang"];
print "Input : " . implode(", ", $data) . "<br>";
print "Unik  : " . implode(", ", uniqueStrings($data));
?>

