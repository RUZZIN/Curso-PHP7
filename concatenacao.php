<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula - 05</title>
</head>
<body>

    <?php

        $nome = 'Ruan';
        $anos = 19;
        $cor = 'Azul';
        $jogo = 'Warzone';

        // Aspas simples
        // Operador ponto => .

        echo 'Olá '. $nome .', vi que a sua cor preferida e '. $cor .', estou vendo também que você tem '. $anos .' e vi que você gosta de jogar '. $jogo .' ';

        // Aspas duplas

        echo '</br></hr>';

        echo "Olá $nome, vi que a sua cor preferida e $cor, estou vendo também que você tem $anos e vi que você gosta de jogar $jogo ";

        echo '</br></hr>';

        echo "Olá $nome, você tem $anos, gosta da cor $cor, e joga $jogo.";

    ?>

</body>
</html>