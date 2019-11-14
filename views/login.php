<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php BASE_URL; ?>assets/css/login.css">
		<link rel="stylesheet" type="text/css" href="<?php BASE_URL;?>assets/css/bootstrap.css">
</head>
<body>
	<div class="loginarea">
		<form method="POST">
			<input type="email" name="email" placeholder="Digite seu usuário" >
			<input type="password" name="password" placeholder="Digite sua senha">
			<input type="submit" name="" value="Entrar"><br><br>

			<?php if(isset($error) && !empty($error)): ?>
			<div class="alert alert-danger">
				<?php echo $error ?>
			</div>

			<?php endif; ?>
		</form>
	</div>
</body>
</html>