<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <link href="estilo/font-awesome.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="descrição do site">
    <meta name="keywords" content="agencia">
    <title> <?php echo '<nome da agência>';?> </title>
</head>
<body>
<?php
    if(isset($_POST['acao']) && $_POST['identificador'] == 'form_home'){
        //formulário enviado
        if($_POST['email'] != ''){
            $email = $_POST['email'];
                $mail = new Email('smtp.office365.com', 'joaovregio@outlook.com','João');

                $mail->adicionarEndereco($email,'Empresa');

                $info = array('assunto'=>'Email cadastrado','corpo'=>'Seu email foi cadastrado no site com sucesso');
                $mail->formatarEmail($info);
                if($mail->enviarEmail()){
                    echo "<script>alert('email enviado')</script>";
                }else{
                    echo "<script>alert('email não enviado')</script>";
                }
        }else{
            echo "<script>alert('campos vazios não são permitidos')</script>";
        }
    }elseif (isset($_POST['acao']) && $_POST['identificador'] == 'form_contato') {
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];
        $nome = $_POST['nome'];
        $mail = new Email('smtp.office365.com', 'joaovregio@outlook.com','João');

        $mail->adicionarEndereco($email,'Empresa');

        $info = array('assunto'=>'Email cadastrado','corpo'=>'Seu email foi cadastrado no site com sucesso');
        $mail->formatarEmail($info);
        if($mail->enviarEmail()){
            echo "<script>alert('email enviado')</script>";
        }else{
            echo "<script>alert('email não enviado')</script>";
        }
    }
?>
<base base="<?php echo INCLUDE_PATH; ?>" />
    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        switch($url){
            case 'sobre':
                echo "<target target='sobre' />";
                break;
            case 'servicos':
                echo "<target target='servicos' />";
                break;
        }
    ?>
    <header>
        <div class="center">
            <div class="logomarca left"><a href="<?php echo INCLUDE_PATH; ?>">Logomarca</a></div><!--logomarca-->
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav><!--desktop-->  
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav><!--mobile--> 
            <div class="clear"></div>
        </div><!--center-->           
    </header>
    <div class="container-principal">
    <?php
        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        }else{
            if($url != 'sobre' && $url != 'servicos'){
                $pagina404 = true;
                include('pages/404.php');
            }else{
                include('pages/home.php');
            }
        }
    ?>
    </div>
    <footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div>       
    </footer>
    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/script.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
    <!--<script src="<?php echo INCLUDE_PATH; ?>js/exemplo.js"></script>-->
</body>
</html>  