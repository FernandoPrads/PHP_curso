<?php
echo "--Exemplo 1 ---------------------------------------------------------------->";
echo "<br>";
echo date("d/m/Y H:i:s");
date_default_timezone_set('America/Sao_Paulo'); //hora de São  Paulo
echo "<br>";
echo time(); //mostrar timestump
echo "<br>";
echo "<br>";
echo "--Exemplo 2 ---------------------------------------------------------------->";
echo "<br>";


$ts = strtotime("2001-09-11");

echo date("l, d/m/Y", $ts);
echo "<br>";
echo "<br>";
echo "--Exemplo 3 ---------------------------------------------------------------->";
echo "<br>";


setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese"); //localização

echo strftime("%A %B"); 
echo "<br>";
echo "<br>";
echo "--Exemplo 4 ---------------------------------------------------------------->";
echo "<br>";


$dt = new DateTime();

$periodo = new DateInterval("P15D"); //+ 15 dias na variavel $periodo

echo $dt->format("d/m/Y H:i:s");

$dt -> add($periodo);

echo "<br>";

echo $dt->format("d/m/Y H:i:s");

?>
