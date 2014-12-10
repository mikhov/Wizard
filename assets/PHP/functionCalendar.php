<?php
header('Content-type: text/json');
header("Access-Control-Allow-Origin:*");
require_once(dirname(__FILE__)).'/../core/init.php';





if(isset($_POST['AddCalendarEvent'])){
	
	
	$results = array(); // Inicialize array to store all json information to send back
	
	//////////////////////////////////////////////////////////////////////////////////// 
	////////////////////////////// GET VALUES FROM AJAX ////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////// 
	
	$Title 				= $_POST['TitleEvent'];
	$Description 		= $_POST['DescriptionEvent'];
	$Date_Event 		= $_POST['EventDate'];
	$Time_Start_Event 	= $_POST['EventStart'];
	$Time_End_Event 	= $_POST['EventEnd'];
	$Url 				= $_POST['UrlEvent'];
	$TU_ID 				= $_POST['EventTuId'];
	$Public_Event 		= $_POST['publicEvent'];
	
	
	$AddCalendarEvent = new Calendar();
	$ResultAddEvent = $AddCalendarEvent->Insert_Event($Date_Event,$Time_Start_Event,$Time_End_Event,$Title,$Description,$Url,$TU_ID,$Public_Event);
	
	
	if($ResultAddEvent == 1){
		
		$results['Status'] 	= 'success';
			print json_encode($results);

	}else{
		
		$results['Status'] 	= 'error';
		print json_encode($results);
		
	}
		

} // End buttonRequestEmail scope




if(isset($_GET['getEventsCalendarById'])){
	
	$getCalendarEvent = new Calendar();
	$ResultGetEvent = $getCalendarEvent->getEventByTUID($_GET['TU_ID']);
	
	
	if($ResultGetEvent != 0){
		
	
			print json_encode($ResultGetEvent);

	}else{
		
		$results['Status'] 	= 'error';
		print json_encode($results);
		
	}
}







?>