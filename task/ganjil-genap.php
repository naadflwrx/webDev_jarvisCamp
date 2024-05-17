<?php

    // menampilkan angka ganjil
    function AngkaGanjil($start, $end) {
        echo "Angka ganjil antara $start dan $end adalah : <br>";
        for ($i = $start; $i <= $end; $i++) {
            if ($i % 2 != 0) {
                echo $i . " ";
            }
        }
        echo "<br>";
        echo "<br>";
    }


    // menampilkan angka genap
    function AngkaGenap($start, $end) {
        echo "Angka genap antara $start dan $end adalah :  <br>";
        for ($i = $start; $i <= $end; $i++) {
            if ($i % 2 == 0) {
                echo $i . " ";
            }
        }
    }

    AngkaGanjil(1, 10);   
    AngkaGenap(15, 30); 
?>