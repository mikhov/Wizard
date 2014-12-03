<?php
require_once(dirname(__FILE__)).'/../core/init.php';
// Report all PHP errors
error_reporting(-1);

	

class parseStaff{
	
	
	private $_db;
	
		
	public function __construct(){
		$this->_db = new DB();
		$this->_db = $this->_db ->Connect();
	}
	

	public function parseStaffInsert($inputeFile){
		
		$row = 1;
		
		if (($handle = fopen($inputeFile, "r")) !== FALSE) {
			
			while (($data = fgetcsv($handle, 10000, ",")) !== FALSE) {
				
				$num = count($data);
				
				if ($row > 1) {
					
					$insertQuery = $sql_connection->prepare("INSERT INTO faculty (StaffFirstName, StaffMiddleName, StaffLastName, StaffNotes, StaffEmail1, StaffEmail2, StaffEmail3, StaffBusinessPhone, StaffPriority, StaffCategories) VALUES (?,?,?,?,?,?,?,?,?,?)");
					$insertQuery->bindParam(1, $data[1]);  //First Nme
					$insertQuery->bindParam(2, $data[2]);  //Middle Name
					$insertQuery->bindParam(3, $data[3]);  //Last Name
					$insertQuery->bindParam(4, $data[14]);  //Notes
					$insertQuery->bindParam(5, $data[15]);  //Email1
					$insertQuery->bindParam(6, $data[16]);  //Email2
					$insertQuery->bindParam(7, $data[17]);  //Email3
					$insertQuery->bindParam(8, $data[39]);  //Business Phone
					$insertQuery->bindParam(9, $data[86]);  //Priority
					$insertQuery->bindParam(10, $data[88]); //Categories
					$insertQuery->execute();
		
					$insertQuery->queryString;
					
				}
				//}
				$row++;
			}
			fclose($handle);
		}
				
		
	} // End parseFaculty






} /// end class parseStaff



?>




