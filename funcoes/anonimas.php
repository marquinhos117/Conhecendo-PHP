<div class="titulo">Funções Anônimas</div>

<?php

$soma = function ($a, $b) {
    return $a + $b;
};

echo $soma(11, 3);
echo '<br>';

function executar($a, $b, $op, $funcao){
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado <br>";
}
executar(2, 3, '+', $soma);

$multitplicacao = function($a, $b){
    return $a * $b;
};

executar(2, 3, '*', $multitplicacao);

//function divisao($a, $b){
//    return $a / $b;
//}
$divisao = function($a, $b){
    return $a / $b;
};
executar(9, 3, '/', $divisao);