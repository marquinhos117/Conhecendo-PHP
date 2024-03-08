<div class="titulo">Palindromo</div>

<?php

function palindromo($p){
    $ultimo = strlen($p) - 1;
    for($i = 0; $i <= $ultimo; $i++){
        if($p[$i] !== $p[$ultimo - $i]){
          return "Não é palindromo";
        }
    }
    return "É palindromo";
}
echo palindromo('arara') . ' ';
echo palindromo('carro') . ' ';
echo '<br>';

    function palindromoSimples($p){
        return $p === strrev($p) ? "É palindromo" : "Não é palindromo";
    }

    echo palindromoSimples('arara') . ' ';
    echo palindromoSimples('carro') . ' ';
