<?php
    class Carrinho {
        public $PedidoID;
        public $NomeCliente;
        public $Item;

        function __construct() {
            $this->Item = new Item;
        }

        function addItem($ProdutoID, $NomeProduto, $Preco, $Quantidade) {
            $this->Item->inserirItem($ProdutoID, $NomeProduto, $Preco, $Quantidade);
        }

        function retornarItem() {
            return $this->Item->mostrarItem();
        }
    }
?>