<div class="titulo">Laço For</div>

<?php

for($cont = 1; $cont <= 5; $cont++){
    echo "$cont ";
}
echo '<hr>';
for(; $cont <= 10; $cont++){
    echo "$cont ";
}
echo '<hr>';
for(; $cont <= 15;){
    echo "$cont ";
    $cont++;
}
echo '<hr>';

$array = [1 =>'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado'];
print_r($array);
echo '<hr>';

for($i = 1; $i < count($array); $i++){
    echo "{$array[$i]}, ";
}
echo '<hr>';

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

for($i = 0; $i < count($matrix); $i++){
    for($j = 0; $j < count($matrix[$i]); $j++){
        echo "{$matrix[$i][$j]} ";
    }
    echo '<br>';
}
echo '<hr>';