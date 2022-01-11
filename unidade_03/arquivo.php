<?php
    include_once('classes/Produto.class.php');
    //Criar um objeto
    $produto = new Produto;
    //Determinar propriedades ao objeto
    $produto->Codigo = 1;
    $produto->NomeProduto = "Curso PHP COM OOP";
    $produto->Preco = 200;
    //Mostrar na tela
      
    //$produto->ImprimirProduto();
    $produto->AdicionarEstoque(10);
    //$saldo = $produto->SaldoInventario();
    echo "O inventario do produto {$produto->NomeProduto} é de {$produto->SaldoInventario()} unidades.";
?>