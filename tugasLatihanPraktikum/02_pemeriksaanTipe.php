<?php 
    $nama = "Rifqi";
    $umur = 20;
    $hobi = ["menggambar", "belajar", "jalan-jalan"];
    $ipk = 3.97;
    $anak_kos = false;

    var_dump($nama);
    // string karena nilai yang dimasukkan yaitu "Rifqi" berupa teks dan ditulis di dalam tanda kutip
    echo "<br>";
    
    var_dump($umur);
    // integer karena nilai yang dimasukkan yaitu 20 merupakan bilangan bulat dan tidak menggunakan tanda kutip
    echo "<br>";
    
    var_dump($hobi);
    // array karena variabel tersebut menyimpan beberapa nilai di dalam satu variabel dan ditulis menggunakan tanda kurung siku 
    echo "<br>";
    
    var_dump($ipk);
     // float karena nilai yang dimasukkan menggunakan titik yang menandakan bilangan desimal di dalam php
    echo "<br>";
    
    var_dump($anak_kos);
    // boolean karena nilai yang diinput merupakan salah satu dari nilai true maupun false yang merupakan tipe data bolean
    echo "<br>";
?>