<?php

    class Exemplo {

        // criando um atributo estático
        // esse tipo de atributo pertence à classe, não ao objeto
        public static $atributo1 = 'Eu sou um atributo estático';

        // criando um atributo normal
        // esse só existe quando um objeto é instanciado
        public $atributo2 = 'Eu sou um atributo normal';

        // criando um método estático
        // métodos estáticos também pertencem à classe
        public static function metodo1() {
            echo 'Eu sou um método estático';

            // isso daria erro porque métodos estáticos não têm acesso ao $this
            // e também porque o atributo2 é normal e exige uma instância
            // echo $this->atributo2;
        }

        // criando um método normal
        // esse só pode ser chamado após instanciar o objeto
        public function metodo2() {
            echo 'Eu sou um método normal';
        }
    }

    // quando trabalha com atributos estáticos, não precisa instanciar a classe
    // $x = new Exemplo();

    // tentar acessar um atributo estático pela instância funciona, mas não é recomendado
    // o jeito correto é acessar pela própria classe
    // $x->atributo1; // não é a forma ideal

    // acessando o atributo estático
    // usa o nome da classe, o "::" e o nome do atributo
    echo Exemplo::$atributo1;

    echo '<br>';

    // acessando o método estático do mesmo jeito
    Exemplo::metodo1();
?>
