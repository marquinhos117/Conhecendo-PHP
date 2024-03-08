<div class="titulo">Desafio Data</div>
<?php

    class Data{
        //atributos
        public $dia = 1;
        public $mes = 1;
        public $ano = 1970;

        public function apresentar(){
            return "{$this->dia}/{$this->mes}/{$this->ano}";
        }
    }

    $data = new Data();
 echo $data->apresentar(), '<br>';

 $data->dia = 17;
 $data->mes = 1;
 $data->ano = 2001;
 echo $data->apresentar(), '<br>';


