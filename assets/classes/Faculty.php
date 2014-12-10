<?php
ini_set('memory_limit', '512M');
// Report all PHP errors
error_reporting(-1);

require_once(dirname(__FILE__)).'/../core/init.php';

class Faculty{

	public
		$FacultyID,
		$FacultyFirstName,
		$FacultyMiddleName,
		$FacultyLastName,
		$FacultyStatus,
		$FacultyUpdate,
		$FacultyRank,
		$FacultyCategory,
		$FacultyNotes,
		$FacultyEmail1,
		$FacultyEmail2,
		$FacultyEmail3,
		$FacultyJobTitle,
		$FacultyPriority;

	public function __construct(){
		$this->_db = new DB();
		$this->_db = $this->_db ->Connect();
	}
	
	public function get_Faculty(){
		$query_getFaculty = $this->_db->prepare("SELECT * FROM FACULTY");
		$query_getFaculty->execute();
		
		$resultFaculty = array();
		$i = 0;  
		
		if($query_getFaculty->rowCount() != 0){
			while($result_Faculty = $query_getFaculty->fetch(PDO::FETCH_ASSOC)){
				$FacultyID = (isset($result_Faculty['FacultyID']) ? $result_Faculty['FacultyID'] : null);
				$FacultyFirstName = (isset($result_Faculty['FacultyFirstName']) ? $result_Faculty['FacultyFirstName'] : null);
				$FacultyMiddleName = (isset($result_Faculty['FacultyMiddleName']) ? $result_Faculty['FacultyMiddleName'] : null);
				$FacultyLastName = (isset($result_Faculty['FacultyLastName']) ? $result_Faculty['FacultyLastName'] : null);
				$FacultyStatus = (isset($result_Faculty['FacultyStatus']) ? $result_Faculty['FacultyStatus'] : null);
				$FacultyUpdate = (isset($result_Faculty['FacultyUpdate']) ? $result_Faculty['FacultyUpdate'] : null);
				$FacultyRank = (isset($result_Faculty['FacultyRank']) ? $result_Faculty['FacultyRank'] : null);
				$FacultyCategory = (isset($result_Faculty['FacultyCategory']) ? $result_Faculty['FacultyCategory'] : null);
				$FacultyNotes = (isset($result_Faculty['FacultyNotes']) ? $result_Faculty['FacultyNotes'] : null);
				$FacultyEmail1 = (isset($result_Faculty['FacultyEmail1']) ? $result_Faculty['FacultyEmail1'] : null);
				$FacultyEmail2 = (isset($result_Faculty['FacultyEmail2']) ? $result_Faculty['FacultyEmail2'] : null);
				$FacultyEmail3 = (isset($result_Faculty['FacultyEmail3']) ? $result_Faculty['FacultyEmail3'] : null);
				$FacultyJobTitle = (isset($result_Faculty['FacultyJobTitle']) ? $result_Faculty['FacultyJobTitle'] : null);
				$FacultyPriority = (isset($result_Faculty['FacultyPriority']) ? $result_Faculty['FacultyPriority'] : null);
				
				$resultFaculty['FacultyID'][$i] = utf8_encode($FacultyID); 
				$resultFaculty['FacultyFirstName'][$i] = utf8_encode($FacultyFirstName); 
				$resultFaculty['FacultyMiddleName'][$i] = utf8_encode($FacultyMiddleName); 
				$resultFaculty['FacultyLastName'][$i] = utf8_encode($FacultyLastName); 
				$resultFaculty['FacultyStatus'][$i] = utf8_encode($FacultyStatus); 
				$resultFaculty['FacultyUpdate'][$i] = utf8_encode($FacultyUpdate); 
				$resultFaculty['FacultyRank'][$i] = utf8_encode($FacultyRank); 
				$resultFaculty['FacultyCategory'][$i] = utf8_encode($FacultyCategory); 
				$resultFaculty['FacultyNotes'][$i] = utf8_encode($FacultyNotes); 
				$resultFaculty['FacultyEmail1'][$i] = utf8_encode($FacultyEmail1); 
				$resultFaculty['FacultyEmail2'][$i] = utf8_encode($FacultyEmail2); 
				$resultFaculty['FacultyEmail3'][$i] = utf8_encode($FacultyEmail3); 
				$resultFaculty['FacultyJobTitle'][$i] = utf8_encode($FacultyJobTitle); 
				$resultFaculty['FacultyPriority'][$i] = utf8_encode($FacultyPriority); 
				
				$i++;
			} // end while loop	
			return $resultFaculty;
		}else{
			return 0;
		}
	}// end get_Faculty
}// end of Faculty Class
?>