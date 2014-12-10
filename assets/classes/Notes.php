<?php

require_once(dirname(__FILE__)).'/../core/init.php';
/*


TABLE "STUDENT_NOTE"

STUDENT_NOTE

Student_Note_Id
Note_Description
Note_Date
Student_Id



*/



class Notes
{
	
	private $_db;
	
	public
	$Student_Note_Id,
	$Note_Description,
	$Note_Date,
	$Student_Id;
		
	

			public function __construct(){
				$this->_db = new DB();
				$this->_db = $this->_db ->Connect();
			}
	
	
		
		
	
		
	public function Insert_Note($Note_Description,$Note_Date,$Student_Id)
		{
			
				$query_Insert = $this->_db->prepare("INSERT INTO STUDENT_NOTE (Note_Description,Note_Date,Student_Id)
														 VALUES(?,?,?)");
				$query_Insert->bindParam(1, $Note_Description);
				$query_Insert->bindParam(2, $Note_Date);
				$query_Insert->bindParam(3, $Student_Id);
				$query_Insert->execute();
				
				if($query_Insert->rowCount() == 0){
					return 0; // 0 because is 0 row affected
				}else{
					return 1;  // 1 is because everything work properly.
				}
	
				
				
			
		} // End function insert User
		
	
		
		public function Update_User($Student_Note_Id,$Note_Description,$Note_Date)
				{
			
			$query_Update = $this->_db->prepare("UPDATE STUDENT_NOTE SET Note_Description=?, Note_Date=? WHERE Student_Note_Id= ?");
				
				$query_Update->bindParam(1, $Note_Description);
				$query_Update->bindParam(2, $Note_Date);
				$query_Update->bindParam(3, $Student_Note_Id);
				$query_Update->execute();
				
				if($query_Update->rowCount() == 0){
					return 0;  // 0 because is 0 row affected
				}else{
					return 1;  // 1 is because everything work properly.
					}
	
			
		} // end function Update_User;
		
		
	 
			public function Get_Notes_By_StudentID($Student_Id)
			{
				
				$query_getNotes = $this->_db->prepare("SELECT * FROM STUDENT_NOTE WHERE Student_Id =?");
				$query_getNotes->bindParam(1,$Student_Id);
				$query_getNotes->execute();
				
				$resultNotes= array();
				$i=0;  
				
				  if($query_getNotes->rowCount() != 0){
					
						while($result_Notes = $query_getNotes->fetch(PDO::FETCH_ASSOC)){
							
							$Student_Note_Id 	= (isset($result_Notes['Student_Note_Id']) ? $result_Notes['Student_Note_Id'] : null);
							$Note_Description 	= (isset($result_Notes['Note_Description']) ? $result_Notes['Note_Description'] : null);
							$Note_Date 		= (isset($result_Notes['Note_Date']) ? $result_Notes['Note_Date'] : null);
							$Student_Id 		= (isset($result_Notes['Student_Id']) ? $result_Notes['Student_Id'] : null);
							
						
	
							$resultNotes['Student_Note_Id'][$i] 	=	utf8_encode($Student_Note_Id); 
							$resultNotes['Note_Description'][$i]	=	utf8_encode($Note_Description); 
							$resultNotes['Note_Date_MySQL'][$i] 	=	utf8_encode($Note_Date); 
							$resultNotes['Note_Date'][$i]			=	date("m/d/Y",strtotime($Note_Date)); 
							$resultNotes['Student_Id'][$i] 		=	utf8_encode($Student_Id); 
		
					$i++;
				
				
					} // End while loop
						
						return $resultNotes;
						
					} else{
						return 0;
						}
				
			}  // end function get_User_Info_by_Email($Email);
	
	
	
	
		function Delete_Note($Student_Note_Id)
		{
			$query_Delete = $this->_db->prepare("DELETE QUICK FROM STUDENT_NOTE WHERE Student_Note_Id = ? ");
			$query_Delete->bindParam(1, $Student_Note_Id);
			$query_Delete->execute();
			
			if($query_Delete->rowCount() == 1)
				{	
					return 1;  // return 1 because it is true
				}else{
					return 0;  // return 1 because it is false
				}
			
		} // end Delete_User($User_Id)
		 
	
	
	
} // End of my Users Class


