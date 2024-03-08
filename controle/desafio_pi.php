<div class="titulo">Desafio PI PHP</div>

<?php

echo pi() . '<br>';
$pi = 3.14;

var_dump($pi); echo '<br>';
var_dump(pi()); echo '<br>';

if($pi === pi()){
    echo "São iguais!<br>";
}else{
    echo "Não são iguais!<br>";
}

echo "<p>Resposta</p>";

if($pi - pi() <= 0.01){
    echo "São iguais!";
}else{
    echo "Não são iguais!";
}