<?php
	if(isset($_GET['logout'])){
		Painel::logout();
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL; ?>css/painel-estilo.css">
    <title>Painel de controle</title>
</head>
<body>
	<aside>
		<div class="menu-wrapper">
			<div class="box-usuario">
				<?php
					if($_SESSION['image'] == ''){
				?> 
				<div class="avatar-usuario">
					<i class="fa fa-user"></i>
				</div><!-- avatar-usuario -->
				<?php }else{ ?>
					<div class="imagem-usuario">
						<img src="<?php echo INCLUDE_PATH_PAINEL; ?>uploads/<?php echo $_SESSION['image'];?>" alt="imagem do usuario" />
					</div><!-- imagem-usuario -->
				<?php } ?>
				<div class="nome-usuario">
					<p class="nome"><?php echo $_SESSION['nome'];?></p>
					<p class="cargo"><?php echo Painel::pegaCargo($_SESSION['cargo']); ?></p>
				</div>	
			</div><!-- box-usuario -->
		</div>
	</aside>
	<header>
		<div class="center">
			<div class="menu-mobile">
				<div class="menu-btn">
					<i class="fa fa-bars"></i>
				</div><!-- menu-btn -->
			</div><!--menu-mobile -->
			<div class="logout">
				<a href="<?php echo INCLUDE_PATH_PAINEL; ?>?logout"><i class="fa fa-window-close"></i> Logout</a>
			</div> <!-- logout -->
			<div class="clear"></div>
		</div><!-- center -->
	</header>
	<main>
		<section class="box-content left w100">
			
		</section>
		<div class="clear"></div>
	</main>
	<script src="<?php echo INCLUDE_PATH_PAINEL; ?>js/main.js"></script>
</body>
</html>