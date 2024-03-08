<div class="titulo">Argumentos Variáveis</div>

<?php


function soma($a, $b){
    return $a + $b;
}

echo soma(1, 8) . '<br>';
echo soma(7, 3) . '<br>';

function somaCompleta(...$numeros){

    $soma = 0;
    foreach($numeros as $num){
        $soma += $num;
    }
    return $soma;
}

echo somaCompleta(1, 2 , 9, 11, 24) . '<br>';

$array = [1, 9, 4, 6, 2];

echo somaCompleta(...$array) . '<br>';

function membros($titular, ...$dependentes){
    echo "Titular: $titular <br>";
    foreach($dependentes as $dep){
        echo "Dependente: $dep <br>";
    }
}

echo '<hr>';
membros("Ana Silva", "Pedro", "Rafaela", "Amanda");
echo '<hr>';
membros("Roberto", "Junior");
echo '<hr>';