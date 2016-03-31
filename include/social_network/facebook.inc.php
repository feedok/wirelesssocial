<?php 

try{
	$hybridauth = new Hybrid_Auth($config);
	$adapter = $hybridauth->authenticate( "Facebook" );
	$user_profile = $adapter->getUserProfile();

	$adapter -> setUserStatus(array(
		'message' => $message, 
		'picture' => $picture,
		'link' => $link,
		));
	$provider = "facebook";
	

} catch( Exception $e )  {
	die( "<b>got an error!</b> " . $e->getMessage() ); 
}
