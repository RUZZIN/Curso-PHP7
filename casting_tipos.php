<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula - 13</title>
</head>
<body>

    <?php
    
        //Gettype() = retorna o tipo da variável
        $valor = '22.22';
        // $valor2 = (string) $valor; //
        // $valor2 = (float) $valor; //float, double
        // $valor2 = (double) $valor; //float, double
        // $valor2 = (int) $valor; //integer, int
        $valor2 = (boolean) $valor; //bool, boolean

        echo $valor . ' ' . gettype($valor);
        echo '</br>';
        echo $valor2 . ' ' .gettype($valor2);

    ?>

</body>
</html>