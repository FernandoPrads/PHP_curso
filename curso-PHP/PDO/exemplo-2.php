<?php

//conexão com SQL Server
$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "root", "");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY idusuario");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC); //traz todas as linhas

echo json_encode($results);


?>