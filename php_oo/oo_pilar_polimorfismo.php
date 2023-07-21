<?php

    class Carro extends Veiculo {
        public $teto_solar = true;

        function __construct($placa, $cor)
        {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function abrirTetoSolar() {
            echo 'Abrir teto solar';
        }

        function alterarPosicaoVolante() {
            echo 'Alterar posição volante';
        }
    }

    class Moto extends Veiculo {

        function __construct($placa, $cor)
        {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        public $contraPesoGuidao = true;

        function empinar() {
            echo 'Empinar';
        }

        function trocarMarcha() {
            echo 'Desengatar embreagem com a mão o engatar macha com o pé';
        }
    }

    class Veiculo {
        public $placa = null;
        public $cor = null;

        function acelerar() {
            echo 'Acelerar';
        }

        function freiar() {
            echo 'Freiar';
        }

        function trocarMarcha() {
            echo 'Desengatar embreagem com o pé o engatar macha com a mão';
        }
    }

    $carro = new Carro('ABC1234', 'Branco');
    $moto = new Moto('DEF1122', 'Preto');

    $carro->trocarMarcha();
    echo '</br>';
    $moto->trocarMarcha();
    echo '</br>';

?>