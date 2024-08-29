<?php
 class Conta{
          //atributos 
    public $numero;
    public $cliente;
    public $saldo;

    //operação

    public function abrirConta($numero,$cliente,$saldo){
          $this->numero +=$numero;
          $this->cliente +=$cliente;
          $this->saldo +=$saldo;
    }
    public function depositar($valorDeposito){
          $this->saldo +=$valorDeposito;
 }
 public function sacar($valorSaque){
          $this->saldo -= $valorSaque;
 }

 public function nume($num){
          $this->numero =$num;
       
    }

 public function info(){
          echo"Dados:<br> Nome: ".$this->cliente;
          echo"<br>Numero da conta: ".$this->numero;
          echo"<br>Saldo: ".$this->saldo;
          

 }
}
?>