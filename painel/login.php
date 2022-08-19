<!DOCTYPE html>
<html lang="pt-br">
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
        <?php

            if (session_status() !== PHP_SESSION_ACTIVE) {
              session_start();
            }

            if(isset($_POST['acao'])){
                $user = $_POST['user'];
                $password = $_POST['password'];

                $sql = MySql::connect()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND password = ?");
                $sql->execute(array($user,$password));
                if($sql->rowCount() == 1){
                    //login
                    $info = $sql->fetch();
                    $_SESSION['login'] = true;
                    $_SESSION['user'] = $user;
                    $_SESSION['password'] = $password;                    
                    
                    echo '<script>window.location.replace("http://localhost/site-php/painel/");</script>';
                    die();
                }else{
                    //fail
                    echo "<div class='box-error'><p>Usuário ou senha inválidos</p></div>";
                }
            }
        ?>
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
