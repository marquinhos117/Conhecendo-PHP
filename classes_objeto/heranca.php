<div class="titulo">Herança</div>

<?php
    //classe Pai
    class Pessoa {
        public $nome;
        public $idade;

            function __construct($nome, $idade){
                $this->nome = $nome;
                $this->idade = $idade;
                echo 'Pessoa criada! <br>';
            }
            function __destruct(){
                echo "Pessoa diz: Tchau!";
            }


    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos.<br>";
    }
}
    //Classe filha
    class Usuario extends Pessoa {
        public $login;

        function __construct($nome, $idade, $login){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->login = $login;
            echo 'Usuario criado!<br>';
        }
        function __destruct(){
            echo "Usuário diz: Tchau!<br>";
            parent::__destruct();
        }

        public function apresentar(){
            echo "@{$this->login}: {$this->nome}, {$this->idade} anos.";
        } //essa função está sobreescrevendo o apresentar da classe pessoa




        public function apresentar2(){
            echo"@{$this->login}: ";
            parent::apresentar();
        }//essa função está adicionando dado a na função pai (informação adicional)

    }
    $usuario = new Usuario("Marcos Eduardo", 22, "ertomo");
    $usuario->apresentar();
    echo '<br>','<br>';
    $usuario->apresentar2();

    unset($usuario);