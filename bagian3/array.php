<?php
$arr = [
  ['f', 'g', 'h', 'i'],
  ['j', 'k', 'p', 'q'],
  ['r', 's', 't', 'u'],
];

$cari = $_GET['cari'];
foreach ($arr as $item) {
  echo $item[0];
  echo "<br/>";
}
