<div class="titulo">Tipo Boleano</div>

<?php

    echo true;
    echo '<br>';
    echo false;

    echo '<br>' . var_dump(true);
    echo '<br>' . var_dump(false);
    echo '<br>' . var_dump('false'); //interpretado como string
    echo '<br>' . is_bool(false); //verifica se é boleano
    echo '<br>' . is_bool('false'); //verifica se é boleano

    // fazer regras de conversão

    echo '<p>Regras:</p>';
    echo '<br>' . var_dump((bool) 0); // Zero representa falso, logo será convertido para bool, no caso falso
    echo '<br>' . var_dump((bool) 1); // Apenas zero é falso, todo o restante é true
    echo '<br>' . var_dump((bool) 50);
    echo '<br>' . var_dump((bool) "");// Vazio é igual a false
    echo '<br>' . var_dump((bool) " ");// Não vazio, não false
    echo '<br>' . var_dump((bool) "0");// true, por se tornar um 'texto'
    echo '<br>' . var_dump((bool) "00");// true, por se tornar um 'texto'
    echo '<br>' . var_dump((bool) "false");// true, por se tornar um 'texto'
?>