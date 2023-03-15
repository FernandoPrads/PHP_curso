<?php
echo "--Exemplo 2 ---------------------------------------------------------------->";
echo "<br>";
$qualASuaIdade = 70;

$idadecrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadecrianca) {
    echo "Criança";
} else if ($qualASuaIdade < $idadeMaior) {
    echo "Adolecente";
} else if ($qualASuaIdade < $idadeMelhor) {
    echo "Adulto";
} else {
    echo "Idoso";
}

echo "<br>";
echo "<br>";
echo "--Exemplo 2 ---------------------------------------------------------------->";
echo "<br>";

//Operador Ternario
echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";

?>