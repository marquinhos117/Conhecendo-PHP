<div class="titulo">Desafio Impressão</div>

<?php
/*
 Imprima apenas os valores do array que contém índice par
 Desafio adicional: Resolver com for e foreach
 Valores operados: AAA, CCC, EEE
*/
$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

for($i = 0; $i < count($array); $i++){
    if($i %2 !== 0) continue;
    echo "{$array[$i]} ";
}
echo '<hr>';
foreach($array as $chave => $valor){
    if($chave %2 == 1) continue;
    echo "$valor ";

}