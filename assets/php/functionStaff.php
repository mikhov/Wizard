<?php
header('Content-type: text/json');
header("Access-Control-Allow-Origin:*");
require_once(dirname(__FILE__)).'/../core/init.php';

if(isset($_POST['DisplayStaff'])){
	$results = array();
	
	$get_Staff = new Staff();
	$result_GetStaff = $get_Staff->get_Staff();
	
	if($result_GetStaff != 0){
		$results = $result_GetStaff;
		$results['Status'] = "success";
		
		echo json_encode($results);
	}else{
		$results['Status'] = "error";
		print json_encode($results);
	}
} // End DisplayStaff

?>