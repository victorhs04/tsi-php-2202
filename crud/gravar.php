<?php
//buscamos o codigo que conecta no SGBD
require_once '../bancoDeDados/conecta.php';
//incluide_once(); não gera erro fatal se existir


//dados provenientes do formulario hatml
$nome = $_POST['nome'];
$inicio = $_POST['inicio'];
$periodo = $_POST['turno'];


$consulta = $bd->prepare('INSERT INTO alunos
                (nome, turno, inicio)
                VALUE 
                (:nome, :turno, :inicio)');

/*
a funçao $bd->prepare() retorna poyta variavel 
(objeto), essa outra variavel consegue juntar ps 
dados do usuario com a consulta SQL
*/ 

$consulta->bindParam(':nome', $nome);
$consulta->bindParam(':turno', $turno);
$consulta->bindParam(':inicio', $inicio);

/*
a funçao $consulta->bindParam() substitui os rotulos
(ex.:":nome") pelos dados inseguros
*/

if($consulta->execute()){
    echo "Gravou com sucesso!";
}else{
    echo "ERRO ao gravar no banco de dados";
};

//finalmente execultamo a consulta no SGBD
