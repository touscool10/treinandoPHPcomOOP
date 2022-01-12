<?php
    include_once('classes/Carrinho.class.php');
    include_once('classes/Item.class.php');

    $shopcarr = new Carrinho;
    $shopcarr->NomeCliente = "Carlos José";
    $shopcarr->addItem(1,"Carrinho de bebê",100,1);

    echo $shopcarr->NomeCliente. "<br>";
    echo $shopcarr->retornarItem(). "<br>";
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