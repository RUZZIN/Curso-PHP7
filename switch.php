<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula - 12</title>
</head>
<body>

    <?php

    $parametro = 2;

        switch ($parametro) {
            case 1:
                echo 'Entrou no case 1';
                break;

            case 2:
                echo 'Entrou no case 2';
                break;

            case 3: 
                echo 'Entrou no case 3';
                break;

            case 4:
                echo 'Entrou no case 4';
                break;
            
            default:
                echo 'Entrou no default';
                break;
        }

        $letras = 'Ruan';

        switch ($letras) {
            case 'Hello':
                echo 'Entrou no case 1';
                break;

            case 'Ana':
                echo 'Entrou no case 2';
                break;

            case 'Pablo': 
                echo 'Entrou no case 3';
                break;

            case 'Ruan':
                echo 'Entrou no case 4';
                break;
            
            default:
                echo 'Entrou no default';
                break;
        }

    ?>

</body>
</html>