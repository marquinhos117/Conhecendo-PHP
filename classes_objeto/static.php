<div class="titulo">Membros Estaticos</div>

<?php


    class A{
        public $naoStatic = "Variável de instância";
        public static $static = "Variável de classe (estática)";

        public function mostrarA(){
            //tentaiva1
            echo "Não estática = {$this->naoStatic}<br>";
            //echo "Estática = {$this->static}<br>"; error
            //tentaiva2
            //echo "Estática = {self::$static}<br>";
            //tentaiva3
            echo "Estática = ". self::$static . "<br>";
        }

        public static function mosrtarStaticA(){
            //echo "Não estático = {$this->naoStatic}<br>";
            echo "Estática = " . self::$static . "<br>";
        }
    }

    //$objetoA = new A();   via instancia
    //$objetoA->mostrarA();  via instancia
    //$objetoA->mosrtarStaticA();   via instancia // não é a forma ideal
    echo A::$static . "<br>"; //forma ideal de acessar
    A::mosrtarStaticA();  //forma ideal de acessar

    A::$static = "Membro de classe alterado!";
    echo A::$static . "<br>"; //forma ideal de acessar
