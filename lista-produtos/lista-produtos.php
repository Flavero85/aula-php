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
    
    <h1><br> Lista produtos comparação preços </h1>
    <br><br>
    <div class = "produtos">
        <?php
        $produtos = ["Achocolatado Pó Nescau Lata 670g","Desinfetante Pinho Sol Lavanda 1,75l","Suco Em Pó Trink Uva 15g","Leite Condensado Moça Integral 395g","Sabão Líquido Omo Peças Íntimas e Biquínis 300ml","Enxaguante Bucal Listerine Cool Mint Leve 500ml Pague 350ml","Protetor Solar Sundown FPS 30 Praia e Piscina 200ml","Caixa de Chocolate Lacta Variedades 250,6g"];
        $valor = ["R$ 21,42","R$ 16,9","R$ 0,95","R$ 8,79","R$ 18,99", "R$ 21,99", "R$ 51,99", "R$ 14,59"];
        $foto = ["imagem1.png","imagem2.png","imagem3.jpg","imagem4.jpg","imagem5.png","imagem6.png","imagem7.png","imagem8.jpg"];

        $numero_produtos = count($produtos);
        $contador = 0;
        while($contador < $numero_produtos){
            echo "<div class='card'>";
            echo "<img  src='$foto[$contador]'>";
            echo "<br> $produtos[$contador]";
            echo "<br> $valor[$contador]";
            echo "</div>";

            $contador++;
        }
        ?>
    </div>
</body>
</html>


<?php


?>