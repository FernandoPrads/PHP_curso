<?php
echo "--Exemplo 1 ---------------------------------------------------------------->";
echo "<br>";
$pessoas = array();

array_push($pessoas, array(
    'nome' => 'Noah',
    'idade' => 3
));

array_push($pessoas, array(
    'nome' => 'Guilherme',
    'idade' => 16
));
echo "<br>";
echo "<br>";
echo "--Exemplo 2 ---------------------------------------------------------------->";
echo "<br>";
//mostrando em JSON
echo json_encode($pessoas);

echo "<br>";
echo "<br>";
echo "--Exemplo 3 ---------------------------------------------------------------->";
echo "<br>";
//mostrando em array
$json = '[{"nome": "Noah", "idade": 3},{"nome": "Guilherme", "idade": 16}]';
$data = json_decode($json, true);
var_dump($data);
?>