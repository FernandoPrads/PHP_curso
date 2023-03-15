<?php

//conexão com o banco em PDO
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY idusuario");
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC); //traz todas as linhas

foreach ($results as $row) {
    foreach ($row as $key => $value) {
    
        echo "<strong>".$key.": </strong>" .$value. "<br/>";
    }

    echo "=============================================================<br>";
}


?>