<?php
session_start();


/*
$GLOBALS['config'] = array(
	'mysql'	=> array(
			'host' 				=> 'localhost',
			'username' 		=> 'juanhf',
			'password' 		=> 'Jhf#5479',
			'db' 				=> 'juanhf_Wizard'
	),
	
	'remember'	=> array(
			'cookie_name' 		=> 'hash',
			'cookie_expiry' 	=> 604800
	),
	
	'session'	=> array(
			'session_name' 	=> 'user',
			'token_name' 		=> 'token'
	),
	'key'		=>array(
			'email_key' 		=> 'Wizard#Fall2014'
	),
	'ldap'		=>array(
			'host' 		=> 'ldaps://ldap-r.temple.edu',
			'port'		=>  636,
			'dn'		=> 'cn=math,ou=roles,dc=temple,dc=edu',
			'basedn'	=> 'ou=people,dc=temple,dc=edu',
			'ldap_pss'	=> 'e3dR!123'
		
	),
	'url'		=>array(
			'host' 		=> 'http://web-huertas.com/work/programs/Wizard_Git/'
		
	)
	
);




spl_autoload_register(function($class){
	require_once(dirname(__FILE__) ."/../classes/". $class . '.php');
});


*/


/* CONFIGURATION FOR WEB-HUERTAS */

/*


$GLOBALS['config'] = array(
	'mysql'	=> array(
			'host' 				=> 'localhost',
			'username' 		=> 'juanhf',
			'password' 		=> 'Jhf#5479',
			'db' 				=> 'juanhf_Wizard'
	),
	
	'remember'	=> array(
			'cookie_name' 		=> 'hash',
			'cookie_expiry' 	=> 604800
	),
	
	'session'	=> array(
			'session_name' 	=> 'user',
			'token_name' 		=> 'token'
	),
	'key'		=>array(
			'email_key' 		=> 'Wizard#Fall2014'
	),
	'ldap'		=>array(
			'host' 		=> 'ldaps://ldap-r.temple.edu',
			'port'		=>  636,
			'dn'		=> 'cn=math,ou=roles,dc=temple,dc=edu',
			'basedn'	=> 'ou=people,dc=temple,dc=edu',
			'ldap_pss'	=> 'e3dR!123'
		
	),
	'url'		=>array(
			'host' 		=> 'http://web-huertas.com/work/programs/Wizard_Git/'
		
	)
	
);



spl_autoload_register(function($class){
	require_once(dirname(__FILE__) ."/../classes/". $class . '.php');
});

*/





/* CONFIGURATION FOR LOCALHOST SERVER */



$GLOBALS['config'] = array(
	'mysql'	=> array(
			'host' 				=> 'localhost',
			'username' 		=> 'root',
			'password' 		=> 'Jhf#5479',
			'db' 				=> 'Wizard'
	),
	
	'remember'	=> array(
			'cookie_name' 		=> 'hash',
			'cookie_expiry' 	=> 604800
	),
	
	'session'	=> array(
			'session_name' 	=> 'user',
			'token_name' 		=> 'token'
	),
	'key'		=>array(
			'email_key' 		=> 'Wizard#Fall2014'
	),
	'ldap'		=>array(
			'host' 		=> 'ldaps://ldap-r.temple.edu',
			'port'		=>  636,
			'dn'		=> 'cn=math,ou=roles,dc=temple,dc=edu',
			'basedn'	=> 'ou=people,dc=temple,dc=edu',
			'ldap_pss'	=> 'e3dR!123'
		
	),
	'url'		=>array(
			'host' 		=> 'http://localhost/~juanitohf/www/Wizard_Git/'
		
	)
	
);

spl_autoload_register(function($class){
	require_once(dirname(__FILE__) ."/../classes/". $class . '.php');
});







/* CONFIGURATION FOR TEMPLE SERVER SERVER */

/*

$GLOBALS['config'] = array(
	'mysql'	=> array(
			'host' 				=> 'localhost',
			'username' 		=> 'root',
			'password' 		=> 'justin332',
			'db' 				=> 'Wizard'
	),
	
	'remember'	=> array(
			'cookie_name' 		=> 'hash',
			'cookie_expiry' 	=> 604800
	),
	
	'session'	=> array(
			'session_name' 	=> 'user',
			'token_name' 		=> 'token'
	),
	'key'		=>array(
			'email_key' 		=> 'Wizard#Fall2014'
	),
	'ldap'		=>array(
			'host' 		=> 'ldaps://ldap-r.temple.edu',
			'port'		=>  636,
			'dn'		=> 'cn=math,ou=roles,dc=temple,dc=edu',
			'basedn'	=> 'ou=people,dc=temple,dc=edu',
			'ldap_pss'	=> 'e3dR!123'
		
	),
	'url'		=>array(
			'host' 		=> 'http://www.cnc.temple.edu/Wizard/'
		
	)
	
);

spl_autoload_register(function($class){
	require_once(dirname(__FILE__) ."/../classes/". $class . '.php');
});

*/



