<?php
require_once(dirname(__FILE__)).'/../core/init.php';
/*

Table "Message"

Message_Id
To_User_Id
From_User_Id
Message
Date_Message
Time_Message


*/




class Message
{
	
	private $Message;
	
	public
	$Message_Id,
	$To_User_Id,
	$From_User_Id,
	$Message,
	$Date_Message,
	$Time_Message;
	
	
		public function __construct()
		{
			$this->Message = new Connection();
			$this->Message = $this->Message->ConnectDB();
	
		}
		
		
		public function Insert_Message($To_User_Id,$From_User_Id,$Message,$Date_Message,$Time_Message)
		{
			
				
				$query_Insert = $this->Message->prepare("INSERT INTO Message (To_User_Id,From_User_Id,Message,Date_Message,Time_Message) VALUES(?,?,?,?,?)");
				$query_Insert->bindParam(1, $To_User_Id);
				$query_Insert->bindParam(2, $From_User_Id);
				$query_Insert->bindParam(3, $Message);
				$query_Insert->bindParam(4, $Date_Message);
				$query_Insert->bindParam(5, $Time_Message);
				$query_Insert->execute();
				
				if($query_Insert->rowCount() == 0){
					
					return 0; // 0 is because Not Work.
				}else{
					return 1;  // 1 is because everything work properly.
					}
		} // End function insert User
		
		
		
		
		
		
		
		function Delete_Message($Message_Id)
		{
			$query_Delete = $this->Message->prepare("DELETE QUICK FROM Message WHERE Message_Id = ?");
			$query_Delete->bindParam(1, $Message_Id);
			$query_Delete->execute();
			
			if($query_Delete->rowCount() == 1)
				{	
					return 1;  // return 1 because it is true
				}else{
					return 0;  // return 1 because it is false
				}
			
		} // end Delete_User($User_Id)
		 
	
	
	
} // End of my Users Class
