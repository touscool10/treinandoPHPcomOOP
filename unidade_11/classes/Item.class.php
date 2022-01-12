<?php
    class Item {
        public $ProdutoID;
        public $NomeProduto;
        public $Preco;
        public $Quantidade;

        function inserirItem($ProdutoID, $NomeProduto, $Preco, $Quantidade) {
            $this->ProdutoID = $ProdutoID;
            $this->NomeProduto = $NomeProduto;
            $this->Preco = $Preco;
            $this->Quantidade = $Quantidade;
        }

        function mostrarItem() {
            return "Item: {$this->NomeProduto}, Preço: {$this->Preco}, Qtd: {$this->Quantidade}";
        }
    }
?>