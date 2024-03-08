<div class="titulo">Operações Aritméticas</div>

<?php

echo 1 + 1, '<br>';
var_dump(1 + 1);
echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>'; // mesmo não tendo nenhum float em uma divisão ele vai gerar um resultado float ao menos que você diga para gerar inteiro
echo intdiv(7, 4), '<br>';
echo round(7 / 4), '<br>'; //ele arednoda o resultado da divisão
echo 7 % 4, '<br>'; //modulo para saber se o numero é par ou ímpar
// echo 7 / 0, '<br>'; # erro!, linha comentada para rodar o proximo echo
echo 7 ** 2, '<br>'; // exponenciação
echo 8 ** 2, '<br>'; // exponenciação
echo 7 ** 0, '<br>'; // exponenciação

// Precedência de operadores:
// () => ** => / * % => + -
echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) ** 2, '<br>';
