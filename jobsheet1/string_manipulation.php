<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>
<body>
    <?php
        $date="02-05-2023 </br>";
        $x="Selamat belajar PHP!";
        echo "$x <br></br>";
        echo strtoupper ($x)."</br>"; // mengubah string menjadi huruf kapital
        echo strtolower ($x)."</br>"; // mengubah string menjadi huruf kecil
        echo substr ($x,0,7)."</br>"; // memotong string
    ?>
</body>
</html>