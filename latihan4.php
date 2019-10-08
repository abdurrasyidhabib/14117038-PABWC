<?php
$tigatuju = 37;
$prima = array();

for ($i = 1; $i < $tigatuju; $i++) {
  for ($j = 1; $j < array_sum($prima); $j++) {
    if ($i % array_sum($prima) == 0) {
      $prima[] = $i;
    }
  }
}

foreach ($prima as $p) {
  echo "$p <br>";
}
