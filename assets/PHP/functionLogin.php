<?php
header('Content-type: text/json');
header("Access-Control-Allow-Origin:*");
require_once(dirname(__FILE__)).'/../core/init.php';


if(isset($_POST['LdapLogin'])){
	
	
	$results = array(); // Inicialize array to store all json information to send back
	
	//////////////////////////////////////////////////////////////////////////////////// 
	////////////////////////////// GET VALUES FROM AJAX ////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////// 
	/////////////////////////////// SANITIZE THE INPUTS ///////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////// 
	
	
	$Username	=	filter_input(INPUT_POST, 'Username', FILTER_SANITIZE_STRING);
	$Password	=	filter_input(INPUT_POST, 'Password', FILTER_SANITIZE_STRING);
	

	/////// Initialize Ldap connection 
	$InitLdap = new Ldap();
	//////// GET USERNAME OBJECT //////////
	$UserObject = $InitLdap->get_DN_User($Username);
	
	if($UserObject == 0){
		
		$results['Status'] 	= 'Error_User_Pass';
		print json_encode($results);

	}else{
		
		/////////// HERE WE NEED TO LOGIN AND START THE SESSION //////
		
		$Result_Login = $InitLdap->ldap_Login($UserObject,$Password);
		if($Result_Login == 1){
			
			$results['Status'] 	= 'success';
			print json_encode($results);
			
		}else{
			$results['Status'] 	= 'error';
			print json_encode($results);
		}
		
	}
	
	
	
} // End buttonRequestEmail scope






if(isset($_GET['logout'])){
	session_start();
	$_SESSION['Time']="";
	$_SESSION['UserObject'] ="";
	session_destroy();
	
	header("Location: ../../Login.php");
	
}





?>