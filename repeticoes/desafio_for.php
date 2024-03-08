<div class="titulo">Desafio For</div>
<!--
    usar for para gerar...
    #
    ##
    ###
    ####
    #####
    1) pode usar incremento $i++
    2) não pode usar incremento $i++
 -->
<?php
$imprimir = '';
    for($i = 1; $i <= 5; $i++){
        $imprimir .= '#';
        echo "$imprimir <br>";
    }
echo '<hr>';
for($imprimir2 = '#'; $imprimir2 !== '######'; $imprimir2 .= '#'){
    echo "$imprimir2 <br>";
}