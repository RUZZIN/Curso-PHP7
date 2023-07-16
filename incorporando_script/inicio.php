<?php
    // É utilizada para incluir e executar o conteúdo de um arquivo dentro de outro arquivo PHP. Ela é útil para reutilizar código, dividir tarefas em arquivos separados e facilitar a manutenção do código.
    include("menu.php"); // Ele gera um warning, caso de erro
     
    // É geralmente usado quando se depende fortemente do arquivo incluído para o funcionamento correto do programa.
    // require ("menu2.php"); // Ele gera um fatal error, caso de erro
?>
Conteúdo da página (início)
<br/>

<?php
    // É uma diretiva do PHP que permite incluir um arquivo dentro de outro, assegurando que ele seja incluído apenas uma vez, mesmo que a instrução apareça várias vezes. Isso evita a duplicação de código e previne erros de redeclaração de classes ou funções. É útil quando se quer incluir um arquivo apenas uma vez, independentemente do fluxo de execução.
    include_once("menu.php");
     
    // É uma diretiva do PHP que inclui um arquivo em outro, garantindo que ele seja incluído apenas uma vez, mesmo que a instrução apareça repetidamente. É semelhante ao "require", porém evita a redeclaração de classes ou funções. É útil para carregar arquivos de dependência importantes apenas uma vez durante a execução do programa.
    require_once("menu.php");
?>