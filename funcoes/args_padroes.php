<div class="titulo">Argumentos Padrões</div>

<?php

function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente'){
   return "Bem vindo, $nome $sobrenome!<br>";
}

echo saudacao();
echo saudacao(NULL);
echo saudacao(NULL, NULL);
echo saudacao('Marcos', 'Eduardo');

function anotarPedido($comida, $bebida = 'Água'){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido('Hamburguer');
anotarPedido('Pizza', 'Refrigerante');


function anotarPedido2($bebida = 'Água', $comida){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";

}

//anotarPedido2('Hamburguer');
anotarPedido2('Refrigerante2', 'Hamburguer2');
