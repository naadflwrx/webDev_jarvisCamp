<?php
    $nilai1 = 10;
    $nilai2 = 10;

    if ($nilai1 < $nilai2) {
        echo "Nilai 1 lebih kecil dari nilai 2 ";
    } else if ( $nilai1 > $nilai2){
        echo "Nilai 1 lebih besar dari nilai 2 ";
    } else if ( $nilai1 == $nilai2){
        echo "Nilai 1 sama dengan nilai 2 ";
    } else if ( $nilai1 >= $nilai2){
        echo "Nilai 1 lebih besar dari nilai 2 ";
    } else {
        echo "Jawaban tidak diketahui!";
    }

    echo "<br>";

    $day = date('D');
    echo "Hari ini adalah $day ";

    if ($day == "Sat"){
        echo "Kelas Jarvis Dimulai!";
    } else if ($day == "Sun") {
        echo "Kelas Jarvis libur";
    } else if ($day == "Mon") {
        echo "Kelas Jarvis libur";
    } else {
        echo "Kelas tidak diketahui!";
    }
?>