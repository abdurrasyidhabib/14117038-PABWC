<?php
$tigatuju = 37;
$prima = array();

for ($i = 2; $i <= $tigatuju; $i++) {
  $jum = 0;
  for ($j = 2; $j <= $i; $j++) {
    // $hasil = $i % $j;
    // echo "$i % $j = $hasil <br>";
    if ($i % $j === 0) {
      $jum++;
    }
  }
  if ($jum === 1) {
    $prima[] = $i;
  }
}

foreach ($prima as $p) {
  echo "$p <br>";
}
