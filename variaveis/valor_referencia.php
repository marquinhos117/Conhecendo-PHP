<div class="titulo">Valor vs Referência</div>

<?php

$variavel = 'valor inicial';
echo "$variavel<br>";
//Atribuição por valor
$variavelValor = $variavel;
echo "$variavelValor<br>";
$variavelValor = "novo valor<br>";
echo "$variavel<br>";
echo "$variavelValor";

//Atribuição por referência
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';
echo "$variavel<br>$variavelReferencia";
