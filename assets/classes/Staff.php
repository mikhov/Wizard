<?php
ini_set('memory_limit', '512M');
// Report all PHP errors
error_reporting(-1);

require_once(dirname(__FILE__)).'/../core/init.php';

class Staff{
	
	public
		$StaffID,
		$StaffFirstName,
		$StaffMiddleName,
		$StaffLastName,
		$StaffNotes,
		$StaffEmail1,
		$StaffEmail2,
		$StaffEmail3,
		$StaffBusinessPhone,
		$StaffPriority,
		$StaffCategories;
		
	public function __construct(){
		$this->_db = new DB();
		$this->_db = $this->_db ->Connect();
	}
	
	public function get_Staff(){
		$query_getStaff = $this->_db->prepare("SELECT * FROM STAFF");
		$query_getStaff->execute();
		
		$resultStaff = array();
		$i = 0; 
		
		if($query_getStaff->rowCount() != 0){
			while($result_Staff = $query_getStaff->fetch(PDO::FETCH_ASSOC)){
				$StaffID = (isset($result_Staff['StaffID']) ? $result_Staff['StaffID'] : null);
				$StaffFirstName = (isset($result_Staff['StaffFirstName']) ? $result_Staff['StaffFirstName'] : null);
				$StaffMiddleName = (isset($result_Staff['StaffMiddleName']) ? $result_Staff['StaffMiddleName'] : null);
				$StaffLastName = (isset($result_Staff['StaffLastName']) ? $result_Staff['StaffLastName'] : null);
				$StaffNotes = (isset($result_Staff['StaffNotes']) ? $result_Staff['StaffNotes'] : null);
				$StaffEmail1 = (isset($result_Staff['StaffEmail1']) ? $result_Staff['StaffEmail1'] : null);
				$StaffEmail2 = (isset($result_Staff['StaffEmail2']) ? $result_Staff['StaffEmail2'] : null);
				$StaffEmail3 = (isset($result_Staff['StaffEmail3']) ? $result_Staff['StaffEmail3'] : null);
				$StaffBusinessPhone = (isset($result_Staff['StaffBusinessPhone']) ? $result_Staff['StaffBusinessPhone'] : null);
				$StaffPriority = (isset($result_Staff['StaffPriority']) ? $result_Staff['StaffPriority'] : null);
				$StaffCategories = (isset($result_Staff['StaffCategories']) ? $result_Staff['StaffCategories'] : null);
				
				$resultStaff['StaffID'][$i] = utf8_encode($StaffID);
				$resultStaff['StaffFirstName'][$i] = utf8_encode($StaffFirstName);
				$resultStaff['StaffMiddleName'][$i] = utf8_encode($StaffMiddleName);
				$resultStaff['StaffLastName'][$i] = utf8_encode($StaffLastName);
				$resultStaff['StaffNotes'][$i] = utf8_encode($StaffNotes);
				$resultStaff['StaffEmail1'][$i] = utf8_encode($StaffEmail1);
				$resultStaff['StaffEmail2'][$i] = utf8_encode($StaffEmail2);
				$resultStaff['StaffEmail3'][$i] = utf8_encode($StaffEmail3);
				$resultStaff['StaffBusinessPhone'][$i] = utf8_encode($StaffBusinessPhone);
				$resultStaff['StaffPriority'][$i] = utf8_encode($StaffPriority);
				$resultStaff['StaffCategories'][$i] = utf8_encode($StaffCategories);
				
				$i++;
			}// end of while loop
			return $resultStaff;
		}else{
			return 0;
		}
	}// end of get_Faculty
	
}// end of Staff Class

?>