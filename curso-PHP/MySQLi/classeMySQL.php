<?php

//conexão com o banco (não é PDO)
$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
}

//--------------------------------------------------------------------------------
 //Salvando dados no banco
/*$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "1234";

$stmt->execute();

$login = "root";
$pass = "4321";

$stmt->execute();*/

//-----------------------------------------------------------------------------
//lendo os dados do banco em array
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");


while ($row = $result->fetch_array(MYSQLI_ASSOC)){

    var_dump($row);
}


//--------------------------------------------------------------------------------
//retorna em Json
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");
$data = array();
while ($row = $result->fetch_array(MYSQLI_ASSOC)){
    array_push($data, $row);
}
    echo json_encode($data);

?>