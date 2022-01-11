<?php
    include_once('classes/Conta.class.php');
    include_once('classes/ContaCorrente.class.php');
    include_once('classes/ContaPoupanca.class.php');

    $conta_corrente = new ContaCorrente('341','0001','010101-x','Andre Luiz','1234',150,1000);

    $conta_poupanca = new ContaPoupanca('104','0001','20202-x','Victor Fontenelle','1234',1050,1);

    //Ver Saldo
    echo $conta_corrente->RetornarSaldo().'</br>';
    echo $conta_poupanca->RetornarSaldo().'</br>';

    //Depositar
    $conta_corrente->Depositar(500);
    $conta_poupanca->Depositar(5500);

    //Ver Saldo
    echo $conta_corrente->RetornarSaldo().'</br>';
    echo $conta_poupanca->RetornarSaldo().'</br>';

    //Sacar
    $conta_corrente->Sacar(500);
    $conta_poupanca->Sacar(5500);
 
    //Ver Saldo
    echo $conta_corrente->RetornarSaldo().'</br>';
    echo $conta_poupanca->RetornarSaldo().'</br>';

    //Sacar
    $conta_corrente->Sacar(500);
    $conta_poupanca->Sacar(5500);
    echo $conta_corrente->RetornarSaldo().'</br>';
    echo $conta_poupanca->RetornarSaldo().'</br>';
    
    



?>