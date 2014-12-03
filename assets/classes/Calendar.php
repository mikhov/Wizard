<?php
require_once(dirname(__FILE__)).'/../core/init.php';


/*
database CALENDAR


Calendar_Id
Date_Event	date
Time_Start_Event
Time_End_Event	time
Title
Description
Url
TU_ID
Public_Event
*/


class Calendar
{
	
	private $_db;
	
	public
	$Calendar_Id,
	$Date_Event,
	$Time_Start_Event,
	$Time_End_Event,	
	$Title,
	$Description,
	$Url,
	$TU_ID,
	$Public_Event;
	
	
		public function __construct(){
			$this->_db = new DB();
			$this->_db = $this->_db ->Connect();
		}
		
		
		public function Insert_Event($Date_Event,$Time_Start_Event,$Time_End_Event,$Title,$Description,$Url,$TU_ID,$Public_Event){
		
		
				$Time_Start_Event = date("H:i:s", strtotime($Time_Start_Event));
				$Time_End_Event = date("H:i:s", strtotime($Time_End_Event));
				
				$query_Insert = $this->_db->prepare("INSERT INTO CALENDAR
										(Date_Event,Time_Start_Event,Time_End_Event,Title,Description,Url,TU_ID,Public_Event) 
											VALUES(?,?,?,?,?,?,?,?)");
				$query_Insert->bindParam(1, $Date_Event);
				$query_Insert->bindParam(2, $Time_Start_Event);
				$query_Insert->bindParam(3, $Time_End_Event);
				$query_Insert->bindParam(4, $Title);
				$query_Insert->bindParam(5, $Description);
				$query_Insert->bindParam(6, $Url);
				$query_Insert->bindParam(7, $TU_ID);
				$query_Insert->bindParam(8, $Public_Event);
				$query_Insert->execute();
				
				if($query_Insert->rowCount() == 0){
					
					return 0; // 0  because no row inserted.
				}else{
					return 1;  // 1  because everything work properly.
					}

		} // End function insert User
		
		
		
		
		
		
		
	public function Update_Event($Date_Event,$Time_Start_Event,$Time_End_Event,$Title,$Description,$Url,$Public_Event,$Calendar_Id)
				{
			
			$query_Update = $this->_db->prepare("UPDATE CALENDAR SET 
										 Date_Event=?,Time_Start_Event=?,Time_End_Event=?,Title=?,Description=?,Url=?,Public_Event=? 
										 WHERE Calendar_Id = ?");
				
				$query_Update->bindParam(1,$Date_Event);
				$query_Update->bindParam(2,$Time_Start_Event);
				$query_Update->bindParam(3,$Time_End_Event);
				$query_Update->bindParam(4,$Title);
				$query_Update->bindParam(5,$Description);
				$query_Update->bindParam(6,$Url);
				$query_Update->bindParam(7,$Public_Event);
				$query_Update->bindParam(8,$Calendar_Id);
				$query_Update->execute();
				
				if($query_Update->rowCount() == 0){
					return 0; // 0  because no row inserted.
				}else{
					return 1;  // 1 is because everything work properly.
					}
	
			
		} // end function Update_User;
		
		
		public function getEventByTUID($TU_ID){
			
			////// ARRAY TO STORE EVENTS DATE ////////
			
			$query_Calendar = $this->_db->prepare("SELECT * FROM CALENDAR WHERE TU_ID = ?");
			$query_Calendar->bindParam(1,$TU_ID);
			$query_Calendar->execute();
				$i = 0;
				
				if($query_Calendar->rowCount() != 0){
					
					while($result_Calendar = $query_Calendar->fetch(PDO::FETCH_ASSOC)){
							
							
						$Calendar_Id		= (isset($result_Calendar['Calendar_Id']) ? $result_Calendar['Calendar_Id'] : null);
						$Date_Event		= (isset($result_Calendar['Date_Event']) ? $result_Calendar['Date_Event'] : null);
						$Time_Start_Event	= (isset($result_Calendar['Time_Start_Event']) ? $result_Calendar['Time_Start_Event'] : null);
						$Time_End_Event	= (isset($result_Calendar['Time_End_Event']) ? $result_Calendar['Time_End_Event'] : null);
						$Title				= (isset($result_Calendar['Title']) ? $result_Calendar['Title'] : null);
						$Description		= (isset($result_Calendar['Description']) ? $result_Calendar['Description'] : null);
						$Url				= (isset($result_Calendar['Url']) ? $result_Calendar['Url'] : null);
							
						
						$StartEvent = $Date_Event . ' ' . $Time_Start_Event;
						$StartEvent = date($StartEvent);
						
				
						$EndEvent = $Date_Event . ' ' . $Time_End_Event;
						$EndEvent = date($EndEvent);
						
						
						$ResultEvents[$i]= array(
							'id' => utf8_encode($Calendar_Id),
							'title' => utf8_encode($Title),
							'allDay' => false, // <- true by default with FullCalendar
							'start' => $StartEvent,
							'end' => $EndEvent,
							'url' => 'http://'.$Url
						);
				
					$i++;
					}
					
					return $ResultEvents; // 0  because no row inserted.
				}else{
					return 0;  // 1 is because everything work properly.
					}
			
		} // end getEventByTUID
	 
		
		
		
		
		public function Delete_Event($Calendar_Id)
		{
			$query_Delete = $this->_db->prepare("DELETE QUICK FROM CALENDAR WHERE Calendar_Id = ? ");
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

