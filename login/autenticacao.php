<?php
//Buscamos o código que conecta no SGBD
require_once '../bancoDeDados/conecta.php';

$email =trim($_POST['usuario']);//trim() tire espaços do começo e do final
$senha = $_POST['senha'];

$stmt = $bd->prepare("SELECT 
                        nome, senha
                    FROM
                        usuarios
                    WHERE
                        email = :email");

$stmt_>bundParam(':email', $email);

$stmt->execute();

$usuario = $stmt->fetch(PDO ::FETCH_ASSOC);

$autencicou = false;

if(isset($usuario['nome'])){

    
}

include 'index.php';

