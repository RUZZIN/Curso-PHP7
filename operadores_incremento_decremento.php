<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula - 15</title>
</head>
<body>
    <h3>Pós-incremento</h3>
    <?php
    
        $a = 7;

        echo 'O valor contido em '.$a.' é: </br> ';
        echo 'O valor contido em a após o encremento é: '. $a++ .' </br> ';
        echo 'O valor contido em '.$a.' é: ';

    ?>

<h3>Pré-incremento</h3>
    <?php
    
        $a = 7;

        echo 'O valor contido em '.$a.' é: </br> ';
        echo 'O valor contido em a após o encremento é: '. ++$a .' </br> ';
        echo 'O valor contido em '.$a.' é: ';

    ?>

<h3>Pós-decremento</h3>
    <?php
    
        $a = 7;

        echo 'O valor contido em '.$a.' é: </br> ';
        echo 'O valor contido em a após o encremento é: '. $a-- .' </br> ';
        echo 'O valor contido em '.$a.' é: ';

    ?>

<h3>Pré-decremento</h3>
    <?php
    
        $a = 7;

        echo 'O valor contido em '.$a.' é: </br> ';
        echo 'O valor contido em a após o encremento é: '. $a .' </br> ';
        echo 'O valor contido em '.$a.' é: ';

    ?>

</body>
</html>