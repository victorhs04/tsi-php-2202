<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
//Mensagem de sucesso ou falha na hora 

//de fazer o login

if( isset($autenticou) ){



    if( !$autenticou ){



        echo '  <div class="alert alert-danger" role="alert">

                    Credenciais inválidas!

                </div>';

    }

}
    ?>
<div class="container">
    <div class="row">
        <form action="autenticacao.php" method="post">
        Usuário: 
        <input name="usuario" type="text">
        <br>
        Senha:
        <input name="senha" type="password">
        <br>
        <input name="enviar" type="submit" value="Logar">
    </div>
</div>

</form>
</body>
</html>