<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="recebe.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nomeUsuario" id ="nome"><br>
        <label for="idade">Idade:</label>
        <input type="number" name="idadeUsuario" id ="Usuario"><br>
        <label for="cpf">CPF:</label>
        <input type="number" name="cpfUsuario" id ="cpf"><br>
        <label for="periodo">Período:</label>
        <select name="periodoUsuario" id="periodo"><br>
            <option value="">escolha</option>
            <option value="matutino">Matutino</option>
            <option value="vespertino">Vespertino</option>
            <option value="noturno">Noturno</option>
        </select><br>
        <input type="submit" value="Enviar"><br>

    </form>    
</body>
</html>

