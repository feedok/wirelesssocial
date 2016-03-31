<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Логин в личный кабинет</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>

	<script src="//vk.com/js/api/openapi.js" type="text/javascript"></script>

	<link rel="icon" type="image/png" href="images/favicon.jpg">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/login/style.css"/>

</head>
<body>

	<div class="login-card">
	<h1>Логин</h1><br>
<form method="POST">
	<input type="text" name="login" placeholder="Имя пользователя" value="admin">
	<input type="password" name="password" placeholder="Пароль" value="admin">
	<input type="submit" name="submit" class="login login-submit" value="Войти">
	<a href="index.php">index</a>

		<?php if(isset($err_login)){
			echo "<h4> $err_login </h4>";
		}

	?>
</form>
	
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
