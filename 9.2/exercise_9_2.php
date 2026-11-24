<?php
function avgMedian($arr) {
    sort($arr);
    $n = count($arr);
    $avg = array_sum($arr) / $n;
    $mid = intdiv($n, 2);
    $median = ($n % 2 == 0)
        ? ($arr[$mid - 1] + $arr[$mid]) / 2
        : $arr[$mid];
    return [$avg, $median];
}

$data = [5, 3, 9, 1, 7, 4];
list($avg, $med) = avgMedian($data);
print "Data     : " . implode(", ", $data) . "<br>";
print "Rata-rata: $avg <br>";
print "Median   : $med";
?>