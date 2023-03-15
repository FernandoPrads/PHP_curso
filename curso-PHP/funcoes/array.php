<?php
echo "--Exemplo 1 ---------------------------------------------------------------->";
echo "<br>";
//array simples
$frutas = array("laranja", "abacaxi", "melancia");
print_r($frutas) . "<br>";
echo "<br>";
echo "<br>";
echo "--Exemplo 2 ---------------------------------------------------------------->";
echo "<br>";

//array bidimensional
$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco-Sport";

echo $carros[0][3];

echo end($carros[1]);
echo "<br>";
echo "<br>";
echo "--Exemplo 3 ---------------------------------------------------------------->";
echo "<br>";

//exemplo de array
$pessoas = array();

array_push($pessoas, array(
    'nome' => 'Noah',
    'idade' => 3
));

array_push($pessoas, array(
    'nome' => 'Guilherme',
    'idade' => 16
));

print_r($pessoas[1]);
?>