<?php

    /* 
         Variable Sistem
         Variable built in PHP (variable yang sudah ada di php)
    */
    echo $_SERVER["DOCUMENT_ROOT"];

    echo '<br><br>';

    /* 
        Variable User
        Variable yang dibuat oleh user
    */
    $name = 'Yeay' ;
    $age = 15;
    $weight = 50.5;

    $name = ' meng';

    echo "Nama saya adalah $name";


    /*
        Variable konstan 
        Variable yang tidak bisa diubah nilainya
        1. menggunakan define | define('fruit, "apel");
        2. menggunakan const | const fruit = "apel";
    */
    echo '<br><br>';

    define("SITE_NAME", "Elena");
    echo SITE_NAME;
?>