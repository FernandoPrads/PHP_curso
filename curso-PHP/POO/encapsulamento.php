<?php
echo "--Exemplo 1 ---------------------------------------------------------------->";
echo "<br>";

class Pessoa {

    public $nome = "Fernando";
    protected $idade = "38";
    private $senha = "1234";

    public function verDados(){

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha .  "<br/>";
    }
}

$objeto = new pessoa();

//echo $objeto->senha . "<br/>";

$objeto->verDados();
echo "<br>";
echo "--Exemplo 2 ---------------------------------------------------------------->";
echo "<br>";
?>
<?php

class Programador extends Pessoa {

    public function verDados(){

        echo get_class($this) . "<br/>";

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha .  "<br/>";
    }



}

$objeto = new Programador();

$objeto->verDados();//da erro na senha, pois a variavel é private.

?>