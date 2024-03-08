<div class="titulo">Tipo String</div>

<?php

echo 'Eu sou uma string!';
echo '<br>';
var_dump("Eu também sou!");
echo '<br>';

//Concatenação

echo ("Nós também " . 'somos');
echo '<br>', "também aceito ", "virgula";
echo '<br>';
echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\" ";
print("<br>Também existe a função print!");
print "<br>Também existe a função print!";

//Algumas funções

echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('somente primeira letra');
echo '<br>' . ucwords('todo inicio de palavra');
echo '<br>' . strlen('Calculador de letras ou quantas strings contando acentos e espaços');
echo '<br>' . mb_strlen("Calculador de strings sem contar acentos", "utf-8");
echo '<br>' . substr('Só uma parte mesmo', 7, 6);
echo '<br>' . str_replace('isso', 'aquilo', 'trocar isso');
