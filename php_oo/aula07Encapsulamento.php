<?php

    // modelo obj Pai
    class Pai {

        // criando os atributos

        // atributo privado que não pode ser acessado
        private $nome = 'Jorge';

        // atributo protected que não pode ser acessado
        protected $sobrenome = 'Silva';

        // atributo público pode ser acessado
        public $humor = 'Feliz';

        // criando um método público, que será responsável para retornar um atributo privado
        public function __get($atributo) {
            // e retornando um atributo "private"
            return $this->$atributo;
        }

        // criando um método público, que será responsável para modificar o que está dentro do atributo "private"
        // ele recebe dois parametro que é o novo valor que será implementado e em qual atributo
        public function __set($atributo, $value){
 
            // atribuindo o valor ao atributo passado
            $this->$atributo = $value;
        }

        // criando um método privado
        private function executarMania() {
            echo 'Assobiar';
        }

        // criando um método protected
        protected function responder() {
            echo 'Oi!';
        }

        // criando um método public
        public function executarAcao() {
            $x = rand(1, 10);

            if($x >= 1 && $x <= 8){
                $this->responder();
            } else {
                $this->executarMania();
            }
        
        }
    }    

    // instanciando o obj
    $pai = new Pai();

    // exibindo o atributo private por meio da function
    echo $pai->nome;

    echo '<br>';

    // exibindo o sobrenome sem modificar
    echo $pai->sobrenome;
    // modificando o sobrenome do atributo protected
    $pai->sobrenome = 'Oliveira';
    echo '<br>';
    // exibindo o sobrenome modificado
    echo $pai->sobrenome;

    echo '<br>';

    // executando o método public
    echo $pai->executarAcao();

?>
