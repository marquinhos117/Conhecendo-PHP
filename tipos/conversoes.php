<div class="titulo">Conversões</div>

<?php

    echo is_int(PHP_INT_MAX);

    // Int para float
    echo '<p>Int para float</p>';
    echo '<br>';
    var_dump(PHP_INT_MAX + 1);
    echo '<br>';
    var_dump(1 + 1.0);
    echo '<br>';
    var_dump((float) 3);
    echo '<br>';

    // Float para int
    echo '<p>Float para int</p>';
    echo '<br>';
    var_dump((int) 6.8);
    echo '<br>';
    var_dump((intval(6.8)));
    echo '<br>';
    var_dump((int) round(6.8));
    echo '<br>';

    // Operações com string
    echo '<p>Strings</p>';
    echo '<br>';
    var_dump(3 + "2");
    echo '<br>';
    var_dump(3 . "2"); // concatenação
    echo '<br>', is_string("3" . 2); // resultado vai ser true = 1
    echo '<br>', is_string("3" + 2); // resultado false = 0 = vazio
    #var_dump(1 + "cinco"); // Fatal erro, mas o resultado seria 1
    #var_dump(1 + "5 cinco"); // Erro, mas o resultado é 6, pois pega o primeiro numero da string


?>