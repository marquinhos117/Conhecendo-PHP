<div class="titulo">Visibilidade</div>

<?php

    class A {

        public $publico = 'Público';
        protected $protegido = 'Protegido';
        private $privado = 'Privado';

        public function mostrarA(){

            echo "Class A) Público = {$this->publico}<br>";
            echo "Class A) Protegido = {$this->protegido}<br>";
            echo "Class A) Privado = {$this->privado}<br>";
        }

        protected function vaiPorHeranca(){
            echo "Serei transmitido por herança!";
        }

        private function naoMostrar(){
            echo 'não vou imprimir';
        }
    }
$a = new A();
echo $a->publico, '<hr>';
//echo $a->protegido, '<br>'; //erro por ser protegido (pode a partir de herança ou função que tenha acesso como o exempli abaixo)
//echo $a->privado;  //erro por ser privado

//só pode ser acessadas indiretamente
$a->mostrarA();
//$a->naoMostrar(); fatal erro


echo "FIM!<hr>";

    class B extends A{
        public function mostrarB(){
            echo"Class B) Público = {$this->publico}<br>";
            echo"Class B) Protegido = {$this->protegido}<br>";
            //echo"Class B) Privado = {$this->privado}<br>"; //não é possivel puxar o valor

            parent::vaiPorHeranca();
        }
    }


//B é uma extensão de A. então se $b mostrar A, ele vai mostrar
$b = new B();
$b->mostrarA();
echo '<br>';
$b->mostrarB();
//$b->vaiPorHeranca(); //só pode ser acessa pela classe onde foi recebida por herança


