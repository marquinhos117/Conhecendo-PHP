<div class="titulo">Construtor & Destrutor</div>
<?php

    class Pessoa{
        public $nome;
        public $idade;

        public function __construct($novoNome, $idade){ //metodo
            echo 'Construtor invocado! <br>';
            $this->nome = $novoNome;
            $this->idade = $idade;
        }
        public function __destruct(){           //metodo
            echo 'E morreu! <br>';
        }
        public function apresentar(){           //metodo
            echo "{$this->nome}, {$this->idade} anoos.<br>";
        }
    }

$pessoaA = new Pessoa('Rebeca', 40);
$pessoaB = new Pessoa('Marcos', 22);

$pessoaA->apresentar();
unset($PessoaA);

$pessoaB->apresentar();
$pessoaB = null;