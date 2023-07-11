<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula - 22</title>
</head>
<body>
    
    <?php
    
        //in_array() -> true ou false para a existência do que esta sendo procurado
        //array_search() -> Retorna o índice do valor pesquisado, caso ele exista

        $listas_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

        echo '<pre>';
        print_r($listas_frutas);
        echo '</pre>';

        // $exite = in_array('Maçã', $listas_frutas);
        //true -> texto = 1
        //false -> texto = vazio
        $exite =  array_search('Uva', $listas_frutas);
        //null -> caso o valor não foi encontrado

    /*
        if($exite != null) { //true / false
            echo 'Sim, o valor pesquisado existe no array';
        } else {
            echo 'Não, o valor pesquisado não existe no array';
        }
    */

        $lista_coisas = [
            'frutas' => $listas_frutas,
            'pessoas' => ['João', 'Maria']
        ];

        echo '<pre>';
        print_r($lista_coisas);
        echo '</pre>';

        echo in_array('Uva', $lista_coisas['frutas']);
    
    ?>

</body>
</html> 