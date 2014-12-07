<?php
session_start();


/* CONFIGURATION FOR LOCALHOST SERVER */



$GLOBALS['config'] = array(
	'mysql'	=> array(
			'host' 				=> HOST SERVER,
			'username' 		=> USER DATABASE,
			'password' 		=> PASSWORD DATABASE,
			'db' 				=> DATABASE NAME
	),
	
	'remember'	=> array(
			'cookie_name' 		=> 'hash',
			'cookie_expiry' 	=> 604800
	),
	
	'session'	=> array(
			'session_name' 	=> NAME SESSION,
			'token_name' 		=> NAME TOKEN
	),
	'key'		=>array(
			'email_key' 		=> ENCRIPTION EMAIL TOKEN
	),
	'ldap'		=>array(
			'host' 		=> HOST SERVER,
			'port'		=>  PORT CONNECTION,
			'dn'		=> DN LDAN DATABASE,
			'basedn'	=> BASE LDAN DN DATABASE,
			'ldap_pss'	=> PASSWORD LDAP DATABAS
		
	),
	'url'		=>array(
			'host' 		=> HOST SERVER
		
	)
	
);

spl_autoload_register(function($class){
	require_once(dirname(__FILE__) ."/../classes/". $class . '.php');
});


