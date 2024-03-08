<div class="titulo">Interface</div>

<?php


    interface Animal {
        function respirar();
    }

    interface Mamifero {
        function mamar();
    }

    interface Canino extends Animal, Mamifero {
        function latir(): string; //funções de interfaces são públicas por padrão
    }

        interface Felino{
            function correr();
        }

    class Cachorro implements Animal, Canino {
        function respirar() {
            return "Respirei";
        }

        function latir(): string{
            return "Au Au";
        }

        function mamar(): string{
            return "Mamei";
        }
        function correr(): string{
            return "Corri";
        }
    }

    $animal1 = new Cachorro();
    echo $animal1->respirar(), '<br>';
    echo $animal1->latir(), '<br>';
    echo $animal1->mamar(), '<br>';
    echo $animal1->correr(), '<br>';
    echo '<br>';
    var_dump($animal1);
    echo '<br>';
    var_dump($animal1 instanceof Cachorro);
    var_dump($animal1 instanceof Canino);
    var_dump($animal1 instanceof Mamifero);
    var_dump($animal1 instanceof Animal);
    echo '<br>';
    var_dump($animal1 instanceof Felino);



