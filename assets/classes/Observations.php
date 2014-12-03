<?php

require_once(dirname(__FILE__)).'/../core/init.php';
/*
TABLE "Observations"

Observations_Id	
Title
Observations_Description	
Observation_Date
Observation_Time
Student_Id


*/



class Observations
{
	
	private $Observations;
	
	public
	$Observations_Id,
	$Title,	
	$Observations_Description,	
	$Observation_Date,
	$Observation_Time,
	$Student_Id;
	
	
		public function __construct()
		{
			$this->Observations = new Connection();
			$this->Observations = $this->Observations->ConnectDB();
	
		}
		
	
		
	public function Insert_Observation($Title,$Observations_Description,$Observation_Date,$Observation_Time,$Student_Id)
		{
			
				
				
				$query_Insert = $this->Observations->prepare("INSERT INTO Observations (Title,Observations_Description,Observation_Date,Observation_Time,Student_Id) VALUES(?,?,?,?,?)");
				$query_Insert->bindParam(1, $Title);
				$query_Insert->bindParam(2, $Observations_Description);
				$query_Insert->bindParam(3, $Observation_Date);
				$query_Insert->bindParam(4, $Observation_Time);
				$query_Insert->bindParam(5, $Student_Id);
				$query_Insert->execute();
				
				if($query_Insert->rowCount() == 0){
					return 0; // 0 because is 0 row affected
				}else{
					return 1;  // 1 is because everything work properly.
				}
	
				
				
			
		} // End function insert User
		
		
		
		
		
		
		
		public function Update_User($Observations_Id,$Observations_Description,$Observation_Date,$Observation_Time,$Student_Id)
				{
			
			$query_Update = $this->Observations->prepare("UPDATE Observations SET Title =?, Observations_Description =?, Observation_Date=?, Observation_Time=?, Student_Id=? WHERE Observations_Id = ?");
				
				$query_Update->bindParam(1, $Title);
				$query_Update->bindParam(2, $Observations_Description);
				$query_Update->bindParam(3, $Observation_Date);
				$query_Update->bindParam(4, $Observation_Time);
				$query_Update->bindParam(5, $Student_Id);
				$query_Update->bindParam(6, $Observations_Id);
				$query_Update->execute();
				
				if($query_Update->rowCount() == 0){
					return 0;  // 0 because is 0 row affected
				}else{
					return 1;  // 1 is because everything work properly.
					}
	
			
		} // end function Update_User;
		
		
	 
			function get_Observation_Info_by_ID($Observations_Id)
			{
				
				$query_getUser = $this->Observations->prepare("SELECT * FROM Observations WHERE Observations_Id = ?");
				$query_getUser->bindParam(1, $Observations_Id);
				$query_getUser->execute();
				$result = $query_getUser->fetchAll(PDO::FETCH_ASSOC);
				@$result = $result[0];
			
				$this->Title 					= $result['Title'];
				$this->Observations_Id 			= $result['Observations_Id'];
				$this->Observations_Description	= $result['Observations_Description'];
				$this->Observation_Date			= $result['Observation_Date'];
				$this->Observation_Time			= $result['Observation_Time'];
				$this->Student_Id				= $result['Student_Id'];
				
				
			}  // end function get_User_Info_by_Email($Email);
	
	
	
	
		function Delete_User($Observations_Id)
		{
			$query_Delete = $this->Observations->prepare("DELETE QUICK FROM Observations WHERE Observations_Id = ? ");
			$query_Delete->bindParam(1, $Observations_Id);
			$query_Delete->execute();
			
			if($query_Delete->rowCount() == 1)
				{	
					return 1;  // return 1 because it is true
				}else{
					return 0;  // return 1 because it is false
				}
			
		} // end Delete_User($User_Id)
		 
	
	
	
} // End of my Users Class
