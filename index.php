<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once (__DIR__.'/model/db_conn.model.php');
$config = __DIR__ . '/include/hybridauth/config.php';
require_once( "include/hybridauth/Hybrid/Auth.php" );
require_once( "include/hybridauth/Hybrid/Endpoint.php");
require_once( "include/logWriter.inc.php");

if (isset($_REQUEST['hauth_start']))
	{
		Hybrid_Endpoint::process();
	}


if (isset($_COOKIE['from'])) {
	$logFile = $_COOKIE['from'] . ".txt";
	$from = $_COOKIE['from'];
}else{
	$logFile = "log.txt";
	$from = "umr";
}

switch ($from) {
	case "mebel":
		$message = "В Мебели Черноземья очень понравилось, мебель уровня итальяно-германских брендов, только по цене доступна http://mche.ru/";
		$picture = "http://clientfrom.net/images/client_img/mebelj_chernozemjya.JPG";
		$link = "http://mche.ru/";
		break;
	case "fmr":
		$message = "Оказывается в сервисном центре на Тургенева, 122, диагностика компьютеров и прочих планшетов/телефонов бесплатная при согласовании ремонта… Неожиданно! – мне казалось, что такого в городе уже нет и за диагностику приходится платить отдельно… Приятно все таки иногда ошибаться ☺";
		$picture = 'http://cs629203.vk.me/v629203191/15ae3/qniUDxq1OH0.jpg';
		$link = 'http://service.itsaturn.ru';
		break;
	case "umr":
		$message = "Оказывается в сервисном центре на Чекистов 9/1, диагностика компьютеров и прочих планшетов/телефонов бесплатная при согласовании ремонта… Неожиданно! – мне казалось, что такого в городе уже нет и за диагностику приходится платить отдельно… Приятно все таки иногда ошибаться ☺";
		$picture = 'http://cs629203.vk.me/v629203191/15ae3/qniUDxq1OH0.jpg';
		$link = 'http://service.itsaturn.ru';
		break;

}

@$get_key = $_GET['login'];
switch ($get_key) {
	case 'twitter':
		include_once (__DIR__."/include/social_network/twitter.inc.php");
		break;
	case 'facebook':
		include_once (__DIR__."/include/social_network/facebook.inc.php");
		break;
	case 'vkontakte':
		include_once (__DIR__."/include/social_network/vkontakte.inc.php");
		break;
	case 'odnoklassniki':
		include_once (__DIR__."/include/social_network/odnoklassniki.inc.php");
		break;
}

if (!isset($user_profile)) {
	$header_path = __DIR__.'/view/header.view.php';
	$body_path= __DIR__.'/view/index.view.php';
	if (file_exists($header_path) && file_exists($body_path)) {
		include_once($header_path);
		include_once($body_path);
	}else{
		echo "<h2>Отсутсвуют файлы отображения</h2>";
		echo "Обратитесь к системному администратору</h2>";
	}
}else{
	header("Location: http://clientfrom.net/");
}



if(@$_REQUEST['resourse'] == 'vkontakte'){
	$provider = $_REQUEST['resourse'];
	$UserHref = $_REQUEST['vkUserHref'];
	$UserName = $_REQUEST['vkUserName'];
	$UserLastName = $_REQUEST['vkUserLastName'];

	writeLog($provider, $UserHref, $UserName, $UserLastName, $logFile);
}


if (@$user_profile->identifier != NULL) {
	$UserHref = $user_profile->profileURL;
	$UserName = $user_profile->firstName;
	$UserLastName = $user_profile->lastName;

	if ($provider == "Ok") {
		$UserHref = "http://ok.ru/profile/" . $user_profile->identifier;
	}
	writeLog($provider, $UserHref, $UserName, $UserLastName, $logFile);

}
