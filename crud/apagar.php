<?php

require_once '../bancoDeDados/conecta.php';

$id = $_GET['id'];

$id = preg_replace('/\D/', '', $id);

if ($bd->exec("DELETE FROM alunos WHERE id= $id")){

    $apagou = true;
}
else{
    $gravou= false;
}

include 'index.php';

//mensage de sucesso ou erro ao papgar o aluno
