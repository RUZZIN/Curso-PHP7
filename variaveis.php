<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula - 04</title>
</head>
<body>

    <?php

        //String
        $nome = 'Ruan Pablo Mesquita';

        //Int
        $idade = 19;
        
        //Flaot
        $peso = 67.8;

        //Boolean
        $fumante_sn = true; //(true = 1) ou (false = fazio)

        //....Lógica...
        //Sempre ira dar preferencia no ultimo valor 
        $idade = 18;

    ?>

    <h1>Ficha cadastral</h1>
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante_sn ?></p>

</body>
</html>