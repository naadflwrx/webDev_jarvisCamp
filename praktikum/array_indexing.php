<?php

$array = [1,2,3,4,5];

echo $array[1];
echo "<br><pre>";
print_r($array);
echo "</pre>";

// array associative
$umur = ["Sina" => 21, "Nana" => 23];
$umur['Hana'] = 20;
$umur['Rem'] = 21;

echo "<br><pre>";
print_r($umur);
echo "</pre>";

foreach ($umur as $nama => $umur) {
    echo "Namanya : $nama <br> Umurnya : $umur <br>";
}


// array multidimensi
$buahBuahan = [
    ["nama" => "Apel", "warna" => "Merah"],
    ["nama" => "Mangga", "warna" => "Hijau"],
    ["nama" => "Pisang", "warna" => "Kuning"],
    ["nama" => "Durian", "warna" => "Kuning"],
    ["nama" => "Kesemek", "warna" => "Jingga"],
];

echo "<br><pre>";
// print_r($buahBuahan);
echo "</pre>";

?>

<table border="2">
    <tr>
        <th>Nama</th>
        <th>Warna</th>
    </tr>
    <?php foreach ($buahBuahan as $buah) { ?>
    <tr>
        <td><?php echo $buah['nama'] ?></td>
        <td><?= $buah['warna'] ?></td>
    </tr>
    <?php } ?>
</table>