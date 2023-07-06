<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando um pouco</title>
</head>
<body>

    <?php

        function calcularIRPF($salario) {
            $imposto = 0;

            if($salario <= 1903.98) {
                $imposto = 0;

            } else if ($salario >= 1903.99 && $salario <= 2826.65) {
                $imposto = ($salario * 7.5) / 100;

            } else if ($salario >= 2826.66 && $salario <= 3751.05) {
                $imposto = ($salario * 15) / 100;

            } else if ($salario >= 3751.06 && $salario <= 4664.08) {
                $imposto = ($salario * 22.5) / 100;
            } else {
                $imposto = ($salario * 27.5) / 100;
            }
            return $imposto;
        }

        echo 'O valor do imposto a ser pago é: ' .calcularIRPF(5000);

    ?>

</body>
</html>