<div class="titulo">While / Do While</div>

<?php

const VALOR_LIMITE = 5;
$contador = 0;


while($contador < VALOR_LIMITE){
    echo "While $contador ";
    $contador++;
}
echo '<hr>';
$contador = 0;

for(;$contador < VALOR_LIMITE;){
    echo "while $contador ";
    $contador++;
}