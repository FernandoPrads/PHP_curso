<?php

class Carro {

    private $modelo;
    private $motor;
    private $ano;


    //seters and geters
    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getMotor(){
        return $this->motor;
    }

    public function setMotor($motor){
        $this->motor = $motor;
    }

    public function getano():int{
        return $this->ano;
    }

    public function setano($ano){
        $this->ano = $ano;
    }

    //mostrando os valores
    public function exibir(){
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getano()
        );
    }

}

$gol = new Carro();
$gol->setModelo ("Gol GT");
$gol->setMotor ("1.8 Turbo");
$gol->setano ("2007");

var_dump($gol->exibir());
?>