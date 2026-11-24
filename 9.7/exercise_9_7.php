<?php
function splitter($str) {
    $freq = array();
    $words = preg_split("/[ \.,;:!\?]\s*/", $str, -1, PREG_SPLIT_NO_EMPTY);
    foreach ($words as $word) {
        if (array_key_exists($word, $freq))
            $freq[$word]++;
        else
            $freq[$word] = 1;
    }
    return $freq;
}

$str = "apples are good for you, or don't you like apples? or maybe you like oranges better than apples";
$tbl = splitter($str);
$sorted_keys = array_keys($tbl);
sort($sorted_keys);
?>
<table>
  <caption>Word Frequency</caption>
  <tr><th>Word</th><th>Frequency</th></tr>
  <?php foreach ($sorted_keys as $word) { ?>
  <tr>
    <td><?php print $word; ?></td>
    <td><?php print $tbl[$word]; ?></td>
  </tr>
  <?php } ?>
</table>
