<?php

    // modelo obj Pai
    class Veiculo {
        
        // criando os atributos
        public $placa = null;
        public $cor = null;

        // método acelerar
        function acelerar() {
            echo 'Acelerar';
        }

        // método freiar
        function freiar() {
            echo 'Freiando';
        }

        // método que será feito o polimorfismo
        function trocarMarcha() {
            echo 'Desengatar embreagem com o pé e engatar marcha com a mão';
        }
    }

    // modelo do obj carro que vai receber a herança
    // o "extends" serve para indicar que esse obj vai herdar tudo do obj pai (atributos e métodos)
    class Carro extends Veiculo {

        // criando o atributo específico do carro
        public $teto_solar = true;

        // método construct
        // esse método é executado quando o objeto é criado
        // e já atribui os valores recebidos para os atributos herdados
        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        // métodos específicos do carro
        function abrirTetoSolar() {
            echo 'Abrir teto solar';
        }

        function alterarPosicaoVolante() {
            echo 'Alterar posição volante';
        }

    }

    // modelo do obj moto que vai receber a herança
    // o "extends" serve para herdar tudo do obj Veiculo
    class Moto extends Veiculo {

        // criando o atributo específico da moto
        public $contraPesoGuidao = true;

        // método construct
        // também inicializa os atributos herdados
        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        // método específico da moto
        function empinar() {
            echo 'Empinar';
        }

        // sobrepondo o método do obj pai
        function trocarMarcha() {
            echo 'Desengatar embreagem com a mão e engatar marcha com o pé';
        }
    }

    // instanciando os objetos
    $carro = new Carro('ABC1234', 'Branco');
    $moto = new Moto('DEF1122', 'Preto');

    $carro->trocarMarcha();
    echo '<br>';
    $moto->trocarMarcha();
?>
