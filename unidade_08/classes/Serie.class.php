<?php
    include_once('classes/Filme.class.php');
    class Serie extends Filme {
        private $Temporada;

        public function setTemporada($ano) {
            $this->Temporada = $ano;
        }
        public function getTemporada() {
            return $this->NomeFilme ." - ".$this->Temporada;
        }
    }
?>