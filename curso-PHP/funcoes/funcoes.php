<?php
echo "--Exemplo 1 ---------------------------------------------------------------->";
echo "<br>";
function salario(){

    return 946.00;
}

echo "José recebeu 3 salarios: ".(salario()*3);
echo "<br>";
echo "<br>";
echo "--Exemplo 2 ---------------------------------------------------------------->";
echo "<br>";

function ola($texto = "mundo", $periodo="Bom dia"){

    return "Ola $texto! $periodo! <br>";
}

echo ola("", "Boa noite");
echo ola("Glaucio", "Boa tarde");
echo ola("João", "");
echo ola();
echo "<br>";
echo "--Exemplo 3 ---------------------------------------------------------------->";
echo "<br>";

$a = 10;

function trocaValor(&$a){

    $a += 50;
    return $a;

}

echo  trocaValor($a);
echo "<br>";
echo $a;
echo '<br>';

echo "<br>";
echo "--Exemplo 4 ---------------------------------------------------------------->";
echo "<br>";

$pessoa = array(
    'nome'=>'João',
    'idade'=>20
);

foreach ($pessoa as &$value) {

    if (gettype($value)== 'integer') $value += 10;

    echo $value. '<br>';
}
print_r($pessoa);
echo "<br>";
echo "<br>";
echo "--Exemplo 5 ---------------------------------------------------------------->";
echo "<br>";

$hierarquia = array(
    array(
        'nome_cargo'=>'CEO',
        'subordinados'=>array(
            //Inicio: Diretor Comercial
            array(
                'nome_cargo'=>'Diretor Comercial',
                'subordinados'=>array(
                    //Inicio: Gerente de Vendas
                    array(
                         'nome_cargo'=>'Gerente de Vendas',
                    )
                    //Termino: Gerente de Vendas
                )
            ),    
            //Termino: Diretor Comercial
            //Inicio: Diretor Financeiro
            array(
                'nome_cargo'=>'Diretor Financeiro',
                'subordinados'=>array(  
                    //Inicio: Gerente de Contas a Pagar
                    array(  
                        'nome_cargo'=>'Gerente de Contas a Pagar',
                        'subordinados'=>array(
                            //Inicio: Supervisor de Pagamentos
                            array(
                                'nome_cargo'=>'Supervisor de Pagamentos'
                            )
                            //Termino: Supervisor de Pagamentos    
                        )
                    ),   
                 //Termino: Gerente de Contas a Pagar
                 //Inicio: Gerente de Compras
                    array(
                        'nome_cargo'=>'Gerente de Compras',
                        'subordinados'=>array(
                            //Inicio: Supervisor de Suprimentos
                           array(
                               'nome_cargo'=>'Supervisor de Suprimentos'
                            )
                            //Termino: Supervisor de Suprimentos
                        )
                    )
                     //Termino: Gerente de Compras
                )
            )
        
          //Termino: Diretor Financeiro
        )
    )
);

function exibe($cargos) {

    $html = '<ul>';

    foreach ($cargos as $cargo) {

        $html .= "<li>";
        $html .= $cargo['nome_cargo'];

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
            $html .= exibe($cargo['subordinados']);
        }

        $html .= "</li>";

    }

    $html .= "</ul>";
    return $html;
}

echo exibe($hierarquia);

echo "<br>";
echo "<br>";
echo "--Exemplo 6 ---------------------------------------------------------------->";
echo "<br>";

function test ($callback) {
    //Processo lento

    $callback();
}

test(function(){

    echo "Terminou!";
});
echo "<br>";
echo "<br>";
echo "--Exemplo 7 ---------------------------------------------------------------->";
echo "<br>";

$fn = function($a){

var_dump($a);

};

$fn("Oi");

?>