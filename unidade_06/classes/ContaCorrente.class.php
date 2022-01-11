<?php
    class ContaCorrente extends Conta {
        public $Limite;
        
        function __construct($Banco, $Agencia, $Conta, $NomeCliente, $Senha, $Saldo, $Limite) {
            $this->Banco = $Banco;
            $this->Agencia = $Agencia;
            $this->Conta = $Conta;
            $this->NomeCliente = $NomeCliente;
            $this->Senha = $Senha;
            $this->Saldo = $Saldo;
            $this->Limite = $Limite;
        }        

        function RetornarLimite() {
            return $this->Limite;   
        }

        function Sacar($valor) {
            if ($valor < ($this->Saldo + $this->Limite) ) {
                $this->Saldo -= $valor;
            } else {
                echo "Saldo insuficiente" . "<br>";   
            }
        }        
        
    }
?>