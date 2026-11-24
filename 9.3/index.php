<?php
function top3($arr) {
    $freq = array_count_values($arr);
    arsort($freq);
    return array_slice(array_keys($freq), 0, 3);
}

$data = ["a","b","a","c","b","a","d","b","c","e"];
print "Data : " . implode(", ", $data) . "<br>";
print "Top 3: " . implode(", ", top3($data));
?>