<?php

define("SERVIDOR", "127.0.0.1");
define("BANCO_DE_DADOS", [
    '127.0.0.1',
    'root',
    'password',
    'teste'
]);

echo SERVIDOR;
print_r(BANCO_DE_DADOS);
echo "<br>";

echo PHP_VERSION;
echo "<br>";
echo DIRECTORY_SEPARATOR;

?>