<?php

/**
 * HybridAuth
 * http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
 * (c) 2009-2015, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
 */
// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------

return
		array(
			"base_url" => "http://clientfrom.net/include/hybridauth/",
			"providers" => array(
				// openid providers
				"OpenID" => array(
					"enabled" => true
				),
				"Vkontakte" => array(
					"enabled" => true,
					"keys" => array("id" => "5046730", "secret" => "2INajBleK0mqVVmUnopk"),
				),
				"Odnoklassniki" => array(
					"enabled" => true,
					"keys" => array("id" => "1151988736", "key"=>"CBAFPKKFEBABABABA","secret" => "137DECE3B819F79C1B3ECF9D"),
				),
				"Facebook" => array(
					"enabled" => true,
					"keys" => array("id" => "1467066153621065", "secret" => "b01d32363441bc1b436fc117dbc83ff1"),
					"trustForwarded" => false
				),
				"Twitter" => array(
					"enabled" => true,
					"keys" => array("key" => "dphmJLj954NgsgW8aaSZKexyL", "secret" => "HzvK9D7KZAerhuLVlp1om0rswlQJr07e8OfN2RKknW2r7yqXJQ"),
					"includeEmail" => false
				),
			),
			// If you want to enable logging, set 'debug_mode' to true.
			// You can also set it to
			// - "error" To log only error messages. Useful in production
			// - "info" To log info and error messages (ignore debug messages)
			"debug_mode" => false,
			// Path to file writable by the web server. Required if 'debug_mode' is not false
			"debug_file" => __DIR__."/log.txt",
);
