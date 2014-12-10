<?php
header('Content-type: text/json');
header("Access-Control-Allow-Origin:*");
require_once(dirname(__FILE__)).'/../core/init.php';





if(isset($_POST['FormType'])){
	
		$results = array(); // Inicialize array to store all json information to send back
		
		//////////////////////////////////////////////////////////////////////////////////// 
		////////////////////////////// GET VALUES FROM AJAX ////////////////////////////////
		
		$DescriptionForm  = $_POST['DescriptionForm'];
		$FormType 			= $_POST['FormType'];
		$Path 				= "../form/". $_FILES["userfile"]["name"];
		$PathInsert 		= "/form/". $_FILES["userfile"]["name"];
	
	
		if($_FILES["userfile"]["name"] != "" || $_FILES["userfile"]["name"] != null){
		
			
				if(move_uploaded_file($_FILES["userfile"]["tmp_name"],$Path)){
					
					//////// After uploaded the file is necessary to insert this form on the database /////////////
					
					$Insert_Form = new Form();
					$Result_Form = $Insert_Form->Insert_Form($DescriptionForm,$FormType,$PathInsert);
					
					if($Result_Form == 1){
						
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






if(isset($_POST['DisplayForms'])){
	
	
		$results = array(); // Inicialize array to store all json information to send back
		
		$getForms = new Form();
		$resultsGetForm  = $getForms->get_Forms();
	
		if($resultsGetForm != 0){
				$results = $resultsGetForm;
				$results['Status'] = "success";	
				print json_encode($results);	
		}else{
				$results['Status'] = "error";	
				print json_encode($results);	
		}
	
} // End display form type











if(isset($_POST['SearchForms'])){
	
	$FormType = $_POST['FormTypeSearch'];
	$FormName = $_POST['FormName'];
	
	
		$results = array(); // Inicialize array to store all json information to send back
		
		$getFormsSearch = new Form();
		$resultSearch  = $getFormsSearch->get_Forms_by_name_and_type($FormType,$FormName);
	
		if($resultSearch != 0){
				$results = $resultSearch;
				$results['Status'] = "success";	
				print json_encode($results);	
				
		}else{
				$results['Status'] = "error";	
				print json_encode($results);	
		}
	
} // End display form type






if(isset($_POST['DeleteForm'])){
	
		$Form_ID = $_POST['Form_ID'];
		
		$results = array(); // Inicialize array to store all json information to send back
	
		$Delete_Form = new Form();
		$Result_Delete = $Delete_Form->Delete_Form($Form_ID);
	
		if($Result_Delete != 0){
			
				$results['Status'] = "success";	
				print json_encode($results);	
		}else{
				$results['Status'] = "error";	
				print json_encode($results);	
		}
	
} // End display form type









if(isset($_POST['DisplayTypeForm'])){
	
	
		$results = array(); // Inicialize array to store all json information to send back
		
		$getTypeForm = new Form();
		$results  = $getTypeForm->get_Form_Type();
	
		if($results != 0){
				$results['Status'] = "success";	
				print json_encode($results);	
		}else{
				$results['Status'] = "error";	
				print json_encode($results);	
		}
	
} // End display form type












if(isset($_POST['Insert_Form_Type'])){
	
		$Form_Type_Description = $_POST['Form_Type_Description'];
		
		$results = array(); // Inicialize array to store all json information to send back
	
		$Insert_Form_Type = new Form();
		$Result_Insert = $Insert_Form_Type->Insert_Form_Type($Form_Type_Description);
	
		if($Result_Insert == 1){
			
				$results['Status'] = "success";	
				print json_encode($results);	
				
		}else if($Result_Insert == 2){
			
				$results['Status'] = "repeated";	
				print json_encode($results);	
				
		}else{
			
				$results['Status'] = "error";	
				print json_encode($results);	
		}
	
} // End display form type




if(isset($_POST['DeleteFormType'])){
	
		$Form_Type_Id = $_POST['Form_Type_Id'];
		
		$results = array(); // Inicialize array to store all json information to send back
	
		$Delete_Form_Type = new Form();
		$Result_Delete = $Delete_Form_Type->Delete_Form_Type($Form_Type_Id);
	
		if($Result_Delete != 0){
				$results['Status'] = "success";	
				print json_encode($results);	
		}else{
				$results['Status'] = "error";	
				print json_encode($results);	
		}
	
} // End display form type








if(isset($_POST['DisplayStudents'])){
		
		$results = array(); // Inicialize array to store all json information to send back
	
		$Get_Students = new Students();
		$Result_GetStudents = $Get_Students->get_Students();
	
		if($Result_GetStudents != 0){
			
				$results = $Result_GetStudents;
				$results['Status'] = "success";
				
				echo json_encode($results);
				
		}else{
				$results['Status'] = "error";	
				print json_encode($results);	
		}
		
		
} // End DisplayStudents
	
	
	
	







?>