<?php
function empatDigit($str) {
    if (preg_match('/\b\d{4}\b/', $str, $m)) {
        return $m[0];
    }
    return false;
}

var_dump(empatDigit("12 345 2024 99 1000"));
print "<br>";
var_dump(empatDigit("12 345 99"));
?>
