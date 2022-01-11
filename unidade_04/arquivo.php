<?php
    include_once('classes/Conta.class.php');

    //instanciar um objeto
    $contaCorrente = new Conta('001','1619-5','30094-2','Setonde Nougbodohoue','1234','5900');
    $contaCorrente->Depositar(1000);
    $contaCorrente->Sacar(4000);
    echo $contaCorrente->RetornarSaldo();
    echo '<pre>';
    print_r($contaCorrente);
    echo '</pre>';
?>