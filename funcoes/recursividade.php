<div class="titulo">Recursividade</div>

<?php
//recursividade, soma de 4a1 ou fatorial...

function somaUmAte($numero){
    $soma = 0;
    for (; $numero >= 1; $numero--) {
        $soma += $numero;
    }
    return $soma;
}

echo somaUmAte(150) . '<br>';
//////////////////////////////////////////
function somaRecursivaUmAte($numero){
    //condição de parada
    if($numero === 1){
        return 1;
    }else{
    return $numero + somaRecursivaUmAte($numero - 1);
    }
}

echo somaRecursivaUmAte(150) . '<br>';
/////////////////////////////////////////
function somaRecursivaEconomica($numero){
    return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero - 1);
}
echo somaRecursivaEconomica(150);

// varias dormas de resolver um mesmo problema!!!!!!!