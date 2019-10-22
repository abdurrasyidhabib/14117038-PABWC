<?php
function swap(&$angka1, &$angka2)
{
  $dump = $angka1;
  $angka1 = $angka2;
  $angka2 = $dump;
}

$a1 = 10;
$a2 = 20;
echo "angka sebelum ditukar <br>
      angka1 = $a1 |
      angka2 = $a2
      <br>
";

echo "<hr>";

swap($a1, $a2);
echo "angka setelah ditukar <br>
      angka1 = $a1 |
      angka2 = $a2
      <br>
";
