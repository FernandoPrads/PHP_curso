<?php

class Pessoa {

    public $nome;//Atributo

    public function falar(){//Método

        return "O meu nome é ".$this->nome;
    }

}

$Fernando = new Pessoa();
$Fernando->nome = "Fernando Luiz";
echo $Fernando->falar();


?>