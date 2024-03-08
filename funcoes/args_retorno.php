<div class="titulo">Argumentos e Retorno</div>

<?php

function obterMensagem(){
    return 'Seja bem vindo!';
}

obterMensagem();
$n = obterMensagem();
echo $n;
echo '<br>' . obterMensagem();
echo '<br>';

var_dump(obterMensagem());

function obterMensagemComNome($nome){
    return "Bem vindo, {$nome}!";
}

echo '<br>';
echo obterMensagemComNome('Marcos');
echo '<br>';
echo obterMensagemComNome('Eduardo');

function soma($a, $b){
    return $a + $b;
}

echo '<br>', soma(4, 50);
echo '<br>', soma($x, $y);

function trocaValor($a, $novoValor){
    $a = $novoValor;
}

$variavel = 1;

trocaValor($variavel, 3);
echo '<br>', $variavel;

function trocaValorDeVerdade(&$a, $novoValor){
    $a = $novoValor;
}

trocaValorDeVerdade($variavel, 5000);
echo '<br>', $variavel;