<?php


echo "Seja bem-vindo(a), " . $_POST['nomeUsuario'] . '!<br><br>';

echo "Você tem {$_POST['idadeUsuario']}, CPF: {$_POST['cpfUsuario']}<br><br>";

echo "E o período escolhido foi o {$_POST['periodoUsuario']}";

$nome = $_POST['nomeUsuario'];
$idade = $_POST['idadeUsuario'];
$cpf = $_POST['cpfUsuario'];
$periodo = $_POST['periodoUsuario'];

$arquivo = fopen('alunos.csv', 'a'); //abro o arquivo para append
fwrite($arquivo, "$nome, $idade, $cpf , $periodo\r\n");
fclose($arquivo);
?>