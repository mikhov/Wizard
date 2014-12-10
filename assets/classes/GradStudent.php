<?php
require_once(dirname(__FILE__)).'/../core/init.php';

class GradStudent{
	
	
	private $_db;
	

	
		
	public function __construct(){
		$this->_db = new DB();
		$this->_db = $this->_db ->Connect();
	}
	
	
	

	public function get_GradStudents_by_semester($TermCodeStart) {

	

			$query_getUser = $this->_db->prepare("SELECT 
			STUDENT.Student_Id,
			STUDENT.Name_Last,
			STUDENT.Name_First, 
			STUDENT.Tu_Id, 
			STUDENT.Expected_Graduation_Date, 
			STUDENT.Email_Type_Address, 
			STUDENT.Gender, 
			STUDENT.Address_Street_Line1,
			STUDENT.Address_City, 
			STUDENT.Address_Zip, 
			STUDENT.Phone_Number, 
			STUDENT.Hours_Attempted_G, 
			STUDENT.Hours_Passed_G, 
			STUDENT.GPA_Hours_G, 
			STUDENT.Grade_Points_G, 
			STUDENT.GPA_G, 
			STUDENT.Overrall_Hours_Passed_G,
			STUDENT.Transfer_Hours_G, 
			STUDENT.Cumulative_Credits_G, 
			STUDENT.Cumulative_Quality_Points_G, 
			STUDENT.Registration_Status_Date, 
			STUDENT.Hours_Registerd, 
			STUDENT.College_1_Description, 
			STUDENT.Program_1, 
			STUDENT.Level_1_Code, 
			STUDENT.Degree_1_Code, 
			STUDENT.Curriculum1_1, 
			STUDENT.College_1_Description, 
	
	GRADUATE_STUDENT.GraduateStudentID,
	GRADUATE_STUDENT.GraduateStudentNickname,
	GRADUATE_STUDENT.GraduateApplicantID, 
	GRADUATE_STUDENT.GraduateStudentProgramStartDate, 
	GRADUATE_STUDENT.GraduateStudentExpectedGraduationDate, 
	GRADUATE_STUDENT.GraduateStudentNotes, 
	GRADUATE_STUDENT.GraduateStudentRecievedFellowship, 
	GRADUATE_STUDENT.GraduateStudentDateAppliedToGraduate, 
	GRADUATE_STUDENT.GraduateStudentInternshipCompanies,
	
	TA_RA_ASSISTANT.Ta_Ra_Assistant_Id,
	TA_RA_ASSISTANT.OfficeLocation,
	TA_RA_ASSISTANT.HalfOrFull,
	TA_RA_ASSISTANT.StipendLevel,
	TA_RA_ASSISTANT.RequisitionCompletedDate,
	TA_RA_ASSISTANT.RequistionSubmittedDate,
	TA_RA_ASSISTANT.AwardLetterRecievedDate,
	TA_RA_ASSISTANT.AwardLetterReturnedDate,
	TA_RA_ASSISTANT.TuitionRemissionCompletedDate,
	TA_RA_ASSISTANT.TuitionRemissionSumbittedtoCollegeDate,
	TA_RA_ASSISTANT.TuitionRemissionSubmittedToBursar,
	
	STUDENT_TYPE.StudentTypeName
	
	FROM STUDENT, GRADUATE_STUDENT,GRADUATE_STUDENT_TYPE,TA_RA_ASSISTANT,STUDENT_TYPE 
	WHERE STUDENT.Student_Id = GRADUATE_STUDENT.Student_Id
		  AND GRADUATE_STUDENT.GraduateStudentID = GRADUATE_STUDENT_TYPE.GraduateStudentID
		  AND GRADUATE_STUDENT.GraduateStudentID = TA_RA_ASSISTANT.GraduateStudentID
		  AND GRADUATE_STUDENT_TYPE.StudentTypeID = STUDENT_TYPE.StudentTypeID
		  AND GRADUATE_STUDENT_TYPE.TermCodeStart = ?");
		 $query_getUser->bindParam(1,$TermCodeStart);
        $query_getUser->execute();

        $resultStudent = array();
        $i = 0;
        if ($query_getUser->rowCount() != 0) {
            while ($result_Students = $query_getUser->fetch(PDO::FETCH_ASSOC)) {
	
			$Student_Id = (isset($result_Students['Student_Id']) ? $result_Students['Student_Id'] : null);
			$Name_Last = (isset($result_Students['Name_Last']) ? $result_Students['Name_Last'] : null);
			$Name_First = (isset($result_Students['Name_First']) ? $result_Students['Name_First'] : null);
			$Tu_Id = (isset($result_Students['Tu_Id']) ? $result_Students['Tu_Id'] : null);
			$Expected_Graduation_Date = (isset($result_Students['Expected_Graduation_Date']) ? $result_Students['Expected_Graduation_Date'] : null);
			$Email_Type_Address = (isset($result_Students['Email_Type_Address']) ? $result_Students['Email_Type_Address'] : null);
			$Gender = (isset($result_Students['Gender']) ? $result_Students['Gender'] : null);
			$Address_Street_Line1 = (isset($result_Students['Address_Street_Line1']) ? $result_Students['Address_Street_Line1'] : null);
			$Address_City = (isset($result_Students['Address_City']) ? $result_Students['Address_City'] : null);
			$Address_Zip = (isset($result_Students['Address_Zip']) ? $result_Students['Address_Zip'] : null);
			$Phone_Number = (isset($result_Students['Phone_Number']) ? $result_Students['Phone_Number'] : null);
			$Hours_Attempted_G = (isset($result_Students['Hours_Attempted_G']) ? $result_Students['Hours_Attempted_G'] : null);
			$Hours_Passed_G = (isset($result_Students['Hours_Passed_G']) ? $result_Students['Hours_Passed_G'] : null);
			$GPA_Hours_G = (isset($result_Students['GPA_Hours_G']) ? $result_Students['GPA_Hours_G'] : null);
			$Grade_Points_G = (isset($result_Students['Grade_Points_G']) ? $result_Students['Grade_Points_G'] : null);
			$GPA_G = (isset($result_Students['GPA_G']) ? $result_Students['GPA_G'] : null);
			$Overrall_Hours_Passed_G = (isset($result_Students['Overrall_Hours_Passed_G']) ? $result_Students['Overrall_Hours_Passed_G'] : null);
			$Transfer_Hours_G = (isset($result_Students['Transfer_Hours_G']) ? $result_Students['Transfer_Hours_G'] : null);
			$Cumulative_Credits_G = (isset($result_Students['Cumulative_Credits_G']) ? $result_Students['Cumulative_Credits_G'] : null);
			$Cumulative_Quality_Points_G = (isset($result_Students['Cumulative_Quality_Points_G']) ? $result_Students['Cumulative_Quality_Points_G'] : null);
			$Registration_Status_Date = (isset($result_Students['Registration_Status_Date']) ? $result_Students['Registration_Status_Date'] : null);
			$Hours_Registerd = (isset($result_Students['Hours_Registerd']) ? $result_Students['Hours_Registerd'] : null);
			$College_1_Description = (isset($result_Students['College_1_Description']) ? $result_Students['College_1_Description'] : null);
			$Program_1 = (isset($result_Students['Program_1']) ? $result_Students['Program_1'] : null);
			$Level_1_Code = (isset($result_Students['Level_1_Code']) ? $result_Students['Level_1_Code'] : null);
			$Degree_1_Code = (isset($result_Students['Degree_1_Code']) ? $result_Students['Degree_1_Code'] : null);
			$Curriculum1_1 = (isset($result_Students['Curriculum1_1']) ? $result_Students['Curriculum1_1'] : null);
			$College_1_Description = (isset($result_Students['College_1_Description']) ? $result_Students['College_1_Description'] : null);
				

                $GraduateStudentID                          = (isset($result_Students['GraduateStudentID']) ? $result_Students['GraduateStudentID'] : null);
                $GraduateStudentNickname                    = (isset($result_Students['GraduateStudentNickname']) ? $result_Students['GraduateStudentNickname'] : null);
                $GraduateApplicantID                        = (isset($result_Students['GraduateApplicantID']) ? $result_Students['GraduateApplicantID'] : null);
                $GraduateStudentProgramStartDate            = (isset($result_Students['GraduateStudentProgramStartDate']) ? $result_Students['GraduateStudentProgramStartDate'] : null);
                $GraduateStudentExpectedGraduateionDate     = (isset($result_Students['GraduateStudentExpectedGraduationDate']) ? $result_Students['GraduateStudentExpectedGraduationDate'] : null);
                $GraduateStudentEmail                       = (isset($result_Students['GraduateStudentEmail']) ? $result_Students['GraduateStudentEmail'] : null);
                $GraduateStudentSex                         = (isset($result_Students['GraduateStudentSex']) ? $result_Students['GraduateStudentSex'] : null);
                $GraduateStudentAddressStreetLine1          = (isset($result_Students['GraduateStudentAddressStreetLine1']) ? $result_Students['GraduateStudentAddressStreetLine1'] : null);
                $GraduateStudentAddressStreetLine2          = (isset($result_Students['GraduateStudentAddressStreetLine2']) ? $result_Students['GraduateStudentAddressStreetLine2'] : null);
                $GraduateStudentAddressCity                 = (isset($result_Students['GraduateStudentAddressCity']) ? $result_Students['GraduateStudentAddressCity'] : null);
                $GraduateStudentAddressState                = (isset($result_Students['GraduateStudentAddressState']) ? $result_Students['GraduateStudentAddressState'] : null);
                $GraduateStudentAddressZip                  = (isset($result_Students['GraduateStudentAddressZip']) ? $result_Students['GraduateStudentAddressZip'] : null);
                $GraduateStudentAddressPhoneNumber          = (isset($result_Students['GraduateStudentAddressPhoneNumber']) ? $result_Students['GraduateStudentAddressPhoneNumber'] : null);
                $GraduateStudentNotes                       = (isset($result_Students['GraduateStudentNotes']) ? $result_Students['GraduateStudentNotes'] : null);
                $GraduateStudentRecievedFellowship          = (isset($result_Students['GraduateStudentRecievedFellowship']) ? $result_Students['GraduateStudentRecievedFellowship'] : null);
                $GraduateStudentDateAppliedToGraduate       = (isset($result_Students['GraduateStudentDateAppliedToGraduate']) ? $result_Students['GraduateStudentDateAppliedToGraduate'] : null);
                $GraduateStudentInternshipCompanies         = (isset($result_Students['GraduateStudentInternshipCompanies']) ? $result_Students['GraduateStudentInternshipCompanies'] : null);
				
				$Ta_Ra_Assistant_Id = (isset($result_Students['Ta_Ra_Assistant_Id']) ? $result_Students['Ta_Ra_Assistant_Id'] : null);
				$OfficeLocation = (isset($result_Students['OfficeLocation']) ? $result_Students['OfficeLocation'] : null);
				$HalfOrFull = (isset($result_Students['HalfOrFull']) ? $result_Students['HalfOrFull'] : null);
				$StipendLevel = (isset($result_Students['StipendLevel']) ? $result_Students['StipendLevel'] : null);
				$RequisitionCompletedDate = (isset($result_Students['RequisitionCompletedDate']) ? $result_Students['RequisitionCompletedDate'] : null);
				$RequistionSubmittedDate = (isset($result_Students['RequistionSubmittedDate']) ? $result_Students['RequistionSubmittedDate'] : null);
				$AwardLetterRecievedDate = (isset($result_Students['AwardLetterRecievedDate']) ? $result_Students['AwardLetterRecievedDate'] : null);
				$AwardLetterReturnedDate = (isset($result_Students['AwardLetterReturnedDate']) ? $result_Students['AwardLetterReturnedDate'] : null);
				$TuitionRemissionCompletedDate = (isset($result_Students['TuitionRemissionCompletedDate']) ? $result_Students['TuitionRemissionCompletedDate'] : null);
				$TuitionRemissionSumbittedtoCollegeDate = (isset($result_Students['TuitionRemissionSumbittedtoCollegeDate']) ? $result_Students['TuitionRemissionSumbittedtoCollegeDate'] : null);
				$TuitionRemissionSubmittedToBursar = (isset($result_Students['TuitionRemissionSubmittedToBursar']) ? $result_Students['TuitionRemissionSubmittedToBursar'] : null);			
				
				$StudentTypeName = (isset($result_Students['StudentTypeName']) ? $result_Students['StudentTypeName'] : null);


				$resultStudent['Student_Id'][$i]   = utf8_encode($Student_Id);
				$resultStudent['Name_Last'][$i]   = utf8_encode($Name_Last);
				$resultStudent['Name_First'][$i]   = utf8_encode($Name_First);
				$resultStudent['Tu_Id'][$i]   = utf8_encode($Tu_Id);
				$resultStudent['Expected_Graduation_Date'][$i]    = utf8_encode($Expected_Graduation_Date);
				$resultStudent['Email_Type_Address'][$i]   = utf8_encode($Email_Type_Address);
				$resultStudent['Gender'][$i]   = utf8_encode($Gender);
				$resultStudent['Address_Street_Line1'][$i]   = utf8_encode($Address_Street_Line1);
				$resultStudent['Address_City'][$i]   = utf8_encode($Address_City);
				$resultStudent['Address_Zip'][$i]   = utf8_encode($Address_Zip);
				$resultStudent['Phone_Number'][$i]   = utf8_encode($Phone_Number);
				$resultStudent['Hours_Attempted_G'][$i]   = utf8_encode($Hours_Attempted_G);
				$resultStudent['Hours_Passed_G'][$i]   = utf8_encode($Hours_Passed_G);
				$resultStudent['GPA_Hours_G'][$i]   = utf8_encode($GPA_Hours_G);
				$resultStudent['Grade_Points_G'][$i]   = utf8_encode($Grade_Points_G);
				$resultStudent['GPA_G'][$i]   = utf8_encode($GPA_G);
				$resultStudent['Overrall_Hours_Passed_G'][$i]   = utf8_encode($Overrall_Hours_Passed_G);
				$resultStudent['Transfer_Hours_G'][$i]   = utf8_encode($Transfer_Hours_G);
				$resultStudent['Cumulative_Credits_G'][$i]   = utf8_encode($Cumulative_Credits_G);
				$resultStudent['Cumulative_Quality_Points_G'][$i]   = utf8_encode($Cumulative_Quality_Points_G);
				$resultStudent['Registration_Status_Date'][$i]   = utf8_encode($Registration_Status_Date);
				$resultStudent['Hours_Registerd'][$i]   = utf8_encode($Hours_Registerd);
				$resultStudent['College_1_Description'][$i]   = utf8_encode($College_1_Description);
				$resultStudent['Program_1'][$i]   = utf8_encode($Program_1);
				$resultStudent['Level_1_Code'][$i]   = utf8_encode($Level_1_Code);
				$resultStudent['Degree_1_Code'][$i]   = utf8_encode($Degree_1_Code);
				$resultStudent['Curriculum1_1'][$i]   = utf8_encode($Curriculum1_1);
				$resultStudent['College_1_Description'][$i]   = utf8_encode($College_1_Description);
				
				$resultStudent['Ta_Ra_Assistant_Id'][$i]   = utf8_encode($Ta_Ra_Assistant_Id);
				$resultStudent['OfficeLocation'][$i]   = utf8_encode($OfficeLocation);
				$resultStudent['HalfOrFull'][$i]   = utf8_encode($HalfOrFull);
				$resultStudent['StipendLevel'][$i]   = utf8_encode($StipendLevel);
				$resultStudent['RequisitionCompletedDate'][$i]   = utf8_encode($RequisitionCompletedDate);
				$resultStudent['RequistionSubmittedDate'][$i]   = utf8_encode($RequistionSubmittedDate);
				$resultStudent['AwardLetterRecievedDate'][$i]   = utf8_encode($AwardLetterRecievedDate);
				$resultStudent['AwardLetterReturnedDate'][$i]   = utf8_encode($AwardLetterReturnedDate);
				$resultStudent['TuitionRemissionCompletedDate'][$i]   = utf8_encode($TuitionRemissionCompletedDate);
				$resultStudent['TuitionRemissionSumbittedtoCollegeDate'][$i]   = utf8_encode($TuitionRemissionSumbittedtoCollegeDate);
				$resultStudent['TuitionRemissionSubmittedToBursar'][$i]   = utf8_encode($TuitionRemissionSubmittedToBursar);
				
				$resultStudent['StudentTypeName'][$i]   = utf8_encode($StudentTypeName);
	
                $resultStudent['GraduateStudentID'][$i]                         = utf8_encode($GraduateStudentID);
                $resultStudent['GraduateStudentNickname'][$i]                   = utf8_encode($GraduateStudentNickname);
                $resultStudent['GraduateApplicantID'][$i]                       = utf8_encode($GraduateApplicantID);
                $resultStudent['GraduateStudentProgramStartDate'][$i]           = utf8_encode($GraduateStudentProgramStartDate);
                $resultStudent['GraduateStudentExpectedGraduateionDate'][$i]    = utf8_encode($GraduateStudentExpectedGraduateionDate);
                $resultStudent['GraduateStudentNotes'][$i]                      = utf8_encode($GraduateStudentNotes);
                $resultStudent['GraduateStudentRecievedFellowship'][$i]         = utf8_encode($GraduateStudentRecievedFellowship);
                $resultStudent['GraduateStudentDateAppliedToGraduate'][$i]      = utf8_encode($GraduateStudentDateAppliedToGraduate);
                $resultStudent['GraduateStudentInternshipCompanies'][$i]        = utf8_encode($GraduateStudentInternshipCompanies);
                
                $i++;
            }   /// While loop
            return $resultStudent;
			
			
        }else{
			
			return 0;
			
			}
		
	
    } /// End of get_GradStudents();


} /// End of my class GradStudents


