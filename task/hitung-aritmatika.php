<?php

    $tambah = tambah(2, 3);
    $kurang = kurang(8, 2);
    $bagi = bagi(8, 4);
    $kali = kali(2, 8);

    
    function tambah($angka1, $angka2) {
        return $angka1 + $angka2;
    }

    function kurang($angka1, $angka2) {
        return $angka1 - $angka2;
    }

    function bagi($angka1, $angka2) {
        if ($angka2 == 0) {
            return "Masukan angka lain, pembagian dengan nol tidak dapat dilakukan.";
        } else {
            return $angka1 / $angka2;
        }
    }

    function kali($angka1, $angka2) {
        return $angka1 * $angka2;
    }


    echo "Hasil Penambahan : " . $tambah . "<br>";
    echo "Hasil Pengurangan : " . $kurang . "<br>";
    echo "Hasil Pembagian : " . $bagi . "<br>";
    echo "Hasil Perkalian : " . $kali . "<br>";

?>