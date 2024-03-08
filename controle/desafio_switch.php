<div class="titulo">Desafio Switch</div>


<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metro > Km</option>
        <option value="km-metro">Km > Metro</option>
        <option value="celsius-fahrenheit">celsius > fahrenheit</option>
        <option value="fahrenheit-celsius">fahrenheit > celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php

$valorB = $_POST['param'];
$valor = substr($valorB, 0, 5);
$operacao = $_POST['conversao'];



    switch(strtolower($operacao)){
        case 'km-milha':
            $valorMilha = (float)$valor / 1.609;
            echo "Conversão de $valor quilômetros para $valorMilha milhas.<br>";
            break;
        case 'milha-km':
            $valorKm = $valor / 0.62137;
            echo "Conversão de $valor milhas para $valorKm quilômetros.<br>";
            break;
        case 'metro-km':
            $valorMetro = $valor / 1000;
            echo "Conversão de $valor metros para $valorMetro quilômetros.<br>";
            break;
        case 'km-metro':
            $valorKm2 = $valor / 0.001;
            echo "Conversão de $valor quilômetros para $valorKm2 metros.<br>";
            break;
        case 'celsius-fahrenheit':
            $fh = 1.8 * $valor + 32;
            echo "Conversão de $valor" . '° ' . "celsius para $fh fahrenheit<br>";
            break;
        case 'fahrenheit-celsius':
            $cs = ($valor - 32) / 1.8;
            echo "Conversão de $valor fahrenheit para $cs" . "° celsius<br>";
            break;
        default:
            echo "Nenhum valor passado.";
            }

// RESPOSTA AULA
const FATOR_KM_MILHA = 0.621371;
const FATOR_KM_METRO = 1000;
const FATOR_CEL_FAH = 1.8;


$param = $_POST['param'] ?? 0;
switch ($_POST['conversao']){
    case 'km-milha':
        $distancia = (float)$param * FATOR_KM_MILHA;
        $mensagem = "$param Milhas = $distancia Km.<br>";
        break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milhas = $distancia Km.<br>";
        break;
    case 'metro-km':
        $distancia = $param / FATOR_KM_METRO;
        $mensagem = "$param MEtros = $distancia km.<br>";
        break;
    case 'km-metro':
        $distancia = $param * FATOR_KM_METRO;
        $mensagem = "$param Km = $distancia Metros.<br>";
        break;
    case 'celsius-fahrenheit':
        $conn = $param * FATOR_CEL_FAH +32;
        $con = substr($conn, 0, 5);
        $mensagem = "{$param}° Celsius = {$con} Fahrenheit";
        break;
    case 'fahrenheit-celsius':
        $conn = ($param - 32) * (1 / FATOR_CEL_FAH);
        $con = substr($conn, 0, 5);
        $mensagem = "$param'°' Fahrenheit = $con'°' Celsius";
        break;
    default:
        $mensagem = "Nenhum valor foi passado.<br>";
        break;
}
    echo $mensagem;
?>