<?php

//conexão com o banco
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 3;

$stmt->execute(array($id));

//não fazer
//$conn->rollback();

//fazer
$conn->commit();

echo "Delete OK!";

?>