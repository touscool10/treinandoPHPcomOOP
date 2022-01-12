<?php
    include_once("classes/Serie.class.php");
    Serie::$valor = 4;
    echo Serie::retornarSinopse()."<br>"."<br>";
    $minha_serie = new Serie("1a Temporada");
    $minha_serie_2 = new Serie("2a Temporada");

    

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