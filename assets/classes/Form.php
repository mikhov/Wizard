<?php
date_default_timezone_set('America/New_York');
require_once(dirname(__FILE__)).'/../core/init.php';


/*
Table FORM


Form_ID	
Form_Description
Form_Date
Form_Type_Id
Form_Path


*/


/*
Table FORM_STUDENT

Form_Student_Id
Form_Student_Description
Form_Student_Path	
Form_Student_Date	date
Student_Id


*/


class Form{
	
	
	private $_db;
	
	public
	$Form_ID,	
	$Form_Description,
	$Form_Date,
	$Form_Type_Id,
	$Form_Path;
	
		
	public function __construct(){
		$this->_db = new DB();
		$this->_db = $this->_db ->Connect();
	}
	
	
			
	public function Insert_Form($Form_Description,$Form_Type_Id,$Form_Path)
		{
			$Form_Date = date('Y-m-d');
			$Form_Date;
			
			$query_Insert = $this->_db->prepare("INSERT INTO FORM (Form_Description,Form_Date,Form_Type_Id,Form_Path) VALUES(?,?,?,?)");
			$query_Insert->bindParam(1, $Form_Description);
			$query_Insert->bindParam(2, $Form_Date);
			$query_Insert->bindParam(3, $Form_Type_Id);
			$query_Insert->bindParam(4, $Form_Path);
			$query_Insert->execute();
				
			if($query_Insert->rowCount() == 0){
					return 0; // 0 because error inserting new entity
					//print 0;
			}else{
					return 1;  // 1 is because everything work properly.
					//print 1;
				}
		} // End function insert User
		
		
		
		
		
		
		
