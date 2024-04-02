<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>
    <?php   
        echo "<h3> Soal No 1</h3>";
         $kalimat1 = "PHP is never old";

         echo "Kalimat 1 : " . $kalimat1 . "<br>";
         echo "Panjang String Kalimat 1 : " . strlen($kalimat1) . "<br>";
         echo "Jumlah kata kalimat 1 : " . str_word_count($kalimat1) . "<br> <br>";


         $kalimat2 = "Hello PHP!"; 

         echo "Kalimat 2 : " . $kalimat2 . "<br>";
         echo "Panjang String Kalimat 2 : " . strlen($kalimat2) . "<br>";
         echo "Jumlah kata kalimat 2 : " . str_word_count($kalimat2) . "<br> <br>";

         $kalimat3 = "I'm ready for the challenges"; 

         echo "Kalimat 3 : " . $kalimat3 . "<br>";
         echo "Panjang String Kalimat 3 : " . strlen($kalimat3) . "<br>";
         echo "Jumlah kata kalimat 3 : " . str_word_count($kalimat3) . "<br> <br>";



         echo "<h3> Soal No 2</h3>";
         $string2 = "I love PHP";
         
         echo "Kata 1 String 2: " . substr($string2,0,1) . "<br>";
         echo "Kata 2 String 2: " . substr($string2,2,4) . "<br>";
         echo "Kata 3 String 2: " . substr($string2,6,4) . "<br> <br>";


         echo "<h3> Soal No 3 </h3>";

         $string3 = "PHP is old but sexy!";

         echo "String 3: " . $string3 . "<br>";
         echo "Ganti String 3 : " . str_replace("sexy","awesome",$string3);

    ?>
        
        
        
        
   
            
        