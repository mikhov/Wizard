<?php
header('Content-type: text/json');
header("Access-Control-Allow-Origin:*");
require_once(dirname(__FILE__)).'/../core/init.php';





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
	
	
	

if(isset($_FILES['StudentForm'])){
	
		$results = array(); // Inicialize array to store all json information to send back
		
		//////////////////////////////////////////////////////////////////////////////////// 
		////////////////////////////// GET VALUES FROM AJAX ////////////////////////////////
		
		$DescriptionForm  = $_POST['DescriptionForm'];
		$Student_Id 		= $_POST['Student_Id'];
		$Path 				= "../Form_Students/".'Student_'.$Student_Id.'_'.$_FILES["StudentForm"]["name"];
		$PathInsert 		= "/Form_Students/".'Student_'.$Student_Id.'_'.$_FILES["StudentForm"]["name"];
	
	
		if($_FILES["StudentForm"]["name"] != "" || $_FILES["StudentForm"]["name"] != null){
		
			
				if(move_uploaded_file($_FILES["StudentForm"]["tmp_name"],$Path)){
					
					//////// After uploaded the file is necessary to insert this form on the database /////////////
					$Insert_Form = new Form();
					$Result_Form = $Insert_Form->Insert_Form_Student($DescriptionForm,$PathInsert,$Student_Id);
					
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






if(isset($_POST['DisplayStudentForms'])){
		
		
		$Student_Id = $_POST['Student_Id'];
		$results = array(); // Inicialize array to store all json information to send back
	
		$Get_Students_Forms = new Form();
		$Result_GetStudentsForm = $Get_Students_Forms->get_Forms_Students($Student_Id);
	
		if($Result_GetStudentsForm != 0){
			
				$results = $Result_GetStudentsForm;
				$results['Status'] = "success";
				
				echo json_encode($results);
				
		}else if($Result_GetStudentsForm == 0){
			
				$results['Status'] = "No_Results";
				echo json_encode($results);
		}else{
				$results['Status'] = "error";	
				print json_encode($results);	
		}
		
		
} // End DisplayStudents
	
	
	

if(isset($_POST['DeleteStudentForm'])){
	
		$Form_Student_Id = $_POST['Form_Student_Id'];
		
		$results = array(); // Inicialize array to store all json information to send back
	
		$Delete_Student_Form = new Form();
		$Result_Delete = $Delete_Student_Form->Delete_Student_Form($Form_Student_Id);
	
		if($Result_Delete != 0){
			
				$results['Status'] = "success";	
				print json_encode($results);	
		}else{
				$results['Status'] = "error";	
				print json_encode($results);	
		}
	
} // End display form type








if(isset($_POST['DisplayStudentCourse'])){
	
	$Student_Id = $_POST['Student_Id'];
	$results = array();
	
	$getStudentCourse = new Courses();
	$resultStudentCourse = $getStudentCourse->get_Courses_by_Student_Id($Student_Id);
	
	if($resultStudentCourse != 0){
		
		//$resultStudentCourse['Status'] = "success";	
		print json_encode($resultStudentCourse);
		
				
	}else{
			
		$results['Status'] = "error";	
		print json_encode($results);	
	}
	
	
} // This is the end of my function DisplayStudentCourse



?>