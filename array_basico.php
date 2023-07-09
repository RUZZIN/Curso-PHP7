<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula - 20</title>
</head>
<body>
    
    <?php
    /*
        // Sequenciais (numéricos)
        //$lista_frutas = array('Banana','Maçã','Morango','Uva');
        $lista_frutas = ['Banana','Maçã','Morango','Uva', 'Abacaxi', 'Abacate'];
        $lista_frutas[] = 'Abacaxi';

        echo '<pre>';
            var_dump($lista_frutas);
        echo '</pre>';
        echo '</br></hr>';
        echo '<pre>';
            print_r($lista_frutas);
        echo '</pre>';

        echo '</br>';

        echo $lista_frutas[2];
        echo '</br>';
        echo $lista_frutas[4];
    */

        // Associativos
        $lista_frutas = array(
        'a' => 'Banana',
        'b' =>'Maçã',
        'c' =>'Morango',
        'd' =>'Uva', 
        'e' =>'Abacaxi', 
        'f' =>'Abacate'
    );

    $lista_frutas['g'] = 'Melancia';

    echo '<pre>';
    var_dump($lista_frutas);
    echo '</pre>';

    echo $lista_frutas['c'];
    
    ?>

</body>
</html>