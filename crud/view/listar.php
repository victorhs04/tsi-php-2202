<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Listar</title>
</head>
<body>
<div class="container">

    <a href="formIncluir.php"><button class='btn'>Novo Aluno</button></a>

    <table class="table">
        <throw>
            <th>ID</th>
            <th>Nome</th>
            <th>Turno</th>
            <th>Início</th>
            <th>Ações</th>
        </throw>;

        <?php
        foreach($alunos as $aluno){

            echo "<tr>
                    <td>{$registro['id']}</td>
                    <td>{$registro['nome']}</td>
                    <td>{$registro['turno']}</td>
                    <td>{$registro['inicio']}</td>
                 </tr>";

        }
        ?>

    </table>
</div>
</body>
</html>