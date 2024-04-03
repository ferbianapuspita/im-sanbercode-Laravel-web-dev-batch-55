<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>
<body>
    <h1>Berlatih Looping</h1>

    <?php 
        echo "<h3>Soal No 1 Looping</h3>";
        echo "<h4>Looping Pertama</h4>";

        $i = 2;
        while($i <= 20 ) {
            echo $i . " . I Love PHP <br>";
            $i+=2;

        }

        echo "<h4>Looping Kedua</h4>";

        for($a = 20; $a >= 2; $a-=2){
            echo $a . " . I Love PHP <br>";


        }

        echo "<h3>Soal No 2 Looping Array Modulo </h3>";


        $numbers = [18, 45, 29, 61, 47, 34];
        echo "array numbers: ";
        print_r($numbers);
        // Lakukan Looping di sini
        foreach($numbers as $value) {
            $rest[] = $value % 5;
        };


        echo "<br>";
        echo "Array sisa baginya adalah 5:  "; 
        echo "<br>";
        print_r($rest);
        

        echo "<h3> Soal No 3 Looping Asociative Array </h3>";
        
        $items = [
            ["001", "Keyboard Logitek", "60000", "Keyboard yang mantap untuk kantoran", "logitek.jpeg"],
            ["002", "Keyboard MSI", "300000", "Keyboard gaming MSI mekanik", "msi.jpeg"],
            ["003", "Mouse Genius", "50000", "Mouse Genius biar lebih pinter", "genius.jpeg"],
            ["004", "Mouse Jerry", "30000", "Mouse yang disukai kucing", "jerry.jpeg"]

        ];

        foreach($items as $indexArray){
            $users = [
                "id" => $indexArray[0],
                "name" => $indexArray[1],
                "price" => $indexArray[2],
                "description" => $indexArray[3],
                "source" => $indexArray[4]
            ];
            print_r($users);
            echo "<br>";
        }
            
       
        echo "<h3>Soal No 4 Asterix </h3>";
        
        for($k=1; $k<=5; $k++){
            for ($l=1; $l <= $k ; $l++) {
                echo "*";
            }
            echo "<br>";
        }
        

    ?>