	public function Delete_Form($Form_ID)
		{
			$query_Delete = $this->_db->prepare("DELETE QUICK FROM FORM WHERE Form_ID = ? ");
			$query_Delete->bindParam(1, $Form_ID);
			$query_Delete->execute();
			
			if($query_Delete->rowCount() == 1)
				{	
					return 1;  // return 1 because it is true
				}else{
					return 0;  // return 1 because it is false
				}
			
		} // end Delete_User($User_Id)
		
		
		
		
		//// This function is to get forms
		
		
		

public function get_Forms()
		{
			$query_GetForm = $this->_db->prepare("SELECT * FROM FORM,FORM_TYPE WHERE FORM.Form_Type_Id = FORM_TYPE.Form_Type_Id ORDER BY Form_Description ASC");
			$query_GetForm->execute();
			$Return = array();
			$i = 0;
			
			if($query_GetForm->rowCount() != 0)
				{	
					
					while($resultGetType = $query_GetForm->fetch(PDO::FETCH_ASSOC)){
						
							$Return['Form_ID'][$i]  				 = $resultGetType['Form_ID'];
							$Return['Form_Description'][$i] 		 = $resultGetType['Form_Description'];
							$Return['Form_Date_mysql'][$i]  		 = $resultGetType['Form_Date'];
							$Return['Form_Date'][$i]  			 = date("d-m-Y", strtotime($resultGetType['Form_Date']));
							$Return['Form_Type_Id'][$i] 			 = $resultGetType['Form_Type_Id'];
							$Return['Form_Type_Description'][$i] = $resultGetType['Form_Type_Description'];
							$Return['Form_Path'][$i] 				 = Config::get('url/host')."assets".$resultGetType['Form_Path'];
							
							$i++;
							
					} // End while loop
					
					
					return $Return;  // return the array which contain the form type.
				}else{
					return 0;  // return 1 because it is false
				}
			
		} // end Delete_User($User_Id)
		
		
		
		
		
		
		
		
public function get_Forms_by_name_and_type($FormType,$FormName){
				
			
			$FormName = '%'.$FormName.'%';
		
	
	
			$query_GetFormSearch = $this->_db->prepare("SELECT * FROM FORM,FORM_TYPE 
													  WHERE FORM.Form_Type_Id = FORM_TYPE.Form_Type_Id 
													  	AND (Form_Description LIKE :search) 
														AND  FORM.Form_Type_Id = $FormType 
													  ORDER BY Form_Description ASC");
			$query_GetFormSearch->bindParam(':search',$FormName);							  
			$query_GetFormSearch->execute();
			$Return = array();
			$i = 0;
			
			if($query_GetFormSearch->rowCount() != 0)
				{	
					
					while($resultGetType = $query_GetFormSearch->fetch(PDO::FETCH_ASSOC)){
						
							$Return['Form_ID'][$i]  				 = $resultGetType['Form_ID'];
							$Return['Form_Description'][$i] 		 = $resultGetType['Form_Description'];
							$Return['Form_Date_mysql'][$i]  		 = $resultGetType['Form_Date'];
							$Return['Form_Date'][$i]  			 = date("d-m-Y", strtotime($resultGetType['Form_Date']));
							$Return['Form_Type_Id'][$i] 			 = $resultGetType['Form_Type_Id'];
							$Return['Form_Type_Description'][$i] = $resultGetType['Form_Type_Description'];
							$Return['Form_Path'][$i] 				 = Config::get('url/host')."assets".$resultGetType['Form_Path'];
							
							$i++;
							
					} // End while loop
					
					
					return $Return;  // return the array which contain the form type.
				}else{
					return 0;  // return 1 because it is false
				}
			
		} // end Delete_User($User_Id)
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		public function Insert_Form_Type($Form_Type_Description)
		{
			
			////CHECK IF THIS FORM_TYPE ALREADY EXIST ON THE DATABASE
			
			$Check_Form_Type = $this->_db->prepare("SELECT * FROM FORM_TYPE WHERE Form_Type_Description = ?");
			$Check_Form_Type->bindParam(1,$Form_Type_Description);
			$Check_Form_Type->execute();
			
			if($Check_Form_Type->rowCount()==0){
				
					$query_Insert_Type = $this->_db->prepare("INSERT INTO FORM_TYPE (Form_Type_Description) VALUES(?)");
					$query_Insert_Type->bindParam(1,$Form_Type_Description);
					$query_Insert_Type->execute();
				
				if($query_Insert_Type->rowCount() != 0){
					return 1;  // return the array which contain the form type.
				}else{
					return 0;  // return 1 because it is false
				}
			
			}else{
				return 2;  // This Form type already exist on the database
				
			} //// end first else condition
			
		
			
		} // end Delete_User($User_Id)
		
		
		
	public function get_Form_Type()
		{
			$query_GetType = $this->_db->prepare("SELECT * FROM FORM_TYPE ORDER BY Form_Type_Description ASC");
			$query_GetType->execute();
			$Return = array();
			$i = 0;
			
			if($query_GetType->rowCount() != 0)
				{	
					
					while($resultGetType = $query_GetType->fetch(PDO::FETCH_ASSOC)){
						
							$Return['Form_Type_Id'][$i]  = $resultGetType['Form_Type_Id'];
							$Return['FormType'][$i] 		= $resultGetType['Form_Type_Description'];
							$i++;
							
					} // End while loop
					
					
					return $Return;  // return the array which contain the form type.
				}else{
					return 0;  // return 1 because it is false
				}
			
		} // end Delete_User($User_Id)
		
		
		
		
		public function Delete_Form_Type($Form_Type_Id)
		{
			$query_Delete = $this->_db->prepare("DELETE QUICK FROM FORM_TYPE WHERE Form_Type_Id = ?");
			$query_Delete->bindParam(1, $Form_Type_Id);
			$query_Delete->execute();
			
			if($query_Delete->rowCount() == 1)
				{	
					return 1;  // return 1 because it is true
				}else{
					return 0;  // return 1 because it is false
				}
			
		} // end Delete_User($User_Id)

		
		
		
		public function Insert_Form_Student($Form_Student_Description,$Form_Student_Path,$Student_Id)
		{
			$Form_Student_Date = date('Y-m-d');
		
			
			$query_Insert = $this->_db->prepare("INSERT INTO FORM_STUDENT
													(Form_Student_Description,Form_Student_Path,Form_Student_Date,Student_Id) 
													VALUES(?,?,?,?)");
			$query_Insert->bindParam(1, $Form_Student_Description);
			$query_Insert->bindParam(2, $Form_Student_Path);
			$query_Insert->bindParam(3, $Form_Student_Date);
			$query_Insert->bindParam(4, $Student_Id);
			$query_Insert->execute();
				
			if($query_Insert->rowCount() == 0){
					return 0; // 0 because error inserting new entity
					//print 0;
			}else{
					return 1;  // 1 is because everything work properly.
					//print 1;
				}
		} // End function insert User
		
		
		
		

public function get_Forms_Students($Student_Id)
		{
			$query_GetForm = $this->_db->prepare("SELECT * FROM FORM_STUDENT WHERE Student_Id = ?");
			$query_GetForm->bindParam(1,$Student_Id);
			$query_GetForm->execute();
			$Return = array();
			$i = 0;
			
			if($query_GetForm->rowCount() != 0)
				{	
					
					
					while($resultGetType = $query_GetForm->fetch(PDO::FETCH_ASSOC)){
						
					 $Return['Form_Student_Id'][$i]  			= $resultGetType['Form_Student_Id'];
					 $Return['Form_Student_Description'][$i]= $resultGetType['Form_Student_Description'];
					 $Return['Form_Student_Path'][$i]		= Config::get('url/host')."assets".$resultGetType['Form_Student_Path'];
					 $Return['Form_Student_Date_mySql'][$i] = $resultGetType['Form_Student_Date'];
					 $Return['Form_Student_Date'][$i]  		= date("d-m-Y", strtotime($resultGetType['Form_Student_Date']));
					 $Return['Student_Id'][$i] 				= $resultGetType['Student_Id'];
							
						
							$i++;
							
					} // End while loop
					
					
					return $Return;  // return the array which contain the form type.
				}else{
					return 0;  // return 1 because it is false
				}
			
		} // end Delete_User($User_Id)
		
		
		
			
		
	public function Delete_Student_Form($Form_Student_Id)
		{
			$query_Delete = $this->_db->prepare("DELETE QUICK FROM FORM_STUDENT WHERE Form_Student_Id = ? ");
			$query_Delete->bindParam(1, $Form_Student_Id);
			$query_Delete->execute();
			
			if($query_Delete->rowCount() == 1)
				{	
					return 1;  // return 1 because it is true
				}else{
					return 0;  // return 1 because it is false
				}
			
		} // end Delete_User($User_Id)
		
		
		
		
		
		
		
		
		
} // End class User

