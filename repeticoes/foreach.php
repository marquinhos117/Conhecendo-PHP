<div class="titulo">Foreach</div>

<?php

$array = [1 =>'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado'];

foreach($array as $valor){
    echo "$valor; ";
}
echo "<hr>";

foreach($array as $indice => $valor){
    echo "$indice => $valor; ";
}
echo "<hr>";

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

foreach($matrix as $linha){
    foreach($linha as $letra){
        echo "$letra ";
    }
    echo '<br>';
}
echo "<hr>";

$numero = [1, 2, 3, 4, 5];
foreach($numero as &$dobrar){
    $dobrar *= 2;
    echo "$dobrar ";
}
echo "<hr>";