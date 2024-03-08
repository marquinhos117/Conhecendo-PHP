<div class="titulo">Map & Filter</div>

<?php

$notas = [5.8, 7.3, 9.8, 6.7];
$notasFinais = [];


foreach($notas as $nota){
    $notasFinais[] = round($nota); //arredonda as notas
}

print_r($notasFinais);
echo '<br>';

$notasFinais2 = array_map('round', $notas);
print_r($notasFinais2);

// filter usando foreach
$apenasAprovados1 = [];
foreach($notas as $nota){
    if($nota >= 7){
        $apenasAprovados1[] = $nota; //arredonda as notas
    }
}
echo '<br>';
print_r($apenasAprovados1);

function aprovados($nota){
    return $nota >= 7; //saber se um aluno é aprovado
}

echo '<br>';
$apenasAprovados2 = array_filter($notas, 'aprovados');// filter é apenas aqui
print_r($apenasAprovados2);

function calculoLegal($nota){
    $notaFinal = round($nota) + 1;
    return $notaFinal > 10 ? 10 : $notaFinal;
}
echo '<br>';
$notasFinais3 = array_map('calculoLegal', $notas);
print_r($notasFinais3);