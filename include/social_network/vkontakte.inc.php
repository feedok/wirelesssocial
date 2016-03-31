<?php 
try{
	$hybridauth = new Hybrid_Auth( $config );
	$adapter = $hybridauth->authenticate( "Vkontakte" );
	$user_profile = $adapter->getUserProfile();
	$user_info = $adapter -> getUserProfile();
	$provider = "vkontakte";		
	echo "<pre>";
	print_r ($user_info);

} catch( Exception $e )  {
	die( "<b>got an error!</b> " . $e->getMessage() ); 
}