<?php
    function __autoload($classe) {
        include_once("classes/{$classe}.class.php");
    }

    $minhaCasa  = new Casa();
    $minhaCasa->rua = "Rua Pedro Silva";
    $minhaCasa->numero = 155;
    $minhaCasa->bairro ="Costeira do Pirajubaé"; 
    $minhaCasa->cidade ="Florianópolis";

    $meuCarro   = new Carro();
    $eu         = new Pessoa();

    echo "<pre>";echo "<pre>";
    print_r(get_class_methods(Casa));
    echo "<br>";
    print_r(get_class_vars(Casa));
    echo "<br>";
    print_r(get_object_vars($minhaCasa));
    echo "<br>";
    echo "</pre>";
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