<?php
    include_once('classes/Conta.class.php');

    // Instanciar um objeto
    $conta_corrente = new Conta('341','0001','010101-x','Andre Luiz','1234',150);

    // Depositar 1000
    $conta_corrente->Depositar(1000);

    // Sacar
    $conta_corrente->Sacar(300);

    // Mostrar saldo da conta
    echo $conta_corrente->RetornarSaldo() . "<br>";

    // Mostrar objeto na tela
    print_r($conta_corrente);
?>