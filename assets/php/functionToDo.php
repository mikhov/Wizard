<?php
header('Content-type: text/json');
header("Access-Control-Allow-Origin:*");
require_once(dirname(__FILE__)).'/../core/init.php';

	


if(isset($_POST['AddToDoEvent'])){
	
	

	
	
	$results = array(); // Inicialize array to store all json information to send back
	
	//////////////////////////////////////////////////////////////////////////////////// 
	////////////////////////////// GET VALUES FROM AJAX ////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////// 

	$DescriptionEvent = $_POST['DescriptionEvent'];
	$EventDate 		= $_POST['EventDate'];
	$EventTuId 		= $_POST['EventTuId'];
	$UrgentEvent 		= $_POST['UrgentEvent'];
	
	
	 
	
	$AddToDoEvent = new ToDoList();
	$ResultAddEvent = $AddToDoEvent->Insert_Task($DescriptionEvent,$EventDate,$UrgentEvent,$EventTuId);
	
	
	if($ResultAddEvent == 1){
		
		$results['Status'] 	= 'success';
			print json_encode($results);

	}else{
		
		$results['Status'] 	= 'error';
		print json_encode($results);
		
	}
		

} // End buttonRequestEmail scope




if(isset($_POST['displayToDoEvents'])){

	$results = array();
	$GetToDoEvent = new ToDoList();
	$ResultGetEvent = $GetToDoEvent ->get_ToDo_Info_by_TUID($_POST['EventTuId']);
	
	
	if($ResultGetEvent != 0){
		
		$ResultGetEvent['Status'] = "success"; 
		print json_encode($ResultGetEvent, JSON_FORCE_OBJECT);

	}else{
		
		$results['Status'] 	= 'error';
		print json_encode($results);
		
	}
}





if(isset($_POST['deleteToDoEvents'])){

	$DeleteToDoEvent = new ToDoList();
	$ResultDeleteEvent = $DeleteToDoEvent ->Delete_ToDo($_POST['Task_Id']);
	
	$results = array();
	
	if($ResultDeleteEvent != 0){
		
		$results['Status'] = "success"; 
		print json_encode($results);

	}else{
		
		$results['Status'] = 'error';
		print json_encode($results);
		
	}
}




if(isset($_POST['EditToDoEvent'])){
	
	$results = array();
	
	
	
	$ToDo_Description 		= $_POST['DescriptionEventEdit'];
	$ToDo_Date 			= $_POST['EventDateEdit'];
	$ToDo_Urgent 			= $_POST['UrgentEvent'];
	$Todo_List_Id 			= $_POST['taskId'];

	$UpdateToDoEvent = new ToDoList();
	$ResultUpdateEvent = $UpdateToDoEvent ->Update_Task($Todo_List_Id,$ToDo_Description,$ToDo_Date,$ToDo_Urgent);
	

	if($ResultUpdateEvent != 0){
		
		$results['Status'] = "success"; 
		print json_encode($results);

	}else{
		
		$results['Status'] = 'error';
		print json_encode($results);
		
	}
}


?>