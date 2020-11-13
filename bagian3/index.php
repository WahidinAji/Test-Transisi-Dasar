<?php

function cari($data, $cari)
{
  $hasil = false;
  foreach ($data as $dat) {
    foreach ($dat as $d) {
      if (strpos($cari, $d))
        $hasil = true;
    }
  }
  return $hasil;
}
$arr = [
  ['f', 'g', 'h', 'i'],
  ['j', 'k', 'p', 'q'],
  ['r', 's', 't', 'u'],
];

echo '<br>' . '<a href="/index.php">Home</a>' . '<br>';
// $hasil = cari($arr, 'fghi');
$a = json_encode(cari($arr, 'fghi'));
echo 'Cari ' . "(fghi)" . ' ' . $a;
echo '<br>';
$b = json_encode(cari($arr, 'fghp'));
echo 'Cari ' . "(fghp)" . ' ' . $b;
echo '<br>';
$c = json_encode(cari($arr, 'fjrstp'));
echo 'Cari ' . "(fjrstp)" . ' ' . $c;
// echo $hasil;
