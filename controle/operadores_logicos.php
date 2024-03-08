<div class="class">Operadores lógicos</div>

<div class="bubble"></div>

<style>
  .bubble {
    width: 50px;
    height: 50px;
    background-color: #000;
    border-radius: 50%;
    position: absolute;
    animation: bubble 2s ease-in-out infinite;
  }

  @keyframes bubble {
    0% {
      transform: scale(1);
      opacity: 1;
      bottom: -50px;
    }
    50% {
      transform: scale(1.2);
      opacity: 0.5;
      bottom: 50%;
    }
    100% {
      transform: scale(1);
      opacity: 1;
      bottom: 100%;
    }
  }
</style>

<?php
echo "<p class='divisao'>Negação lógica</p><hr>";
var_dump(true);
echo "<br>";
var_dump(!true);
echo "<br>";

echo "<p class='divisao'>Tabela Verdade 'AND' (E)</p><hr>";
var_dump(true && true); echo "<br>";
var_dump(true && false); echo "<br>";
var_dump(false && true); echo "<br>";
var_dump(false && false); echo "<br>";
var_dump(false && 3 > 2 && 7 <= 7 && 3 === '3'); echo "<br>";

var_dump(true AND true); echo "<br>";
var_dump(true AND false); echo "<br>";
var_dump(false AND true); echo "<br>";
var_dump(false AND false); echo "<br>";

echo "<p class='divisao'>Tabela Verdade 'OR' (OU)</p><hr>";

var_dump(false || false); echo "<br>";
var_dump(true || false); echo "<br>";
var_dump(false || true); echo "<br>";
var_dump(true || true); echo "<br>";


var_dump(false OR false); echo "<br>";
var_dump(true OR false); echo "<br>";
var_dump(false OR true); echo "<br>";
var_dump(true OR true); echo "<br>";




echo "<p class='divisao'>Tabela Verdade 'XOR' (OU EXCLUSIVO)</p><hr>";

var_dump(false XOR false); echo "<br>";
var_dump(true XOR false); echo "<br>";
var_dump(false XOR true); echo "<br>";
var_dump(true XOR true); echo "<br>";

var_dump(false != false); echo "<br>";
var_dump(true != false); echo "<br>";
var_dump(false != true); echo "<br>";
var_dump(true != true); echo "<br>";


echo "<p class='divisao'>Exemplo</p><hr>";

$idade = 64;
$sexo = 'M'; echo "<br>";


$pagouPrevidencia = true;

$criterioHomem = ($idade <= 65 && $sexo === 'M');
$criterioMulher = ($idade <= 60 && $sexo === 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;

    echo "Pode se aposentar --> $podeSeAposentar!<br>";

if ($idade >= 60 && $sexo === 'F') {
    echo "Pode se aposentar";
}else if($idade >= 65 && $sexo === 'M'){
    echo "Pode se aposentar";
}else if($idade <= 60 && $sexo === 'F'){
    echo "Trabalhe mais!";
}else{
    echo "Vai trabalhar mais vagabundo!";
}






?>



