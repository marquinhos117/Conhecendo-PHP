<div class="titulo">Operadores Relacionais</div>

<link rel="stylesheet" href="assets/css/estilo.css">
<?php

echo var_dump(1 == 1) . "<br>"; //TRUE
echo var_dump(1 > 1) . '<br>';  //FALSE
echo var_dump(1 >= 1) . '<br>'; //TRUE
echo var_dump(1 <= 1) . '<br>'; //TRUE
echo var_dump(1 != 1) . '<br>'; //FALSE
echo var_dump(1 <> 1) . '<br>'; //FALSE

echo var_dump(1 == '1') . '<br>';   //TRUE
echo var_dump(1 === '1') . '<br>';  //FALSE
echo var_dump(1 != '1') . '<br>';   //FALSE
echo var_dump(1 !== '1') . '<br>'; //TRUE

echo '<p class="divisao">Relacionais no IF/ELSE</p><hr>';
$idade = 25;
if($idade < 18){
    echo "Menor de idade, $idade anos.<br>";
}else if($idade <= 65){
    echo "Adulto, $idade anos.<br>";
}else{
    echo "Terceira idade, $idade anos.<br>";
}

echo "<p class='divisao'>Spaceship</p><hr>";
var_dump(5 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);

echo "<p class='divisao'>Valores podem ser verdadeiros ou falsos</p><hr>";
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");
