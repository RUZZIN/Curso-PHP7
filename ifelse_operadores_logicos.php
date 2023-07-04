<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula - 08</title>
</head>
<body>

    <?php
        // Operadores condicionais / comparação
        // ==
        // ===
        // != ou <>
        // !== São diferentes e de tipos diferente
        // < Menor
        // > Maior
        // <=
        // >=        

        // && ou AND => Retorna verdadeiro se todos os resultados das expressões forem verdadeiros 
        // Falso e verdadeiro = Falso
        if(5 == 3 && 1 > 3) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }

        // Verdadeiro e verdadeiro = Verdadeiro
        if(3 == 3 && 10 > 3) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }

        // (Verdadeiro e verdadeiro) = Verdadeiro ou Falso = Verdadeiro
        if((3 == 3 && 10 > 3) || 5 != 5 ) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }

        // || ou OR => Retorna veradeiro se pelo menos um dos resultados das expressões forem verdadeiros
        // Falso e verdadeiro = Verdadeiro
        if(5 == 3 || 10 > 3) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }

        // Falso e falso = Falso
        if(5 == 3 || 1 > 3) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }

        // XOR => Retorna verdadeiro se uma das expressões for verdadeira e a outra falsa, ou vice-versa
        // Falso e verdadeiro = Verdadeiro
        if(5 == 3 XOR 10 > 3) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }

        // Falso e falso = Falso
        if(50 == 50 XOR 0 > 3) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }

        // Verdadeiro e verdadeiro = Falso
        if(20 < 50 XOR 100 > 50) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }
        
        // ! => Inverte o resultado retornado pela expressão
        // Falso e falso = Verdadeiro
        if(20 < 50 XOR 100 > 50) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }

    ?>

</body>
</html>