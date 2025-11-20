<?php

    // modelo do obj
    class Funcionario {

        // criando atributos do obj e deixando "null" para poder receber valores
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;

        // get e set

        // método set recebe um parametro e atribuir esse valor ao atributo nome do obj
        function setNome($nome){
            $this->nome = $nome;
            // atribuindo o parametro
        }

        function setTelefone($telefone){
            $this->telefone = $telefone;
            // atribuindo o parametro
        }

        function setNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
            // atribuindo o parametro
        }

        // método get retorna o que está dentro quando for chamado
        function getNome(){
            return $this->nome;
            // quando for chamado, vai retornar o nome que está no atributo
        }

        function getTelefone(){
            return $this->telefone;
            // quando for chamado, vai retornar o nome que está no atributo
        }

        function getNumFilhos(){
            return $this->numFilhos;
            // quando for chamado, vai retornar o nome que está no atributo
        }

        // métodos

        // esse método vai servir para resumir o cadastro dos funcionário
        function resumirCadFunc() {
            // quando o método for chamado, vai exibir dinamicamente os atributos
            return "$this->nome <br> $this->telefone <br> possui $this->numFilhos filho(s)";
        }

        // esse método vai servir para modificar o número de filhos dos funcionários, recebendo como parametro o atributo "numFilhos" que está vindo o valor da chamada lá debaixo
        function modificarNumFilhos($numFilhos) {
            // modfificando o número do atributo
            $this->numFilhos = $numFilhos;
        }
    }

    // instanciando o obj na variável "y"
    $y = new Funcionario();

    // passando os valores para os atributos do obj pelo método set
    $y->setNome('José');
    $y->setTelefone('11 99999-9999');
    $y->setNumFilhos(3);

    // JEITO 1: exibindo os valores pelo método get
    echo $y->getNome() . ' ' .$y->getTelefone() . ' possui ' . $y->getNumFilhos() . ' filho(s)';

    // JEITO 2: exibindo os atributos do obj pelo método 
    //echo $y->resumirCadFunc();

?>