<?php
    include_once('classes/Conta.class.php');
    include_once('classes/ContaCorrente.class.php');

    // Instanciar um objeto
    $conta_corrente = new ContaCorrente('341','0001','010101-x','Andre Luiz','1234',150,1000);

    // Depositar 1000
    $conta_corrente->Depositar(1150);

    // Sacar
    $conta_corrente->Sacar(300);

     // Mostrar Limite da conta
     echo $conta_corrente->RetornarLimite() . "<br>";

    // Mostrar saldo da conta
    echo $conta_corrente->RetornarSaldo() . "<br>";

    // Mostrar objeto na tela
    echo "<pre>";
    print_r($conta_corrente);
    echo "</pre>";

    $conta_corrente->Sacar(1000);
    // Mostrar saldo da conta
    echo $conta_corrente->RetornarSaldo() . "<br>";


?>