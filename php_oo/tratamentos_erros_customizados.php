<?php

    class MinhaExceptionCustomizada extends Exception {
        private $erro = '';

        public function __construct($erro)
        {
            $this->erro = $erro;
        }

        public function exibirMensagemErroCustomizada() {
            //return $this->erro;
            //ou
            echo '<div style="border: solid 1px #000; padding: 15px; background-color: red; color: white">';
                echo $this->erro;
            echo '</div>';
        }
    }

    try {

        throw new MinhaExceptionCustomizada('Esse é um erro de teste');

        //Error (classe do php)
        //Exception (usada muitas por programadores)
        //Customizadas (também e usada por programadores para ter uma mensagem mais customizada)

    } catch (MinhaExceptionCustomizada $e) {
        echo $e->exibirMensagemErroCustomizada();
    }