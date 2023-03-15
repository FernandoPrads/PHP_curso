<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Fernando Pradela");
$cad->setEmail("Fernando.Pradela@PHP.com");
$cad->setSenha("Pradela");

$cad->registrarVenda();

?>