<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo de Séries</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <?php
    $banners = ["banner1.png","banner2.jpg","banner3.jfif"];
    $sorteio = rand(0,2);
    echo "<img src='$banners[$sorteio]' class='imagem-banner'>";
    ?>
    <h1><br>🎦 Séries 📺 </h1>  
    <br><br>
    <div class = "lista">
        <?php
        $series = ["Ruptura" , "Breaking Bad" , "WesterWorld" , "Barry" , "Black Mirror"];
        $capas = ["ruptura.png" , "bb.png" , "ww.jpg" , "barry.jfif" , "bm.png"];
        
        $numero_series = count($series);
        $contador = 0;
        while($contador < $numero_series){
            echo "<div class='card'>";
            echo "<img  src='$capas[$contador]'>";
            echo "<br> $series[$contador]";
            echo "</div>";

            $contador++;
        }
        ?>
    </div>
</body>
</html>


<?php


?>