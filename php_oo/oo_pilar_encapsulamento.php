<?php

    class Pai {
        private $nome = 'Jorge';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';


        public function __get($attr) {
            return $this->$attr;
        }

        public function __set($attr, $value) {
            $this->$attr = $value;
        } 

        
        public function executarMania() {
            echo 'Assobiar';
        }

        public function responder() {
            echo 'Oi';
        }

        public function executarAcao() {
            $x = rand(1, 10);
        
            if($x = 1 && $x <= 8) {
                $this->executarMania();
            } else {
                $this->responder();
            }
        }
    }

    class Filho extends Pai {
        public function __construct()
        {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function executarMania() {
            echo 'Cantar';
        }

        public function x() {
            $this->executarMania();
        }
        
    }

    $filho = new Filho();
    echo '<pre>';
    print_r($filho);
    echo '</pre>';

    $filho->executarAcao();
    echo '</br>';
    $filho->x();

    /*
    // Exibir os métodos do objeto
    echo '<pre>';
    print_r(get_class_methods($filho));
    echo '</pre>';
    */

    /*
    echo $filho->__get('nome');
    $filho->__set('nome', 'Jamilton');
    echo '</br>';
    echo $filho->__get('nome');

    echo '<pre>';
    print_r($filho);
    echo '</pre>';
    */

    /*
    echo $filho->getAtributo('nome');

    $filho->setAtributo('nome', 'Ruan');
    echo '<pre>';
    print_r($filho);
    echo '</pre>';
    echo '</br>';
    echo $filho->getAtributo('nome');
    */
    

    /*
    $pai = new Pai();
    //echo $pai->humor;
    echo $pai->executarMania();
    */
    
    /*
    $pai = new Pai();
    echo $pai->nome;
    echo '</br>';
    echo $pai->sobrenome;
    $pai->sobrenome = 'Oliveira';
    echo '</br>';
    echo $pai->sobrenome;

    */
    
    /*
        public function getNome() {
            return $this->nome;
        }

        public function setNome($value) {

            if(strlen($value) >= 3) {
               $this->nome = $value; 
            }
        }

        public function getSobrenome() {
            return $this->sobrenome;
        }

        public function setSobrenome($value) {

            if(strlen($value) >= 3) {
               $this->sobrenome = $value; 
            }
        }
    }

    $pai = new Pai();
    echo $pai->getNome();
    $pai->setNome('Jamilton');
    echo '</br>';
    echo $pai->getNome();

    echo '<hr/>';

    $pai = new Pai();
    echo $pai->getSobrenome();
    $pai->setNome('Jamilton');
    echo '</br>';
    echo $pai->getSobrenome();
    */

?>