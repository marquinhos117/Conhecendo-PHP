<div class="titulo">Constantes</div>

<?php

define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS . '<br>';
//echo $TAXA_DE_JUROS . '!<br>';

const NOVA_TAXA = 2.5;
echo NOVA_TAXA . '<br>';

$valorVariavel = 2.8;
//define('NOVISSIMA_TAXA', $valorVariavel);
// const NOVISSIMA_TAXA = $valorVariavel
const NOVISSIMA_TAXA = 2.8 + 1.2;
echo NOVISSIMA_TAXA . '<br>';
echo PHP_VERSION . '<br>';
echo PHP_INT_MAX . '<br>';

echo 'Linha: ' . __LINE__ . '<br>';
echo 'Arquivo: ' . __FILE__ . '<br>';
echo 'Diretório: ' . __DIR__ . '<br>';
