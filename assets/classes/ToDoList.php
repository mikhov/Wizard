<?php
require_once(dirname(__FILE__)).'/../core/init.php';

/*

Table "TODO_LIST"


Todo_List_Id
ToDo_Description
ToDo_Date
ToDo_Urgent
Tu_Id

*/


class ToDoList
{
	
	private $ToDoList;
	
	public
	$Todo_List_Id,
	$ToDo_Description,
	$ToDo_Date,
	$ToDo_Urgent,
	$Tu_Id;
	
	
		public function __construct(){
			$this->_db = new DB();
			$this->_db = $this->_db ->Connect();
		}
		
	
		
	public function Insert_Task($ToDo_Description,$ToDo_Date,$ToDo_Urgent,$Tu_Id)
		{
			
				$query_Insert = $this->_db->prepare("INSERT INTO TODO_LIST (ToDo_Description,ToDo_Date,ToDo_Urgent,Tu_Id) VALUES(?,?,?,?)");
				$query_Insert->bindParam(1, $ToDo_Description);
				$query_Insert->bindParam(2, $ToDo_Date);
				$query_Insert->bindParam(3, $ToDo_Urgent);
				$query_Insert->bindParam(4, $Tu_Id);
				$query_Insert->execute();
				
				if($query_Insert->rowCount() == 0){
					return 0; // 0 rows affected.
				}else{
					return 1;  // 1 is because everything work properly.
				}

		} // End function insert User
		
		

	
		public function Update_Task($Todo_List_Id,$ToDo_Description,$ToDo_Date,$ToDo_Urgent)
				{
			
			$query_Update = $this->_db->prepare("UPDATE TODO_LIST SET ToDo_Description=?,ToDo_Date=?,ToDo_Urgent=? WHERE Todo_List_Id = ?");
				
				$query_Update->bindParam(1, $ToDo_Description);
				$query_Update->bindParam(2, $ToDo_Date);
				$query_Update->bindParam(3, $ToDo_Urgent);
				$query_Update->bindParam(4, $Todo_List_Id);
				$query_Update->execute();
				
				if($query_Update->rowCount() == 0){
					return 0;  // 0 error to edit.
				}else{
					return 1;  // 1 is because everything work properly.
					}
	
			
		} // end function Update_User;
		
		
	 
	
	
	
	
	
		public function get_ToDo_Info_by_TUID($Tu_Id)
			{
				$query_getTask = $this->_db->prepare("SELECT * FROM TODO_LIST WHERE Tu_Id = ?");
				$query_getTask->bindParam(1, $Tu_Id);
				$query_getTask->execute();
				
				$resultTask = array();
				$i=0;  
				  if($query_getTask->rowCount() != 0){
					
						while($result_Task = $query_getTask->fetch(PDO::FETCH_ASSOC)){
					
					
					$Todo_List_Id 		= (isset($result_Task['Todo_List_Id']) ? $result_Task['Todo_List_Id'] : null);
					$ToDo_Description 	= (isset($result_Task['ToDo_Description']) ? $result_Task['ToDo_Description'] : null);
					$ToDo_Date 		= (isset($result_Task['ToDo_Date']) ? $result_Task['ToDo_Date'] : null);
					$ToDo_Urgent 		= (isset($result_Task['ToDo_Urgent']) ? $result_Task['ToDo_Urgent'] : null);
					$Tu_Id 				= (isset($result_Task['Tu_Id']) ? $result_Task['Tu_Id'] : null);
					
					
					$resultTask['Todo_List_Id'][$i]		=	utf8_encode($Todo_List_Id); 
					$resultTask['ToDo_Description'][$i]	=	utf8_encode($ToDo_Description); 
					$resultTask['ToDo_Date_Mysql'][$i]	=	utf8_encode($ToDo_Date); 
					$resultTask['ToDo_Date'][$i]			=	date("m/d/Y",strtotime($ToDo_Date)); 
					$resultTask['ToDo_Urgent'][$i]		=	utf8_encode($ToDo_Urgent); 
					$resultTask['Tu_Id'][$i]				=	utf8_encode($Tu_Id); 
					
					
					$i++;
					} // End While loop
						
						return 	$resultTask;
						
					}else{
						
						return 0;
					} // End if else codition
		
				
			} //  end function get_User_Info_by_ID($User_Id)
			
			
			
	
	
		public function Delete_ToDo($Todo_List_Id)
		{
			$query_Delete = $this->_db->prepare("DELETE QUICK FROM TODO_LIST WHERE Todo_List_Id = ? ");
			$query_Delete->bindParam(1, $Todo_List_Id);
			$query_Delete->execute();
			
			if($query_Delete->rowCount() == 1)
				{	
					return 1;  // return 1 because it is true
				}else{
					return 0;  // return 1 because it is false
				}
			
		} // end Delete_User($User_Id)
		 
	
	
	
} // End of my Users Class

