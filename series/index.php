<h1>Olá, estou aprendendo PHP!</h1>
<p>E que diferença vai fazer isso na minha vida?</p>

<?php
$n1 = 10;
$n2 = 2; 

echo $n1;
echo "<em> Esse é o número 1</em>" . "<br>";

echo "<br>" . $n2 . "<br>" . "<br>";
echo $n1 . " " . "<br>" . "<br>";
echo "<strong>" . $n1 . " + " . $n2 . " = " . ($n1+$n2) . "<br>" . "<br>";
echo $n1 . " - " . $n2 . " = " . ($n1-$n2) . "<br>" . "<br>";
echo $n1 . " * " . $n2 . " = " . ($n1*$n2) . "<br>" . "<br>";
echo $n1 . " / " . $n2 . " = " . ($n1/$n2) . "<br>" . "<br>" . "</strong>";

$nome = "Flavio";
$idade = 38;

echo "Olá eu sou o <strong> $nome </strong> e tenho $idade anos . <br>";
?>


/* exemplo de laço pulando certo elemento (trem)*/


<?php
$transportes = ["🚗", "✈" , "🚂" , "🛵"];
$numero = 0;
while($numero <= 3){

    if($numero == 2){
        echo "<br>";
    }else{
        echo $transportes[$numero] . "<br>";
}
$numero++;
}
?>