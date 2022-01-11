<?php
    class Produto {
        public $Codigo;
        public $NomeProduto;
        public $Preco;
        public $Estoque;

        function ImprimirProduto(){
            print 'Codigo: '.$this->Codigo.'<br>' ;
            print 'Nome do Produto: '.$this->NomeProduto.'<br>' ;
            print 'Preço: '.$this->Preco.'<br>' ;
            print 'Estoque: '.$this->Estoque.'<br>' ;

        }

        function AdicionarEstoque($quantidade){
            $this->Estoque += $quantidade;
        }

        function RetirarEstoque($quantidade){
            if ($this->Estoque >= $quantidade) {
                $this->Estoque -= $quantidade;
            }
            
        }

        function SaldoInventario(){
            return $this->Estoque;
        }
        
    } 

?>

