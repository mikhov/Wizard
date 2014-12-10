<?php
ini_set('memory_limit', '512M');
// Report all PHP errors
error_reporting(-1);

require_once(dirname(__FILE__)).'/../core/init.php';

class Courses
{
	
	private $_db;
	
	
	public function __construct(){
		$this->_db = new DB();
		$this->_db = $this->_db ->Connect();
	}
		
		
	public function get_Courses_by_Student_Id($Student_Id){
		
		$resultStudent = array();
		
		
		
		$getStudentCourse = $this->_db->prepare("SELECT * FROM STUDENT AS t1, STUDENT_REGISTRATION AS t2, CLASS AS t3, COURSE AS t4
												WHERE t1.Student_Id=?
													AND t1.Student_Id=t2.Student_Id 
													AND t2.ClassID=t3.ClassID 
													AND t3.CourseID=t4.CourseID
												ORDER BY t4.CourseNumber;"
												);
															
															
															
		
		$getStudentCourse->bindParam(1,$Student_Id);
		$getStudentCourse->execute();
		
			if($getStudentCourse->rowCount() != 0){
				$i = 0;
				
				
				while($result_Students = $getStudentCourse->fetch(PDO::FETCH_ASSOC)){
					
														
										
														
					//////// THIS IS THE COURSE INFO FOR EACH STUDENT
					
					$Student_Registration_ID 	 = (isset($result_Students['Student_Registration_ID']) ? $result_Students['Student_Registration_ID'] : null);
					$SemesterID 			= (isset($result_Students['SemesterID']) ? $result_Students['SemesterID'] : null);
					$ClassID 				= (isset($result_Students['ClassID']) ? $result_Students['ClassID'] : null);
					$StudentGrade 			= (isset($result_Students['StudentGrade']) ? $result_Students['StudentGrade'] : null);
					$ClassSectionNumber= (isset($result_Students['ClassSectionNumber']) ? $result_Students['ClassSectionNumber'] : null);
					$CourseID 				= (isset($result_Students['CourseID']) ? $result_Students['CourseID'] : null);
					$CourseStartDate 		= (isset($result_Students['CourseStartDate']) ? $result_Students['CourseStartDate'] : null);
					$CourseName 			= (isset($result_Students['CourseName']) ? $result_Students['CourseName'] : null);
					$CourseNumber 			= (isset($result_Students['CourseNumber']) ? $result_Students['CourseNumber'] : null);
					$CourseDescription 	= (isset($result_Students['CourseDescription']) ? $result_Students['CourseDescription'] : null);
					
					
					
					//////// THIS IS THE STUDENT INFO FROM DATABASE
							
					$Student_Id 			= (isset($result_Students['Student_Id']) ? $result_Students['Student_Id'] : null);
					$Name_Last			 	= (isset($result_Students['Name_Last']) ? $result_Students['Name_Last'] : null);
					$Name_First 			= (isset($result_Students['Name_First']) ? $result_Students['Name_First'] : null);
					$Tu_Id 					= (isset($result_Students['Tu_Id']) ? $result_Students['Tu_Id'] : null);
					$Expected_Graduation_Date = (isset($result_Students['Expected_Graduation_Date']) ? $result_Students['Expected_Graduation_Date'] : null);
					$Email_Type_Address 				= (isset($result_Students['Email_Type_Address']) ? $result_Students['Email_Type_Address'] : null);
					$Gender 							= (isset($result_Students['Gender']) ? $result_Students['Gender'] : null);
					$Address_Street_Line1 			= (isset($result_Students['Address_Street_Line1']) ? $result_Students['Address_Street_Line1'] : null);
					$Address_City 						= (isset($result_Students['Address_City']) ? $result_Students['Address_City'] : null);
					$Address_Zip 						= (isset($result_Students['Address_Zip']) ? $result_Students['Address_Zip'] : null);	
					$Phone_Number				 		= (isset($result_Students['Phone_Number']) ? $result_Students['Phone_Number'] : null);
					$Hours_Attempted_UG 				= (isset($result_Students['Hours_Attempted_UG']) ? $result_Students['Hours_Attempted_UG'] : null);	
					$GPA_Hours_UG 						= (isset($result_Students['GPA_Hours_UG']) ? $result_Students['GPA_Hours_UG'] : null);
					$Grade_Points_UG 					= (isset($result_Students['Grade_Points_UG']) ? $result_Students['Grade_Points_UG'] : null);
					$GPA_UG 							= (isset($result_Students['GPA_UG']) ? $result_Students['GPA_UG'] : null);
					$Overall_passed_UG 				= (isset($result_Students['Overall_passed_UG']) ? $result_Students['Overall_passed_UG'] : null);
					$Transfer_Hours_UG 				= (isset($result_Students['Transfer_Hours_UG']) ? $result_Students['Transfer_Hours_UG'] : null);
					$Cumulative_Credits_UG 			= (isset($result_Students['Cumulative_Credits_UG']) ? $result_Students['Cumulative_Credits_UG'] : null);
					$Cumulative_Quality_Points_UG 	= (isset($result_Students['Cumulative_Quality_Points_UG']) ? $result_Students['Cumulative_Quality_Points_UG'] : null);
					$Hours_Attempted_G 				= (isset($result_Students['Hours_Attempted_G']) ? $result_Students['Hours_Attempted_G'] : null);
					$Hours_Passed_G 					= (isset($result_Students['Hours_Passed_G']) ? $result_Students['Hours_Passed_G'] : null);
					$GPA_Hours_G						= (isset($result_Students['GPA_Hours_G']) ? $result_Students['GPA_Hours_G'] : null);
					$Grade_Points_G 					= (isset($result_Students['Grade_Points_G']) ? $result_Students['Grade_Points_G'] : null);
					$GPA_G 								= (isset($result_Students['GPA_G']) ? $result_Students['GPA_G'] : null);
					$Overral_Hours_Passed_G 	= (isset($result_Students['Overral_Hours_Passed_G']) ? $result_Students['Overral_Hours_Passed_G'] : null);
										
					$Transfer_Hours_G 		 = (isset($result_Students['Transfer_Hours_G']) ? $result_Students['Transfer_Hours_G'] : null);
					$Cumulative_Credits_G = (isset($result_Students['Cumulative_Credits_G']) ? $result_Students['Cumulative_Credits_G'] : null);
					$Cumulative_Quality_Points_G = (isset($result_Students['Cumulative_Quality_Points_G']) ? $result_Students['Cumulative_Quality_Points_G'] : null);
					$Registration_Status_Date 	= (isset($result_Students['Registration_Status_Date']) ? $result_Students['Registration_Status_Date'] : null);
					$Hours_Registerd 	= (isset($result_Students['Hours_Registerd']) ? $result_Students['Hours_Registerd'] : null);
					$College_1_Description = (isset($result_Students['Registration_Status_Date']) ? $result_Students['Registration_Status_Date'] : null);
					$Program_1			= (isset($result_Students['Program_1']) ? $result_Students['Program_1'] : null);
					$Level_1_Code				= (isset($result_Students['Level_1_Code']) ? $result_Students['Level_1_Code'] : null);
					$Degree_1_Code				= (isset($result_Students['Degree_1_Code']) ? $result_Students['Degree_1_Code'] : null);
					$Curriculum1_1				= (isset($result_Students['Curriculum1_1']) ? $result_Students['Curriculum1_1'] : null);
					$College_1_Description	= (isset($result_Students['College_1_Description']) ? $result_Students['College_1_Description'] : null);
					
					
					
					
							$resultStudent[$i] = array(
									'Student_Id'						=>	utf8_encode($Student_Id), 
									'Name_Last'						=>	utf8_encode($Name_Last),
									'Name_First'						=>	utf8_encode($Name_First), 
									'Tu_Id'								=>	utf8_encode($Tu_Id),
									'Expected_Graduation_Date'		=>	utf8_encode($Expected_Graduation_Date), 
									'Email_Type_Address'				=>	utf8_encode($Email_Type_Address),
									'Gender'							=>	utf8_encode($Gender),
									'Address_Street_Line1'			=>	utf8_encode($Address_Street_Line1), 
									'Address_City'						=>	utf8_encode($Address_City),
									'Address_Zip'						=>	utf8_encode($Address_Zip),
									'Phone_Number'						=>	utf8_encode($Phone_Number), 
									'Hours_Attempted_UG'				=>	utf8_encode($Hours_Attempted_UG), 
									'GPA_Hours_UG'						=>	utf8_encode($GPA_Hours_UG), 
									'Grade_Points_UG'					=>	utf8_encode($Grade_Points_UG), 
									'GPA_UG'							=>	utf8_encode($GPA_UG),
									'Overall_passed_UG'				=>	utf8_encode($Overall_passed_UG), 
									'Transfer_Hours_UG'				=>	utf8_encode($Transfer_Hours_UG), 
									'Cumulative_Credits_UG'			=>	utf8_encode($Cumulative_Credits_UG), 
									'Cumulative_Quality_Points_UG'	=>	utf8_encode($Cumulative_Quality_Points_UG),
									'Hours_Attempted_G'				=>	utf8_encode($Hours_Attempted_G),
									'Hours_Passed_G'					=>	utf8_encode($Hours_Passed_G),
									'GPA_Hours_G'						=>	utf8_encode($GPA_Hours_G),
									'Grade_Points_G'					=>	utf8_encode($Grade_Points_G), 
									'GPA_G'								=>	utf8_encode($GPA_G),
									'Overral_Hours_Passed_G'			=>	utf8_encode($Overral_Hours_Passed_G),
									'Transfer_Hours_G'					=>	utf8_encode($Transfer_Hours_G),
									'Cumulative_Credits_G	'			=>	utf8_encode($Cumulative_Credits_G), 
									'Cumulative_Quality_Points_G'	=>	utf8_encode($Cumulative_Quality_Points_G),
									'Registration_Status_Date'		=>	utf8_encode($Registration_Status_Date),
									'Hours_Registerd'					=>	utf8_encode($Hours_Registerd),
									'College_1_Description'			=>	utf8_encode($College_1_Description),
									'Program_1'						=>	utf8_encode($Program_1),
									'Level_1_Code'						=>	utf8_encode($Level_1_Code), 
									'Degree_1_Code'					=>	utf8_encode($Degree_1_Code), 
									'Curriculum1_1'					=>	utf8_encode($Curriculum1_1), 
									'College_1_Description'			=>	utf8_encode($College_1_Description),
									'Student_Registration_ID'			=>	utf8_encode($Student_Registration_ID),
									'SemesterID'						=>	utf8_encode($SemesterID),
									'ClassID'							=>	utf8_encode($ClassID),
									'StudentGrade'						=>	utf8_encode($StudentGrade),
									'ClassSectionNumber'				=>	utf8_encode($ClassSectionNumber), 
									'CourseID'							=>	utf8_encode($CourseID),
									'CourseStartDate'					=>	utf8_encode($CourseStartDate), 
									'CourseName'						=>	utf8_encode($CourseName),
									'CourseNumber'						=>	utf8_encode($CourseNumber), 
									'CourseDescription'				=>	utf8_encode($CourseDescription),
									'Status'							=>	'success'
							
							);
							
							
							
						
							$i++;
						
					} //end while loop
				
			
				return $resultStudent;
			}else{
				return 0;
			}
		
		
		
	} // This is the end of my funciton get_Courses_by_Student_Id
		
		
	
	
	
} // End of my Users Class


