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
    
    <h1><br> Campeonato Paulista 2024 </h1>
    <br><br>
    <div class = "times">
        <?php
        $times = ["Santo André","Mirassol","Ponte Preta","São Bento","Gremio Novorizontino","Ituano","São Bento","Guarani", "São Caetano", "Inter de Limeira", "Santos", "Red Bull Bragantino", "São Paulo", "Santos", "Palmeiras"];
        $simbolos = ["Santo_Andre_escudo.png","Mirassol_FC_logo.png","i (6).png","i (5).png","i (4).png","i (3).png","baixados (2).png","baixados (1).png","Associação_Desportiva_São_Caetano.png","AAInternacional.png","Santos_Logo.png","i (2).png","baixados.png","Santos_Logo.png","i (1).png","i.png"];
        
        $numero_times = count($times);
        $contador = 0;
        while($contador < $numero_times){
            echo "<div class='card'>";
            echo "<img  src='$simbolos[$contador]'>";
            echo "<br> $times[$contador]";
            echo "</div>";

            $contador++;
        }
        ?>
    </div>
</body>
</html>


<?php


?>