<div class="titulo">DEsafio operadores lógicos</div>



<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (terça)</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select><br>
        <label for="t2">Trabalho 2 (quinta)</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select><br>
    </div>
    <button>Executar</button>



</form>
<style>
    button, select{
        font-size: 1.8rem;
    }
</style>

<?php

#imagine que uma pessoa está em casa domingo e faça a seguinte afirmação para a familia, essa semana eu tenho planejado dois trabalhos, um na terça e outro na quinta e se os dois trabalhos derem certo no fim de semana a familia vai sair reunida para comprar uma televisão de 50 polegadas e pra comemorar vamos tomar sorvete no shipping, caso apenas apenas um dos trabalhos deem certo significa que a familia ainda ira para o shippoing e tomar sorvete, no lugar da tv de 52 polegadas será comprada uma de 32, caso nenhum de certo, a familia ficara em casa no fim de semana e ficara mais saudavel por não ingerir açucar




$t1 = $_POST['t1'];
$t2 = $_POST['t2'];


if($t1 && $t2){
    echo "Todos vão ao shopping comprar uma tv de 52 polegadas e tomar sorvete!";
}else if(($t1 === true && $t2) ||
        ($t1 != $t2)){
    echo "Todos vão ao shopping comprar uma tv de 32 polegadas e tomar sorvete!";
}else{
    echo "Todos vão ficar em casa e mais saudaveis, pois não vão no shopping comprar a tv e nem tomar sorvete! <br> <br>";
}

//resposta video

$tt1 = $_POST['t1'];
$tt2 = $_POST['t2'];
$sorvete = false;
$tv = '';
if($tt1 && $tt2){
    $tv = '50';
}
if($tt1 != $tt2){
    $tv = '32';
}
if($tt1 || $tt2){
    $sorvete = true;
}

if($tv){
    $resultado = "<br>Vamos comprar uma tv de $tv polegadas";
}else{
    $resultado = "Sem tv dessa vez :(";
}

$saudavel = !$sorvete;

if($saudavel){
    $resultado .= '<br>Estamos mais saudaveis!';
}else{
    $resultado .= '<br>Sorvete liberado!';
}
echo $resultado;
