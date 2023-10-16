<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi</title>
</head>
<body>
    
    
    <form method="post" action="">
        <h2>Luas Persegi Panjang</h2>
            Masukkan Panjang : <input type="text" name="p"><br></br>
            Masukkan Lebar : <input type="text" name="l">
            <input type="submit" name='submit_persegi' value="Hitung">
        <h2>Luas Persegi Panjang</h2>
            Masukan Jari-jari : <input type="text" name="r">
            <input type="submit" name='submit_lingkaran' value="Hitung">
    </form>

    <?php
        function persegi_panjang ($p, $l) {
            return $p * $l;
        }
        function lingkaran ($r) {
            return 3.14 * $r * $r;
        }
        // isset untuk membuat perubahan nilai variable 
        if (isset($_POST["submit_persegi"])) {
        $p = $_POST["p"];
        $l = $_POST["l"];
        echo "Luas Persegi Panjang dengan panjang $p dan lebar $l adalah: ". persegi_panjang($p,$l). "</br>";
        }
        if (isset($_POST["submit_lingkaran"])){
        $r = $_POST["r"];
        echo "Luas Lingkaran dengan jari-jari $r dan lebar adalah: ". lingkaran($r);
        }

       

    ?>
    
</body>
</html>