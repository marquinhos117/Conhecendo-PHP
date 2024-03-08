<div class="titulo">Desafio String</div>

<?php

// Enunciado:
// Avaliando os métodos da documentação da string,
// Qual o método que a posição do texto 'abc'
// Na string '!AbcaBcabc' retorne 1?

echo strpos('!AbcaBcabc', 'abc') . '<br>'; //Retorna a posição numérica da primeira ocorrência de needle dentro de haystack. Diferentemente de strrpos(), esta função pode ter uma string inteira como o parâmetro needle e toda a string será usada.

echo stripos('!AbcaBcabc', 'abc'); //Retorna a posição numerica da primeira ocorrencia de needle na string haystack. Diferentemente de strpos(), stripos() não diferencia maiúsculas e minúsculas. *(correta)*



?>