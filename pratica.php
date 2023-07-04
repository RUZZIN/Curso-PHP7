<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando um pouco</title>
</head>
<body>
    <?php
    
        $idade = 69;
        $peso = 70;

        if(($idade >= 16 && $idade <= 69) && $peso >= 50 && $peso <= 70) {
            echo 'Atende aos requisitos';
        } else {
            echo 'Não atende aos requistos';
        }

    ?>
</body>
</html>