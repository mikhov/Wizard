<?php
header('Content-type: text/json');
header("Access-Control-Allow-Origin:*");
require_once(dirname(__FILE__)).'/../core/init.php';

if(isset($_POST['DisplayFaculty'])){
	$results = array();
	
	$get_Faculty = new Faculty();
	$result_GetFaculty = $get_Faculty->get_Faculty();
	
	if($result_GetFaculty != 0){
		$results = $result_GetFaculty;
		$results['Status'] = "success";
		
		echo json_encode($results);
	}else{
		$results['Status'] = "error";
		print json_encode($results);
	}
} // End DisplayFaculty

?>