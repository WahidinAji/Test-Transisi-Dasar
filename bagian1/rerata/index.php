<?php
echo "<br>" . 'Bagian 1 no 1 mencari nilai rata-rata' . "<br>" . "<br>";
include('nilai.php');
$c = count($nilai);
$j = array_sum($nilai);

$rerata = $j / $c;

echo 'rata-rata :' . $rerata . "<br>";
echo 'nilai tertinggi' . ' : ' . max($nilai) . "<br>";
echo 'nilai terendah' . ' : ' . min($nilai) . "<br>";
echo '<br>' . '<a href="/bagian1/index.php">kembali</a>';
