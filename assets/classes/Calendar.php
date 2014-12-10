<?php
require_once(dirname(__FILE__)).'/../core/init.php';
/*
database Calendar



Calendar_Id	
Date
Time
Title
Description	
Url
User_Id




*/

require_once('DB.php');


class Calendar
{
	
	private $Calendar;
	
	public
	$Calendar_Id,
	$Date,
	$Time,
	$Title,
	$Description,
	$Url,
	$User_Id;
	
	
		public function __construct()
		{
			$this->Calendar = new Connection();
			$this->Calendar = $this->Calendar->ConnectDB();
	
		}
		
		
		public function Insert_Event($Date,$Time,$Title,$Description,$Url,$User_Id){
		
				$query_Insert = $this->Calendar->prepare("INSERT INTO Calendar (Date,Time,Title,Description,Url,User_Id) VALUES(?,?,?,?,?,?)");
				$query_Insert->bindParam(1, $Date);
				$query_Insert->bindParam(2, $Time);
				$query_Insert->bindParam(3, $Title);
				$query_Insert->bindParam(4, $Description);
				$query_Insert->bindParam(5, $Url);
				$query_Insert->bindParam(6, $User_Id);
				$query_Insert->execute();
				
				if($query_Insert->rowCount() == 0){
					
					return 0; // 0  because no row inserted.
				}else{
					return 1;  // 1  because everything work properly.
					}
	
				
				
			
		} // End function insert User
		
		
		
		
		
		
		
		public function Update_User($Calendar_Id,$Date,$Time,$Title,$Description,$Url,$User_Id)
				{
			
			$query_Update = $this->Calendar->prepare("UPDATE Calendar SET Date=?,Time=?,Title=?,Description=?,Url=?,User_Id=? WHERE Calendar_Id = ?");
				
				$query_Update->bindParam(1,$Date);
				$query_Update->bindParam(2,$Time);
				$query_Update->bindParam(3,$Title);
				$query_Update->bindParam(4,$Description);
				$query_Update->bindParam(5,$Url);
				$query_Update->bindParam(6,$User_Id);
				$query_Update->bindParam(7,$Calendar_Id);
				$query_Update->execute();
				
				if($query_Update->rowCount() == 0){
					return 0; // 0  because no row inserted.
				}else{
					return 1;  // 1 is because everything work properly.
					}
	
			
		} // end function Update_User;
		
		
	 
		
		
		
		
		function Delete_Event($Calendar_Id)
		{
			$query_Delete = $this->Calendar->prepare("DELETE QUICK FROM Calendar WHERE Calendar_Id = ? ");
			$query_Delete->bindParam(1, $Calendar_Id);
			$query_Delete->execute();
			
			if($query_Delete->rowCount() == 1)
				{	
					return 1;  // return 1 because it is true
				}else{
					return 0;  // return 1 because it is false
				}
			
		} // end Delete_User($User_Id)
		 
	
	
	
} // End of my Users Class
