<?php
require_once(dirname(__FILE__)).'/../core/init.php';
/*

Table "ToDoList"


ToDoList_Id	
ToDo_Description
ToDo_Date
ToDo_Urgent	
User_Id

*/


class ToDoList
{
	
	private $ToDoList;
	
	public
	$ToDoList_Id,	
	$ToDo_Description,
	$ToDo_Date,
	$ToDo_Urgent,	
	$User_Id;
	
	
		public function __construct()
		{
			$this->ToDoList = new Connection();
			$this->ToDoList = $this->ToDoList->ConnectDB();
	
		}
		
	
		
	public function Insert_User($ToDo_Description,$ToDo_Date,$ToDo_Urgent,$User_Id)
		{
			
				$query_Insert = $this->ToDoList->prepare("INSERT INTO ToDoList (ToDo_Description,ToDo_Date,ToDo_Urgent,User_Id) VALUES(?,?,?,?)");
				$query_Insert->bindParam(1, $ToDo_Description);
				$query_Insert->bindParam(2, $ToDo_Date);
				$query_Insert->bindParam(3, $ToDo_Urgent);
				$query_Insert->bindParam(4, $User_Id);
				$query_Insert->execute();
				
				if($query_Insert->rowCount() == 0){
					return 0; // 0 rows affected.
				}else{
					return 1;  // 1 is because everything work properly.
				}
	
				
				
			
		} // End function insert User
		
		
		
		
		
		
		
		public function Update_ToDo($ToDoList_Id,$ToDo_Description,$ToDo_Date,$ToDo_Urgent,$User_Id)
				{
			
			$query_Update = $this->ToDoList->prepare("UPDATE ToDoList SET ToDo_Description=?,ToDo_Date=?,ToDo_Urgent=?,User_Id=? WHERE ToDoList_Id = ?");
				
				$query_Update->bindParam(1, $ToDo_Description);
				$query_Update->bindParam(2, $ToDo_Date);
				$query_Update->bindParam(3, $ToDo_Urgent);
				$query_Update->bindParam(4, $User_Id);
				$query_Update->bindParam(5, $ToDoList_Id);
				$query_Update->execute();
				
				if($query_Update->rowCount() == 0){
					return 0;  // 0 error to edit.
				}else{
					return 1;  // 1 is because everything work properly.
					}
	
			
		} // end function Update_User;
		
		
	 
	
	
	
	
	
			function get_ToDo_Info_by_ID($ToDoList_Id)
			{
				$query_getUser = $this->ToDoList->prepare("SELECT * FROM ToDoList WHERE ToDoList_Id = ?");
				$query_getUser->bindParam(1, $ToDoList_Id);
				$query_getUser->execute();
				$result = $query_getUser->fetchAll(PDO::FETCH_ASSOC);
				@$result = $result[0];
				
				$this->ToDoList_Id 		= $result['ToDoList_Id'];
				$this->ToDo_Description	= $result['ToDo_Description'];
				$this->ToDo_Date		= $result['ToDo_Date'];
				$this->ToDo_Urgent		= $result['ToDo_Urgent'];
				$this->User_Id		= $result['User_Id'];
				
				
			} //  end function get_User_Info_by_ID($User_Id)
			
			
			
	
	
		function Delete_ToDo($ToDoList_Id)
		{
			$query_Delete = $this->ToDoList->prepare("DELETE QUICK FROM ToDoList WHERE ToDoList_Id = ? ");
			$query_Delete->bindParam(1, $ToDoList_Id);
			$query_Delete->execute();
			
			if($query_Delete->rowCount() == 1)
				{	
					return 1;  // return 1 because it is true
				}else{
					return 0;  // return 1 because it is false
				}
			
		} // end Delete_User($User_Id)
		 
	
	
	
} // End of my Users Class
