<?php 

try{
	$hybridauth = new Hybrid_Auth( $config );
	$adapter = $hybridauth->authenticate( "Odnoklassniki" );
	$user_profile = $adapter->getUserProfile();
	$provider = "Ok";


} catch( Exception $e )  {
	die( "<b>got an error!</b> " . $e->getMessage() ); 
}

