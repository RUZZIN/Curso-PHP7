<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula - 17</title>
</head>
<body>
    
    <?php

        $texto = 'Curso completo de PHP';
    
        // String to lower 
        echo $texto . '</br>';
        echo strtolower($texto);

        echo '</hr>';
        // String to upper 
        echo $texto . '</br>';
        echo strtoupper($texto);

        echo '</hr>';
        // Upper case first
        echo $texto . '</br>';
        echo ucfirst($texto);

        echo '</hr>';
        // String length 
        echo $texto . '</br>';
        echo strlen($texto);

        echo '</hr>';
        // String replace 
        echo $texto . '</br>';
        echo str_replace('PHP', 'JavaScript', '$texto');

        echo '</hr>';
        // String subster 
        echo $texto . '</br>';
        // 'Curso completo de PHP'
        // 0,1,2,3,4,5,...20
        echo substr($texto, 19, 21);

    ?>

</body>
</html>