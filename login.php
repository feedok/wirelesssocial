<?php
	require_once (__DIR__.'/model/db_conn.model.php');
	$db = new db_conn();

@$login = $_POST['login'];
@$password = $_POST['password'];

if (isset($login) && isset($password)) {
		if ($login == 'admin' && $password == 'admin') {		// НЕ ЗАБЫТЬ УДАЛИТЬ ЗАГЛУШКУ
			header('Location: http://clientfrom.net/login.php');
		}
		else{
			$err_login = "Неверный пользователь и/или пароль";
		}
}


$body_path= __DIR__.'/view/login.view.php';
$ps_path= __DIR__.'/model/password_crypt.inc.php';
if (file_exists($ps_path) && file_exists($body_path)) {
	include_once($body_path);
	include_once($ps_path);
}else{
	echo "<h2>Отсутсвуют файлы отображения</h2>";
	echo "Обратитесь к системному администратору</h2>";
}