<?php
require_once('../BancoDeDados/conecta.php');

$stmt = $bd->query('SELECT id, nome, turno, inicio FROM alunos');


$alunos = [];

while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){

    $alunos[] = $registro;
    
};

include 'view/listar.php';