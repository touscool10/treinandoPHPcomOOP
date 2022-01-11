<?php
    class Conta {
        
        function __construct($Banco, $Agencia, $Conta, $NomeCliente, $Senha, $Saldo) {
            $this->Banco = $Banco; 
            $this->Agencia = $Agencia;
            $this->Conta = $Conta;
            $this->NomeCliente = $NomeCliente;
            $this->Senha = $Senha;
            $this->Saldo = $Saldo;
            //não pode ter "return" no metodo __construct; 
        }

        function RetornarSaldo(){
            return $this->Saldo;
        }

        function Depositar($valor){
            if ($valor > 0) {
                $this->Saldo += $valor ;
            }
            //echo "Seu saldo atual é de R${$this->Saldo}";
        }

        function Sacar($valor){
            if ($valor < $this->Saldo) {
                $this->Saldo -= $valor ;
            }
            //echo "Você sacou {$valor} e seu saldo atual é de R${$this->Saldo}";
        }

        function __destruct() {
            echo "O objeto Conta {$this->Conta} está finalizado";
        }
    }
?>