<?php
echo "<br>" . 'Bagian 1 no 1' . "<br>" . "<br>";
include('nilai.php');
$c = count($nilai);
$j = array_sum($nilai);

$rerata = $j / $c;

echo 'rata-rata :' . $rerata . "<br>";
echo 'nilai tertinggi' . ' : ' . max($nilai) . "<br>";
echo 'nilai terendah' . ' : ' . min($nilai) . "<br>";

echo "<br>" . 'Bagian 1 no 2' . "<br>" . "<br>";
// include('2.php');
?>

