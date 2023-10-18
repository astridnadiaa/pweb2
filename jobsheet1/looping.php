<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php
        echo "Perulangan FOR Bilangan Genap dari 1 hingga 10 </br>";
        for ($x=2; $x <= 10 ; $x+=2) { 
            echo "$x </br>";
        }
        echo "<br> Perulangan WHILE Bilangan Ganjil dari 1 hingga 10 </br>";
        $y=1;  
        while ($y <= 10) {
            $y += 2;
            echo "$y </br>";
        }

        echo "<br> Perulangan DO...WHILE Bilangan Prima kurang dari 20 </br>";
        $a=2;
        do {
            $prima = true;

            if ($a < 2) {
                $prima = false;
            }
            else {
                for ($i=2; $i < $a ; $i++) { 
                    if ($a % $i == 0) {
                        $prima = false;
                        break;
                    }
                }
            }
            if ($prima) {
                echo $a . "</br>";
            }

            $a++;
        } 
        while ($a < 20);
    ?>
</body>
</html>