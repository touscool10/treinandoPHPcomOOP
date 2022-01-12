<?php
    include_once('classes/Filme.class.php');
    class Serie extends Filme {
        const Distribuicao = "Netflix";
        public static $valor;

        function __construct($Temporada) {
            echo parent::Nome . " - " . $Temporada . " (". self::Distribuicao.")"." - Avaliação: ".self::$valor." estrelas."."<br>" ;
        }

        function retornarSinopse() {
            return "Walter White (Bryan Cranston) é um professor de química na casa dos 50 anos 
            que trabalha em uma escola secundária no Novo México. Para atender às necessidades 
            de Skyler (Anna Gunn), sua esposa grávida, e Walt Junior (RJ Mitte), seu filho 
            deficiente físico, ele tem que trabalhar duplamente. Sua vida fica ainda mais 
            complicada quando descobre que está sofrendo de um câncer de pulmão incurável.
             Para aumentar rapidamente a quantidade de dinheiro que deixaria para sua família 
             após sua morte, Walter usa seu conhecimento de química para fazer e vender
              metanfetamina, uma droga sintética. Ele conta com a ajuda do ex-aluno e pequeno
               traficante Jesse (Aaron Paul) e enfrenta vários desafios, incluindo o fato de 
               seu concunhado ser um importante nome dentro da Agência Anti-Drogas da região.";
        }
    }
?>