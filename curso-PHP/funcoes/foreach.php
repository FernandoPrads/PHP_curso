<?php
echo "--Exemplo 1 ---------------------------------------------------------------->";
echo "<br>";
$meses = array(
            "Janeiro", "Fevereiro", "Março", 
            "Abril", "Maio", "Junho",
            "Julho", "Agosto", "Setembro",
            "Outubro", "Novembro", "Dezembro"
        );

foreach ($meses as $index => $mes) {
    
    echo "Indice: " .$index. "<br>";
    echo "O mês é: " .$mes. "<br><br>";
}
?>

--Exemplo 2 ---------------------------------------------------------------->";

<!--com html------------------------------------------------------------------>


<form>

    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="OK">

</form>

<?php

if (isset($_GET)) {

    foreach ($_GET as $key => $value) {

        echo "Nome do Campo: " . $key . "<br>";
        echo "Valor do Campo: " . $value;
        echo "<hr>";
    }
}
?>