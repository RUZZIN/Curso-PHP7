<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula - 29</title>
</head>
<body>
    
    <?php

        $itens = array('sofá', 'mesa', 'cadeira', 'fogão', 'geladeira');

        echo '<pre>';
        print_r($itens);
        echo '</pre>';

        foreach($itens as $iten) {
            echo '$item';

            if($item == 'mesa') {
                echo 'Compre uma mesa e ganhe 25% de desconto na compra de uma mesa';
            } 
            echo '</br>';
        }
    
    ?>

</body>
</html> 