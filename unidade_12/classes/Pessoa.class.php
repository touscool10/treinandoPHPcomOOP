<?php
    class Pessoa {
    private $Nome;
    private $Altura;
    private $Fumante;

    function __construct($Nome) {
        $this->Nome = $Nome;
    }

    function __set($prop, $valor) {
        //Codigos destinados à Altura
        if ($prop == 'Altura') {
            if (is_float($valor)) {
                $this->Altura = $valor; 
            } else {
                $this->Altura ="Sem Altura definida";
            }
        }

        if ($prop == 'Fumante') {
            if (is_bool($valor)) {
                $this->Fumante = $valor; 
            } else {
                $this->Fumante ="Propriedade Fumante não foi definida";
            }
        }

        if ($prop == 'Nome') {
            if (is_string($valor)) {
                $this->Nome = $valor; 
            } else {
                $this->Nome ="Nome não foi definido";
            }
        }

    }

    function __get($prop) {
        if ($prop == 'Altura') {
            return $this->Altura;
        }

        if ($prop == 'Fumante') {
            return $this->Fumante;
        }

        if ($prop == 'Nome') {
            return $this->Nome;
        }
    }
}

?>