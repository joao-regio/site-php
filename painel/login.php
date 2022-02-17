<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL; ?>css/painel-estilo.css">
    <title>Login</title>
</head>
<body>
    <div class="box-login">
        <h2>Faça seu login</h2>
        <form method="post">
            <input type="text" name="user" placeholder="Username..." required>
            <br>
            <input type="password" name="password" placeholder="Senha..." required>
            <button type="submit" name="acao">Entrar!</button>
        </form>
    </div>
</body>
</html>
