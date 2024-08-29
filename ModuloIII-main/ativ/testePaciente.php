<?php

include 'Paciente.php';
$nome = $_GET['nome'];
$idade = $_GET['idade'];
//cria um objeto
$paciente = new Paciente();

$paciente->dados($nome,$idade);

echo"<br><br><br>";
$paciente->informa();




?>