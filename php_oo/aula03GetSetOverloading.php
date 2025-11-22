<?php

    // modelo do obj
    class Funcionario {

        // criando atributos do obj e deixando "null" para poder receber valores
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        // get e set (overloading / sobrecarga) -> Serve para fazer só um get e set
        
        // vai receber dois parametros, um para o atributo e outro para o valor
        function __set($atributo, $valor) {
            $this->$atributo = $valor;
            // vai referenciar qual atributo do obj é e vai adicionar o valor que está sendo passado no parametro
        }

        // vai receber um parametro que será indicando o atributo que quer retornar
        function __get($atributo) {
            return $this->$atributo;
        }

        // métodos

        // esse método vai servir para resumir o cadastro dos funcionário
        function resumirCadFunc() {
            // quando o método for chamado, vai exibir dinamicamente os atributos via o método do get
            return $this->__get('nome') . " possui " . $this->__get('numFilhos') . " filho(s)";
        }

        // esse método vai servir para modificar o número de filhos dos funcionários, recebendo como parametro o atributo "numFilhos" que está vindo o valor da chamada lá debaixo
        function modificarNumFilhos($numFilhos) {
            // modfificando o número do atributo
            $this->numFilhos = $numFilhos;
        }
    }

    // instanciando o obj na variável "y"
    $y = new Funcionario();

    // vai passar como primeiro parametro o atributo do obj que quer que o valor seja inserido, e o segundo parametro é o valor que será inserido no atributo 
    $y->__set('nome', 'José');
    $y->__set('telefone', '11 99999-9999');
    $y->__set('numFilhos', 2);
    $y->__set('cargo', 'Repositor');
    $y->__set('salario', '1900');

    // passa como parametro no get o atributo que será retornado o valor
    echo $y->__get('nome') . ' é ' . $y->__get('cargo') . ' com um salario de ' . $y->__get('salario') . ' e possui ' . $y->__get('numFilhos') . ' filho(s)';

    echo '<br>';

    // JEITO 2: exibindo os atributos do obj pelo método 
    echo $y->resumirCadFunc();

?>