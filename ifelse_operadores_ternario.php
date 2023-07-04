<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula - 11</title>
</head>
<body>

    <?php
        
        $usuario_possui_cartao_loja = true;
        $valor_compra = 50;

        $valor_frete = 50;
        $receberu_desconto_frete = true;

        //Essa seria a mesma logica do if else 
        $valor_frete_aux = $usuario_possui_cartao_loja == true && $valor_compra >= 400 ? 0 : ($usuario_possui_cartao_loja == true && $valor_compra >= 300 ? 10 : ($usuario_possui_cartao_loja == true && $valor_compra >= 100 ? 25 : $valor_frete));

        $receberu_desconto_frete = $valor_frete != $valor_frete_aux ? true : false;

        $valor_frete = $valor_frete_aux;

    /*
        if($usuario_possui_cartao_loja == true && $valor_compra >= 400) {
            $valor_frete = 0;

        } else if($usuario_possui_cartao_loja == true && $valor_compra >= 300) {   
            $valor_frete = 10;

        } else if($usuario_possui_cartao_loja == true && $valor_compra >= 100) {
            $valor_frete = 25;
            
        } else {
            $receberu_desconto_frete = false;
        }
    */

    ?>

    <h1>Detalhes do pedido</h1>

    <p> Possui cartão da loja? <?= $usuario_possui_cartao_loja == true ? 'Sim' : 'Não'; ?>
        
    </p>
    
    <p>Valor da compra: <?= $valor_compra ?></p>

    <p> Recebeu desconto no frete? 
        <?php
        //Operador ternário
        $teste = $receberu_desconto_frete ? 'Sim' : 'Não';

        echo $teste;
        ?>
    </p>

    <p>Valor do frete: <?= $valor_frete ?></p>

</body>
</html>