

<?php

include 'Conta.php';

//cria um objeto
$conta = new Conta();

$conta->cliente = "Maria";

echo"Nome: ".$conta->cliente;



$conta->depositar(1000.00);
echo"<br>Saldo-deposito:".$conta->saldo;

$conta->sacar(700.00);
echo"<br><br>Saque: 700";
echo"<br>Saldo-saque:".$conta->saldo;

$conta->depositar(1000.00);
echo"<br><br>Deposite: 1000";
echo"<br>Saldo-deposito:".$conta->saldo;

$conta->sacar(500.00);
echo"<br><br>Saque: 500";
echo"<br>Saldo-saque:".$conta->saldo;

$conta->depositar(5000.00);
echo"<br><br>Deposite: 5000";
echo"<br>Saldo-deposito:".$conta->saldo;

$conta->nume(3022.6985 );

echo"<br><br><br>";
$conta->info();

$conta->sacar(500.00);
echo"<br><br>Saque: 500";
echo"<br>Saldo-saque:".$conta->saldo;

echo"<br><br><br>";
$conta->info();

$conta->sacar(2690.00);
echo"<br><br>Saque: 2690.00";
echo"<br>Saldo-saque:".$conta->saldo;

echo"<br><br><br>";
$conta->info();




?>