<!DOCTYPE html>
<html>
<head>
	<title>Painel - <?php echo $viewData['company_name']; ?></title>
	<!-- <link rel="stylesheet" type="text/css" href="<?php BASE_URL;?>assets/css/style.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php BASE_URL;?>assets/css/template.css">
	<script type="text/javascript" src="<?php BASE_URL;?>assets/js/jquery-1.11.3.js"></script>
	<script type="text/javascript" src="<?php BASE_URL;?>assets/js/script.js"></script>
</head>
<body>
	<div class="leftmenu">
		<div class="company_name">
			<?php echo $viewData['company_name']; ?>
		</div>
		<div class="menuarea">
			<ul>
				<li><a href="<?php echo BASE_URL; ?>">Home</a></li>
				<li><a href="<?php echo BASE_URL; ?>permissions">Permissões</a></li>
			</ul>
		</div>
				
	</div>
	<div class="containner">
		<div class="top"> <!-- Como não está no view tem que usar o $viewData -->
			<div class="top_right"><a href="<?php echo BASE_URL.'/login/logout'; ?> ">Sair</a></div>
			<div class="top_right"><?php echo $viewData['user_email']; ?></div>
		</div>
		<div class="area">  <!-- é a area do sistema propriamente dita. Abaixo do Menu Top onde está o usuário e sair -->
			<?php $this->loadViewInTemplate($viewName, $viewData); ?>
		</div>
	</div>
</body>
</html>