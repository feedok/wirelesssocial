<?php
function writeLog($provider ="", $userHref="", $name="", $lastName="", $logFile = ""){
	$datetime = date("d/m/Y - H:i");
	$mailRecepient = 'stunoff@gmail';
	$subject = 'social.it-trade logs error';
		
	$message = "$datetime\t$provider\t$userHref\t$name\t$lastName\n";
	//if file
	$filePath = $_SERVER['DOCUMENT_ROOT'] . "/logs/" . $logFile;

	if ($provider == 'Ok') {
		file_put_contents ($filePath, $message, FILE_APPEND);
		header("Location: https://connect.ok.ru/oauth/authorize?client_id=1151988736&scope=VALUABLE_ACCESS;&response_type=token&redirect_uri=http://clientfrom.net/&layout=m");

	}else{
		if (file_exists($filePath)) {
				if (file_put_contents ($filePath, $message, FILE_APPEND)){
					header("Location: http://192.168.88.1/login?login=pass");
				}
				else{
					mail($mailRecepient, $subject, 'cannot write log to file ');
				}
		}
		else {
			mail($mailRecepient, $subject, 'log file does not exists ');
		}
	}
}
