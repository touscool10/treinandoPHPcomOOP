<?php
    class MeuXML {
        private $arquivoXML;

        public function __construct($theFile) {
            $this->arquivoXML = simplexml_load_file($theFile);
        }
            /*a função "simplexml_load_file()" não tá funcionado -- tá dando erro
        Uncaught Error: Call to undefined function simplexml_load_file() in /var/www/html/php_oop/unidade_15/arquivo1.php:3
        Stack trace:
        #0 {main}
        thrown in /var/www/html/php_oop/unidade_15/arquivo1.php on line 3*/
    
        public function numeroElementos() {
            return $this->arquivoXML->count();
        }
    
        public function listagemArquivo() {
            $xml = $this->arquivoXML;
            foreach ($xml->children() as $elemento) {
                echo "<ul>";
                foreach ($elemento as $elemento => $value) {
                    echo "<li>$elemento: $value</li>";
                }
                echo "</ul>";
            }
        }
    }


?>