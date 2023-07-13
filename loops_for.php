<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula - 27</title>
</head>
<body>
    
    <?php

        /*
        while(condicao) {

        }

        do {

        } while()
        */

        for($x = 1; $x <= 10; $x++) {
            echo '$x </br>';
        }

        echo '</br></hr>';

        for($y = 11; true; $y++) {

            if($y >= 20) {
                break;
            }

            //continue

            echo '$y </br>';
        }

        echo '</br></hr>';

        for($w = 10; $w > 0; $w--) {

            //break
            //continue

            echo '$w </br>';
        }
        
    ?>

</body>
</html> 