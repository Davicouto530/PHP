<?php

    // modelo obj Pai
    class Pai {

        // criando os atributos

        // atributo privado: só pode ser acessado dentro dessa própria classe Pai
        private $nome = 'Jorge';

        // atributo protected: não pode ser acessado fora da classe,
        // mas pode ser acessado pelas classes filhas
        protected $sobrenome = 'Silva';

        // atributo público: pode ser acessado de qualquer lugar
        public $humor = 'Feliz';

        // método mágico __get()
        // usado para acessar atributos private ou protected de forma controlada
        public function __get($atributo) {
            // retornando dinamicamente o atributo solicitado
            return $this->$atributo;
        }

        // método mágico __set()
        // usado para modificar atributos private ou protected de forma controlada
        // recebe o nome do atributo e o valor novo
        public function __set($atributo, $value){
            // atribuindo o valor ao atributo informado
            $this->$atributo = $value;
        }

        // método privado: só a classe Pai consegue usar
        private function executarMania() {
            echo 'Assobiar';
        }

        // método protegido: Pai e Filho conseguem usar,
        // porém não pode ser chamado diretamente de fora
        protected function responder() {
            echo 'Oi!';
        }

        // método público: pode ser acessado de qualquer lugar
        public function executarAcao() {

            // gerando um número aleatório entre 1 e 10
            $x = rand(1, 10);

            // verificando se o número está entre 1 e 8
            if($x >= 1 && $x <= 8){

                // chama o método protegido
                $this->responder();
            } else {
                // chama o método privado
                $this->executarMania();
            }
        
        }
    }    

    // modelo class Filho que está herdando da class pai
    class Filho extends Pai {

        // método construct
        public function __construct(){
            
            // get_class_methods() retorna um array de métodos acessíveis pelo objeto
            echo '<pre>';
                print_r(get_class_methods($this));
            echo '</pre>';
        }

        // método private da classe filho (NÃO sobrescreve o do pai)
        // pois private não pode ser sobrescrito
        private function executarMania() {
            echo 'Cantar';
        }

        // método protected sobrescrito
        // esse sim substitui o responder() do pai
        protected function responder() {
            echo 'Olá!';
        }

        // método público para testar métodos private da própria classe Filho
        public function x(){
            $this->executarMania(); // aqui chama o private do FILHO
        }
    }

    // instanciando o obj
    $pai = new Pai();

    // tentando exibir o atributo private diretamente NÃO funciona,
    // mas como está usando __get, ele permite o acesso
    echo $pai->nome;

    echo '<br>';

    // tentando exibir o atributo protected diretamente NÃO funciona,
    // mesmo com __get ele só funciona se você chamar assim: $pai->__get('sobrenome')
    echo $pai->sobrenome; // <— aqui daria erro normalmente
    // mas no código real isso dá erro mesmo, porque __get não entra em ação aqui.

    // modificando o atributo protected usando __set
    $pai->sobrenome = 'Oliveira';

    echo '<br>';

    // exibindo o sobrenome modificado
    // novamente, só funciona por causa do método __get()
    echo $pai->sobrenome;

    echo '<br>';

    // executando o método public
    echo $pai->executarAcao();

    // instanciando o obj filho
    $filho = new Filho();

    echo '<pre>';
        print_r($filho);
    echo '</pre>';    

    // executando método do Pai, mas agora pelo objeto Filho
    $filho->executarAcao(); // aqui o responder() usado será o do FILHO
    echo '<br>';

    // chamando método x(), que chama o método private da classe Filho
    $filho->x();

?>
