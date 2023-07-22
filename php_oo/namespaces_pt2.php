<?php
    //Importação de bibliotecas
    require "./bibliotecas/lib1/lib1.php";
    require "./bibliotecas/lib2/lib2.php";

    use A\Cliente as primeiroCliente;
    use B\Cliente;

    $c = new primeiroCliente();
    print_r($c);
    echo $c->__get('nome');

    $c = new Cliente();
    print_r($c);
    echo $c->__get('nome');

