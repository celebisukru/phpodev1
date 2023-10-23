<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function cizUcgen($satirSayisi) {
    $satir = 1;
    
    while ($satir <= $satirSayisi) {
        for ($i = 1; $i <= $satir; $i++) {
            echo "* ";
        }
        echo "<br>";
        $satir++;
    }
}

$satirSayisi = 10; // Çizilecek satır sayısını burada ayarlayabilirsiniz
cizUcgen($satirSayisi);
?>
   
</body>
</html>