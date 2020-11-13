<?php
function Countt($str)
{
  $upper = 0;
  $lower = 0;
  $number = 0;
  $special = 0;
  for ($i = 0; $i < strlen($str); $i++) {
    if (
      $str[$i] >= 'a' &&
      $str[$i] <= 'z'

    )
      $lower++;
    else if (
      $str[$i] >= 'A' &&
      $str[$i] <= 'Z'
    )
      $upper++;
    else if (
      $str[$i] >= '0' &&
      $str[$i] <= '9'
    )
      $number++;
    else
      $special++;
  }
  echo "<br>" . "Mengandung $lower buah huruf kecil.", "\n";
}

$str = "TranSISI";
Countt($str);
echo '<br>' . '<a href="/bagian1/index.php">kembali</a>';
