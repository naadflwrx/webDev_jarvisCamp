<?php

$fruits = [1, 2, 3, 4, 5];

// print_r($fruits);
$fruits[0] = "Hijau";
$fruits[2] = "Hijau";
print_r($fruits);

echo "<br>";
// menghitung total data di array
echo count($fruits);
echo "<br>";

// menambahkan data di akhir array
array_push($fruits, "Mangga", "Apel");
print_r($fruits);
echo "<br>";

// cek data di array
var_dump(in_array("Hijau", $fruits));
echo "<br>";

$last = array_pop($fruits);
print_r($fruits);
echo "<br>";
echo $last;

unset($fruits);
echo "<br>";
print_r($fruits);
echo "<br>";

echo $_SERVER['HTTP_HOST'];

?>