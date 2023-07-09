<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula - 19</title>
</head>
<body>
    
    <?php

        //Recuperação da data atual / data corrente
        // dia/mes/ano horas:minutos
        echo date('d/m/Y H:i');
 
        echo '</br>';
        // Recuperar o timezone default da aplicação
        echo date_default_timezone_get();
        echo '</br>';
        // Atualizar o timezone default da aplicação
        date_default_timezone_set('America/Sao_Paulo');
        echo '</br>';
        echo date('d/m/Y H:i');

        echo '</br>'; 

        // Transformar datas textuais sem segundos 

        $data_inicial = '2018-04-24';
        $data_final = '2018-05-15'; 

        // timestamp
        // 01/01/1970 -- 2018-04-24 (js -> milissegundos / php -> segundos)

        $time_inicial = strtotime($data_inicial);
        $time_final = strtotime($data_final);

        echo $data_inicial .' - '. $time_inicial;
        echo '</br>';
        echo $data_final .' - '. $time_final;

        echo '</br>'; 

        $diferanca_times = abs($time_final - $time_inicial); //abs volta o seu valor absoluto

        echo '</br>'; 
        echo 'A diferença de segundos entre a data inicial e final é ' . $diferanca_times;

        $segundos_existem_dia = 24 * 60 * 60; 

        echo '</br>';

        echo ' Um dia possui ' . $segundos_existem_dia . ' segundos';

        $diferenca_de_dias_entre_as_datas = $diferanca_times / $segundos_existem_dia;

        echo '</br>';
        echo 'A diferença em dias é: ' .$diferenca_de_dias_entre_as_datas;

    ?>

</body>
</html>