<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //ini adalah komentar single line
        
        #ini adalah komentar single line
        
        /*Komentar lebih
        dari 
        satu 
        baris*/

        //variable $
        $x = 5 + 15 + 5;
        echo "<br>".$x;
        
        //string
        $namaDepan = "Abdul";
        $namaBelakang = "Harus";
        $namaLengkap = $namaDepan." ".$namaBelakang;
        echo "<br> Nama depan saya : ". $namaDepan;
        echo "<br> Nama belakang saya : ". $namaBelakang;
        echo "<br> Nama lengkap saya : ". $namaLengkap;

        //integer
        $tglMasuk = 2021;
        echo "<br> Tanggal masuk : ". $tglMasuk;
    ?>
</body>
</html>