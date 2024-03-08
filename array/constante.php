<div class="titulo">Constantes</div>

<?php

const FRUTAS = ['laranja', 'abacaxi'];
//FRUTAS[0] = 'banana';
//FRUTAS[] = 'banana';]
echo FRUTAS[0];

const CARROS = ["fiat" => "Uno", "ford" => "Fiesta"];
//CARROS["BMW] = '325I';
echo '<br>' . CARROS["fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
//CIDADES[0] = 'Rio de Janeiro';
echo '<br>' . CIDADES[1];