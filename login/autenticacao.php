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

$stmt_>bindParam(':email', $email);

$stmt->execute();

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

$autencicou = false;

if(isset($usuario['nome'])){//Se existir o usuario

    //Comparar a senha para ver se está correta
    if(password_verify($senha, $usuario['senha'])){

        //Sessão incializada
        session_start();
        $_SESSION['id'] = $email;
        //Direciona para o menu principal
        header('Location: /tsi-php-2202/menu');

        
    }
}

include 'index.php';

