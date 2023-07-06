<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula - 16</title>
</head>
<body>
    
    <?php
    
        // Função void (Sem retorno)
        function exibirBoasVindas() {
            echo 'Bem-vindo ao curso de PHP! </br>';
        }

        exibirBoasVindas();

        // Return (com retorno)
        function calcularAreaTerreno($largura, $comprimento) {
            $area = $largura * $comprimento;
            return $area;
        }

        echo 'O valor da largura e do comprimento é: ';
        echo calcularAreaTerreno(16,32);
        echo '</br>';
        echo 'O valor da largura e do comprimento é: ';
        echo calcularAreaTerreno(20,30);
        echo '</br>';
        echo 'O valor da largura e do comprimento é: ';
        echo calcularAreaTerreno(80,10);
        echo '</br>';
        echo 'O valor da largura e do comprimento é: ';
        echo calcularAreaTerreno(100,200);

    ?>

</body>
</html>