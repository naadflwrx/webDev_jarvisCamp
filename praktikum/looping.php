<?php
    // penggunaan for loop
    for ($i=1; $i < 10 ; $i++) { 
        echo "$i";
    }

    echo "<br>";

    // penggunaan while loop
    $a = 1;
    while ($a < 10) {
        echo "$a";
        $a++;
    }

    echo "<br>";

    // penggunaan do loop
    $b = 0;
    do {
        $b++;
        echo "$b ";
    } while ($b <= 10);

    echo "<br>";

    // penggunaan foreach loop
    $array = ["Sina", "Mark", "Nana"];

    foreach ($array as $key => $value) {
        $no = $key + 1;
        echo $no. " - $value <br>";
    }
?>