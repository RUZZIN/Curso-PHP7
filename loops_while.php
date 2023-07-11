<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula - 25</title>
</head>
<body>
    
    <?php

        $num = 1;
        // Operadores comparaçào / lógicos
        echo '--Início do loop';
        while($num < 10) {
            echo '$num </br>';

            $num++; // Critério de parada
        }
        echo '-- Fim do loop';

            echo '</br>';

        echo '--Início do loop';
        while($num < 50) {
            echo '$num </br>';

            $num += 5; // Critério de parada

            
            break;
        }
        echo '-- Fim do loop';

            echo '</br>';

        echo '--Início do loop';
        while(true) {
            echo '$num </br>';

            $num += 5; // Critério de parada

            if($num > 100) {
              break;  
            } 
        }
        echo '-- Fim do loop';

            echo '</br>';

        echo '--Início do loop';
        while(true) {

            $num++; // Critério de parada

            if($num == 2 || $num == 6) {
              continue;  
            } 
            
            echo '$num </br>';

        }
        echo '-- Fim do loop';


    ?>

</body>
</html> 