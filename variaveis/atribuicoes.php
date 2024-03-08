<div class="titulo">Atribuições</div>

<?php

$title = 'Atribuições';

$numero = 10;
echo '<br>' . $numero;
$numero = $numero - 3;
echo '<br>' . $numero;
$numero = $numero + 1.5;
echo '<br>' . $numero;
$numero--;
echo '<br>' . $numero;
++$numero;
echo '<br>' . $numero;
$numero -=5;
echo '<br>' . $numero;
$numero +=5;
echo '<br>' . $numero;
$numero *=5;
echo '<br>' . $numero;
$numero /=5;
echo '<br>' . $numero;
$numero %=5;
echo '<br>' . $numero;
$numero **=5;
echo '<br>' . $numero;
$numero .=5; // Apenas concatenação
echo '<br>' . $numero;


$texto = "Esse é um texto ";
echo '<br>' . $texto;
$texto = $texto . 'qualquer ';
echo '<br>' . $texto;
$texto .= 'de verdade ';
echo '<br>' . $texto;

$inexistente = 'valor inexistente';
echo '<br>' . $inexistente;
$valor = $inexistente ?? 'valor default';
echo '<br>' . $valor;









