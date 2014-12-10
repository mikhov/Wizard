<?php
require_once(dirname(__FILE__)).'/../core/init.php';
// Report all PHP errors
error_reporting(-1);

	

class parseFaculty{
	
	
	private $_db;
	
	
		
	public function __construct(){
		$this->_db = new DB();
		$this->_db = $this->_db ->Connect();
	}
	

	public function parseFacultyInsert($inputeFile){
		
		$row = 1;
		
		
		if (($handle = fopen($inputeFile, "r")) !== FALSE) {
			
			while (($data = fgetcsv($handle, 10000, ",")) !== FALSE) {
				
				$num = count($data);
				
				if ($row > 1) {
					
					$insertQuery = $this->_db->prepare("INSERT INTO faculty (FacultyFirstName, FacultyMiddleName, FacultyLastName, FacultyStatus, FacultyUpdate, FacultyRank, FacultyCategory, FacultyNotes, FacultyEmail1, FacultyEmail2, FacultyEmail3, FacultyJobTitle, FacultyPriority) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
					$insertQuery->bindParam(1, $data[4]);  //First NAme
					$insertQuery->bindParam(2, $data[5]);  //Middle Name
					$insertQuery->bindParam(3, $data[6]);  //Last Name
					$insertQuery->bindParam(4, $data[1]);  //Status
					$insertQuery->bindParam(5, $data[0]);  //Update
					$insertQuery->bindParam(6, $data[2]);  //Rank
					$insertQuery->bindParam(7, $data[3]);  //Category
					$insertQuery->bindParam(8, $data[17]);  //Notes
					$insertQuery->bindParam(9, $data[18]);  //Email1
					$insertQuery->bindParam(10, $data[19]); //Email2
					$insertQuery->bindParam(11, $data[20]); //Email3
					$insertQuery->bindParam(12, $data[47]); //Job Title
					$insertQuery->bindParam(13, $data[89]); //Priority
					$insertQuery->execute();
		
					$insertQuery->queryString;
				
				}
				//}
				$row++;
			}
			fclose($handle);
		}
		
		
		
	} // End parseFaculty












} /// end class parseFaculty



?>