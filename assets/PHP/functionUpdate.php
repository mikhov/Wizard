<?php
header('Content-type: text/json');
header("Access-Control-Allow-Origin:*");
require_once(dirname(__FILE__)).'/../core/init.php';





if(isset($_FILES["StudentFileUpdate"])){
	

		
		$results = array(); // Inicialize array to store all json information to send back
		
		
		//////////////////////////////////////////////////////////////////////////////////// 
		////////////////////////////// GET VALUES FROM AJAX ////////////////////////////////
		
		
		$Path 				= "../csv/". $_FILES["StudentFileUpdate"]["name"].date('Y-m-d');
		$PathInsert 		= "/csv/". $_FILES["StudentFileUpdate"]["name"].date('Y-m-d');
	
		
		if($_FILES["StudentFileUpdate"]["name"] != "" || $_FILES["StudentFileUpdate"]["name"] != null){
		
					
				if(move_uploaded_file($_FILES["StudentFileUpdate"]["tmp_name"],$Path)){
					
					//////// After uploaded the file is necessary to Update the student database /////////////
					
					
				
					$UpdateStudentDb = new ExportExcel();
					$Result_Update = $UpdateStudentDb->UpdateDatabase($_FILES["StudentFileUpdate"]["name"].date('Y-m-d'));
					
					
					if($Result_Update== 1){
						
						$results['Status'] = "success";	
						print json_encode($results);	
						
					}else{
						$results['Status'] = "error";	
						print json_encode($results);
					
					}
					
					
				}else{
					
					$results['Status'] = "error_moving_file";	
		  			print json_encode($results);
					
					}	  
					 
	
		}else{
			
			$results['Status'] = "file_no_attached";	
			print json_encode($results);
			
			}
  		 
	
		
	
	
} // End buttonRequestEmail scope







?>