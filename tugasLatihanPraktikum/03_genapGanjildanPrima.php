<?php
    $nilai = readline("masukkan nilai : ");
    echo $nilai % 2 == 0 ? "Bilangan Genap \n" : "Bilangan Ganjil \n";
    
    if($nilai == 1) {
        echo "Bilangan Bukan Prima";
    } else if ( $nilai == 2) {
        echo "Bilangan Prima";
    } else {
        for ($x = 2; $x < $nilai; $x++) {
            if($nilai % $x == 0) {
                echo "Bilangan Bukan Prima";
                return;
            }
        }
        echo "Bilangan Prima";
    }
?>