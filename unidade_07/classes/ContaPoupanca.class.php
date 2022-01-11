<?php
    class ContaPoupanca extends Conta {
        public $Aniversario;
        
        function __construct($Banco, $Agencia, $Conta, $NomeCliente, $Senha, $Saldo, $Aniversario) {
            $this->Banco = $Banco;
            $this->Agencia = $Agencia;
            $this->Conta = $Conta;
            $this->NomeCliente = $NomeCliente;
            $this->Senha = $Senha;
            $this->Saldo = $Saldo;
            $this->Aniversario = $Aniversario;
        }        

        function Sacar($valor) {
            if ( $valor < $this->Saldo ) {
                $this->Saldo -= $valor;
            } else {
                echo "Saldo insuficiente" . "<br>";   
            }
        }        
        
    }
?>