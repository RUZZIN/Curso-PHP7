<?php

    //modelo
    class Funcionario {
        // Atributos
        public $nome = 'José';
        public $telefone = '11 99999-0000';
        public $numFilhos = 2;

        // Métodos
        function resumirCadFunc() {
            return "$this->nome possui $this->numFilhos filho(s)";
        }

        function modificarNumFilhos($numFilhos) {
            //Afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }
    }

    $y = new Funcionario();
    echo $y->resumirCadFunc();
    echo '</br>';
    $y->modificarNumFilhos(3);
    echo $y->resumirCadFunc();
    echo '<hr/>';

    $x = new Funcionario();
    echo $x->resumirCadFunc();
    echo '</br>';
    $x->modificarNumFilhos(1);
    echo $x->resumirCadFunc();

?>