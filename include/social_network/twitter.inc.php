<?php 

try{
	$hybridauth = new Hybrid_Auth( $config );
	$adapter = $hybridauth->authenticate( "Twitter" );
	$user_profile = $adapter->getUserProfile();
	$adapter -> setUserStatus(array(
		'message' => $message, 
		'picture' => $picture,
		));
	$provider = "twitter";

} catch( Exception $e )  {
	echo( "<b>got an error!</b> " . $e->getMessage() ); 
}

