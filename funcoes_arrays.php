<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula - 24</title>
</head>
<body>
    
    <?php

    /* 
    Verifica se o parâmetro é um array
        $array = 'Sting';
        $retorno = is_array($array);

        if($retorno) {
            echo 'Sim, é um array';
        } else {
            echo 'Não, não é um array';
        }
    */

    /*
    Retorna todas as chaves de um array
        $array = [1 => 'a', 7 => 'b', 18 => 'c'];
            echo '<pre>';
                print_r($array);
            echo '</pre>';

        $chaves_array = array_keys($array);
            echo '<pre>';
                print_r($chaves_array);
            echo '</pre>';
    */
    
    /*
    Ordena um array e reajusta seus índices
        $array = array('mouse', 'cabo hdmi', 'gabinete', 'notebook', 'fonte atx', 'teclado');
            echo '<pre>';
                print_r($array);
            echo '</pre>';

            sort($array); //true ou false
            echo '<pre>';
                print_r($array);
            echo '</pre>';
    */

    /*
    Ordena um array preservando os índices
        $array = array('mouse', 'cabo hdmi', 'gabinete', 'notebook', 'fonte atx', 'teclado');
            echo '<pre>';
                print_r($array);
            echo '</pre>';

            asort($array); //true ou false
            echo '<pre>';
                print_r($array);
            echo '</pre>';
    */

    /*
    Conta a quantidade de elementos de um array
        $array = array('mouse', 'cabo hdmi', 'gabinete', 'notebook', 'fonte atx', 'teclado');
            echo '<pre>';
                print_r($array);
                echo count($array);
            echo '</pre>';
    */

    /*
    Funde um ou mais arrays
        $array1 = ['osx', 'windows'];
        $array2 = array('linux');
        $array3 = ['solaris'];

        $nova_array = array_merge($array1, $array2, $array3);
            echo '<pre>';
                print_r($novo_array);
            echo '</pre>';
    */

    /*
    Divide uma string baseada em um delimitador
        $string = '26/04/2018';
        $array_retorno = explode('/', $string);
            echo '<pre>';
                echo $string;
                print_r($novo_array);
                echo $arra_retorno[2].'-'.$array_retorno[1].'-'.$array_retorno[0];
            echo '</pre>';
    */

    /*
    Junta elementos de um array em uma string
        $array = ['a', 'b', 'x', 'y']; // a,b,x,y
        $string_retorno = implode('x', $array);
        echo $string_retorno;
    */

    ?>

</body>
</html> 