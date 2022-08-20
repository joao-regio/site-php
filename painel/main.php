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

	</aside>
	<header>
		<div class="center">	
			<div class="logout">
				<a href="<?php echo INCLUDE_PATH_PAINEL; ?>?logout">Logout <i class="fa fa-window-close"></i></a>
			</div> <!-- logout -->
			<div class="clear"></div>
		</div>
	</header>
	<div class="clear"></div>
</body>
</html>