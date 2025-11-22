<?php

    // modelo do obj pessoa
    class Pessoa {

        // criando o atributo 
        public $nome = null;

        // criando o método construct
        // esse método é executado automaticamente quando o objeto é criado
        // ele recebe o valor que vai ser atribuído ao atributo da classe
        function __construct($nome){
            echo 'Objeto iniciado';
            $this->nome = $nome;
        }

        // criando o método destruct
        // esse método é chamado automaticamente quando o objeto é destruído
        // normalmente acontece quando usamos unset ou quando o script termina
        function __destruct() {
            echo 'Objeto removido';
        }

        // método get que retorna o valor de um atributo da classe
        // aqui ele recebe o nome do atributo e devolve o valor dele
        function __get($atributo){
            return $this->$atributo;
        }

        // método correr que retorna uma mensagem
        function correr(){
            // usando o método get para pegar o nome e concatenando com o texto
            return $this->__get('nome') . ' está correndo';
        }

    }

    // instanciando o obj
    // passando como parâmetro o valor que será atribuído ao atributo nome
    $pessoa = new Pessoa('Jorge');

    // exibindo o nome pelo método get
    echo '<br> Nome: ' . $pessoa->__get('nome');
    
    // exibindo o retorno do método correr
    echo '<br>' . $pessoa->correr();

    echo '<br>';

    // destruindo a instância manualmente
    unset($pessoa);

?>
