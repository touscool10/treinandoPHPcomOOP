<?php
    class Conta {
     
        function __construct($Banco, $Agencia, $Conta, $NomeCliente, $Senha, $Saldo) {
            $this->Banco = $Banco;
            $this->Agencia = $Agencia;
            $this->Conta = $Conta;
            $this->NomeCliente = $NomeCliente;
            $this->Senha = $Senha;
            $this->Saldo = $Saldo;
        }
        
        function Depositar($valor) {
            if ( $valor > 0 ) {
                $this->Saldo += $valor;   
            }
        }
        
        function Sacar($valor) {
            if ($valor < $this->Saldo ) {
                $this->Saldo -= $valor;
            }
        }
        
        function RetornarSaldo() {
            return $this->Saldo;
        }
        
        function _destruct() {
            echo "Objeto Conta {$this->Conta} esta finalizado";   
        }
        
    }
?>