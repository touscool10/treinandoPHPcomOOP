<?php
    include_once("classes/MeuXML.class.php");

    $meuXml = new MeuXML('xml/produtos.xml');
    /*a função "simplexml_load_file()" não tá funcionado -- tá dando erro
    Uncaught Error: Call to undefined function simplexml_load_file() in /var/www/html/php_oop/unidade_15/arquivo1.php:3
    Stack trace:
    #0 {main}
      thrown in /var/www/html/php_oop/unidade_15/arquivo1.php on line 3*/

    echo "Quantidade de Produtos: ". $meuXml->numeroElementos()."<br>"."<br>";
    echo $meuXml->listagemArquivo();

  
    
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Documento sem título</title>
    </head>

    <body>
        
    </body>
</html>