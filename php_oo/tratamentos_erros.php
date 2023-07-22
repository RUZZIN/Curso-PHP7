<?php
    //tenha uma lógica
    try{
        //Tenha um lógica onde possa ocorrer um potencial erro (exceção)
        echo '<h3> *** Try ***';

        //$sql = 'Select * from clientes';
        //mysql_query($sql); // Erro

        if (!file_exists('require_arquivo_a.php')) {
            // E melhor usar Exception do que o Error
            throw new Exception('O arquivo em questão deveria estar disponivel as '. date('d/m/Y H:i:s') .' mas não estava. Vamos seguir mesmo assim!');
            //ou 
            throw new Error('O arquivo em questão deveria estar disponivel as '. date('d/m/Y H:i:s') .' mas não estava. Vamos seguir mesmo assim!');
        }

    } catch (Error $erro) {
        echo '<h3> *** Catch Error ***';
        echo '<p style= "color: red"> ' . $erro . '</p>';
        // Também pode armazenando esse erro em banco de dados, para futuros teste
    } catch (Exception $erro) {
        echo '<h3> *** Catch Exception ***';
        echo '<p style= "color: red"> ' . $erro . '</p>';
        // Também pode armazenando esse erro em banco de dados, para futuros teste
    } finally {
        echo '<h3> *** Finally ***';
    }

    /*
    // Tenha outra lógica
    try {
        //Tenha um lógica onde possa ocorrer um potencial erro (exceção)

    }
    */