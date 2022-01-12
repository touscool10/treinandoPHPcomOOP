<?php
    class Filme {
        protected $NomeFilme;
        private $Elenco;
        private $Diretor;
        private $AnoLancamento;

        public function setNomeFilme($nome) {
            $this->NomeFilme = $nome;
        }
        public function getNomeFilme() {
            return $this->NomeFilme;
        }
    }

?>