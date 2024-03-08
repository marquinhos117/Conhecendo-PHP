<div class="titulo">Variáveis</div>
<?php

$numeroA = 22;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;
echo $soma, '<br>';

echo isset($soma);

unset($soma);
var_dump($soma); //depois de não setar a soma vai ser null o valor

$variavel = 10;
echo '<br>' . $variavel;

$variavel = 'agora sou string';
echo '<br>' . $variavel;

// Nomes de variavel

$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida';
// $6var = 'invalida';
// $%var7 = 'invalida';
// $var8% = 'invalida';

echo'<br>';
var_dump($_SERVER["HTTP_HOST"]);

?>