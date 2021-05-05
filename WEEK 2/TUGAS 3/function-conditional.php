<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Function</title>
</head>
<body>
    <h1>Berlatih Function PHP</h1>
<?php
    echo "<h3> Soal No 1 Greetings </h3>";
    function greetings($kata){
        echo"Halo $kata, Selamat Datang di Sanbercode! <br>";
    }
    greetings("Bagas");
    greetings("Wahyu");
    greetings("Abdul");
    echo "<br>";
    echo "<h3>Soal No 2 Reverse String</h3>";
    // Code function di sini 
    function reverse($kata){
        $length = strlen($kata);
        $tampung = "";
        for($i = ($length-1) ; $i >=0 ; $i-- ){
            $tampung .=$kata[$i];
        }
        return $tampung;
    }
    function reverseString($kata2){
        $string = reverse($kata2);
        echo $string . "<br>";
    }
    reverseString("abduh");
    reverseString("Sanbercode");
    reverseString("We Are Sanbers Developers");
    echo "<br>";
    echo "<br>";
    echo "<h3>Soal No 3 Palindrome </h3>";
    /* 
    Soal No 3 
    Palindrome
    Buatlah sebuah function yang menerima parameter berupa string yang mengecek apakah string tersebut sebuah palindrome atau bukan. 
    Palindrome adalah sebuah kata atau kalimat yang jika dibalik akan memberikan kata yang sama contohnya: katak, civic.
    Jika string tersebut palindrome maka akan mengembalikan nilai true, sedangkan jika bukan palindrome akan mengembalikan false.
    NB: 
    Contoh: 
    palindrome("katak") => output : "true"
    palindrome("jambu") => output : "false"
    NB: DILARANG menggunakan built-in function PHP seperti strrev() dll. Gunakan looping seperti biasa atau gunakan function reverseString dari jawaban no.2!
    */


    // Code function di sin
    function palindrome($kata3){
        $asli=$kata3;
        $balik=reverse($kata3);
        if ($kata3 == $balik){
            echo "$asli -> True <br>";
        }else{
            echo "$asli -> False <br>";
        }
    }

    // Hapus komentar di bawah ini untuk jalankan code
    palindrome("civic") ; // true
    palindrome("nababan") ; // true
    palindrome("jambaban"); // false
    palindrome("racecar"); // true
    echo "<h3>Soal No 4 Tentukan Nilai<h3>";
    /*
    Soal 4
    buatlah sebuah function bernama tentukan-nilai . Di dalam function tentukan_nilai yang menerima parameter 
    berupa integer. dengan ketentuan jika paramater integer lebih besar dari sama dengan 85 dan lebih kecil sama dengan 100 maka akan mereturn String “Sangat Baik” 
    Selain itu jika parameter integer lebih besar sama dengan 70 dan lebih kecil dari 85 maka akan mereturn string “Baik” selain itu jika parameter number lebih besar 
    sama dengan 60 dan lebih kecil dari 70 maka akan mereturn string “Cukup” selain itu maka akan mereturn string “Kurang”
    */

    // Code function di sini
    function tentukan_nilai($number){
        if($number >= 85 && $number <100){
            return "Sangat baik <br>";
        }else if($number >= 70 && $number < 85){
            return "baik <br>";
        }else if($number >= 60 && $number < 70){
            return "cukup <br>";
        }else{
            return "kurang <br>";
        }
    }
    //Hapus komentar di bawah ini untuk jalankan code
    echo tentukan_nilai(98); //Sangat Baik
    echo tentukan_nilai(76); //Baik
    echo tentukan_nilai(67); //Cukup
    echo tentukan_nilai(43); //Kurang
?>
</body>
</html>
