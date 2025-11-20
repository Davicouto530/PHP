<?php

    // modelo do obj
    class Funcionario {

        // criando atributos do obj
        public $nome = 'José';
        public $telefone = '11 99999-9999';
        public $numFilhos = 2;

        // métodos

        // esse método vai servir para resumir o cadastro dos funcionário
        function resumirCadFunc() {
            // quando o método for chamado, vai exibir dinamicamente os atributos
            return "$this->nome possui $this->numFilhos filho(s)";
        }

        // esse método vai servir para modificar o número de filhos dos funcionários, recebendo como parametro o atributo "numFilhos" que está vindo o valor da chamada lá debaixo
        function modificarNumFilhos($numFilhos) {
            // afetar um atributo do obj
            $this->numFilhos = $numFilhos;
        }
    }

    // instanciando o obj
    $y = new Funcionario();

    // para acessar atributos ou métodos do obj, usa o "->" e a variável "y"
    echo $y->resumirCadFunc();

    echo '<br>';

    // passando um parametro na chamada do método, que irá modificar o valor do atributo
    $y->modificarNumFilhos(3);
    echo $y->resumirCadFunc();
    // exibindo de novo o método de resumo
?>