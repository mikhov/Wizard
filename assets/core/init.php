<?php
session_start();

$GLOBALS['config'] = array(
	'mysql'	=> array(
			'host' 				=> 'localhost',
			'username' 		=> 'juanhf',
			'password' 		=> 'Jhf#5479',
			'db' 				=> 'juanhf_Wizard_Shi'
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
			'port'		=> 636,
			'dn'		=> 'cn=math,ou=roles,dc=temple,dc=edu',
			'basedn'	=> 'ou=people,dc=temple,dc=edu',
			'ldap_pss'	=> 'e3dR!123'
		
	)
	
);




spl_autoload_register(function($class){
	require_once(dirname(__FILE__) ."/../classes/". $class . '.php');
});

