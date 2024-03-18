<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos com preços</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    
    <h1><br> Temperaturas nas Capitais do Brasil </h1>
    <br><br>
    <div class = "clima-capital">
        <?php
        $capital = ["Rio Branco","Maceió","Macapá","Manaus","Salvador","Fortaleza","Brasília","Vitória","Goiânia","São Luís","Cuiabá","Campo Grande","Belo Horizonte","Belém","João Pessoa","Curitiba","Recife","Teresina","Rio de Janeiro","Natal","Porto Alegre","Porto Velho","Boa Vista","Florianópolis","São Paulo","Aracaju","Palmas"];
        $clima = ["31°","27°","28°","29°","26°","28°","22°","24°","26°","27°","30°","29°","23°","29°","28°","18°","28°","30°","27°","28°","20°","30°","31°","22°","23°","28°","31°"];
        $img = ["muito-quente.png","quente.png","quente.png","quente.png","quente.png","quente.png","ok.png","ok.png","quente.png","quente.png","muito-quente.png","quente.png","ok.png","muito-quente.png","muito-quente.png","frio.png","quente.png","muito-quente.png","quente.png","quente.png","frio.png","muito-quente.png","muito-quente.png","ok.png","ok.png","quente.png","muito-quente.png"];

        $numero_capital = count($capital);
        $contador = 0;
        while($contador < $numero_capital){
            echo "<div class='card'>";
            echo "<img  src='$img[$contador]'>";
            echo "<br> $capital[$contador]";
            echo "<br> $clima[$contador]";
            echo "</div>";

            $contador++;
        }
        ?>
    </div>
</body>
</html>


<?php


?>