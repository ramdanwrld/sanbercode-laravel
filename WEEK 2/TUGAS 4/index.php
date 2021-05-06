<?php
require('Animal.php');
require('Ape.php');
require("Frog.php");
    $sheep = new Animal("shaun");
    echo "Nama Binatang : ".$sheep->name."<br>"; // "shaun"
    echo "Jumlah Kaki : ".$sheep->legs."<br>"; // 4
    echo "Apakah berdarah dingin : ".$sheep->cold_blooded."<br>"; // "no"
    echo"<br>";
    // NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())
    $sungokong = new Ape("kera sakti");
    echo "Nama Binatang : ".$sungokong->name."<br>"; // "shaun"
    echo "Jumlah Kaki : ".$sungokong->legs."<br>"; // 4
    echo "Apakah berdarah dingin : ".$sungokong->cold_blooded."<br>"; // "no
    $sungokong->yell(); // "Auooo"
    echo"<br>";
    echo"<br>";
    $kodok = new Frog("buduk");
    echo "Nama Binatang : ".$kodok->name."<br>"; // "shaun"
    echo "Jumlah Kaki : ".$kodok->legs."<br>"; // 4
    echo "Apakah berdarah dingin : ".$kodok->cold_blooded."<br>"; // "no
    $kodok->jump() ; // "hop hop"
?>
