<?php
ini_set('memory_limit', '512M');
// Report all PHP errors
error_reporting(-1);

require_once(dirname(__FILE__)).'/../core/init.php';

class Didactic
{
	
	private $_db;
	
	
	public function __construct(){
		$this->_db = new DB();
		$this->_db = $this->_db ->Connect();
	}
		
		
	public function get_requirements_by_Student_ID($Student_Id){
		
		$resultRequirements = array();
		
		$getRequiredCourse = $this->_db->prepare("SELECT * 
												FROM STUDENT AS t1, PROGRAM AS t2, PROGRAM_DETAIL AS t3, COURSE AS t4
												WHERE t1.Student_Id=? 
													AND t1.Program_1=t2.Program_1 
													AND t2.ProgramID=t3.ProgramID 
													AND t3.isCourseRequired!=1
													AND t3.CourseID=t4.CourseID
													ORDER BY t4.CourseNumber;"
												);
															
															
															
		
		$getRequiredCourse->bindParam(1,$Student_Id);
		$getRequiredCourse->execute();
		
			if($getRequiredCourse->rowCount() != 0){
				$i = 0;
				
				
				while($result_ReqCourses = $getRequiredCourse->fetch(PDO::FETCH_ASSOC)){
					
														
														
														
					//////// THIS IS THE COURSE INFO FOR EACH STUDENT
					
					$Student_Registration_ID 	 = (isset($result_ReqCourses['Student_Registration_ID']) ? $result_ReqCourses['Student_Registration_ID'] : null);
					$SemesterID 			= (isset($result_ReqCourses['SemesterID']) ? $result_ReqCourses['SemesterID'] : null);
					$ClassID 				= (isset($result_ReqCourses['ClassID']) ? $result_ReqCourses['ClassID'] : null);
					$StudentGrade 			= (isset($result_ReqCourses['StudentGrade']) ? $result_ReqCourses['StudentGrade'] : null);
					$ClassSectionNumber= (isset($result_ReqCourses['ClassSectionNumber']) ? $result_ReqCourses['ClassSectionNumber'] : null);
					$CourseID 				= (isset($result_ReqCourses['CourseID']) ? $result_ReqCourses['CourseID'] : null);
					$CourseStartDate 		= (isset($result_ReqCourses['CourseStartDate']) ? $result_ReqCourses['CourseStartDate'] : null);
					$CourseName 			= (isset($result_ReqCourses['CourseName']) ? $result_ReqCourses['CourseName'] : null);
					$CourseNumber 			= (isset($result_ReqCourses['CourseNumber']) ? $result_ReqCourses['CourseNumber'] : null);
					$CourseDescription 	= (isset($result_ReqCourses['CourseDescription']) ? $result_ReqCourses['CourseDescription'] : null);
					
					//////THIS IS THE COURSE INFO FOR EACH PROGRAM 
					
					/*
					
						ProgramID
						
						
					
					
					*/
					$ProgramID 	 = (isset($result_ReqCourses['ProgramID']) ? $result_ReqCourses['ProgramID'] : null);
					
					
					
					
					//////// THIS IS THE STUDENT INFO FROM DATABASE
							
					$Student_Id 			= (isset($result_ReqCourses['Student_Id']) ? $result_ReqCourses['Student_Id'] : null);
					$Name_Last			 	= (isset($result_ReqCourses['Name_Last']) ? $result_ReqCourses['Name_Last'] : null);
					$Name_First 			= (isset($result_ReqCourses['Name_First']) ? $result_ReqCourses['Name_First'] : null);
					$Tu_Id 					= (isset($result_ReqCourses['Tu_Id']) ? $result_ReqCourses['Tu_Id'] : null);
					$Expected_Graduation_Date = (isset($result_ReqCourses['Expected_Graduation_Date']) ? $result_ReqCourses['Expected_Graduation_Date'] : null);
					$Email_Type_Address 				= (isset($result_ReqCourses['Email_Type_Address']) ? $result_ReqCourses['Email_Type_Address'] : null);
					$Gender 							= (isset($result_ReqCourses['Gender']) ? $result_ReqCourses['Gender'] : null);
					$Address_Street_Line1 			= (isset($result_ReqCourses['Address_Street_Line1']) ? $result_ReqCourses['Address_Street_Line1'] : null);
					$Address_City 						= (isset($result_ReqCourses['Address_City']) ? $result_ReqCourses['Address_City'] : null);
					$Address_Zip 						= (isset($result_ReqCourses['Address_Zip']) ? $result_ReqCourses['Address_Zip'] : null);	
					$Phone_Number				 		= (isset($result_ReqCourses['Phone_Number']) ? $result_ReqCourses['Phone_Number'] : null);
					$Hours_Attempted_UG 				= (isset($result_ReqCourses['Hours_Attempted_UG']) ? $result_ReqCourses['Hours_Attempted_UG'] : null);	
					$GPA_Hours_UG 						= (isset($result_ReqCourses['GPA_Hours_UG']) ? $result_ReqCourses['GPA_Hours_UG'] : null);
					$Grade_Points_UG 					= (isset($result_ReqCourses['Grade_Points_UG']) ? $result_ReqCourses['Grade_Points_UG'] : null);
					$GPA_UG 							= (isset($result_ReqCourses['GPA_UG']) ? $result_ReqCourses['GPA_UG'] : null);
					$Overall_passed_UG 				= (isset($result_ReqCourses['Overall_passed_UG']) ? $result_ReqCourses['Overall_passed_UG'] : null);
					$Transfer_Hours_UG 				= (isset($result_ReqCourses['Transfer_Hours_UG']) ? $result_ReqCourses['Transfer_Hours_UG'] : null);
					$Cumulative_Credits_UG 			= (isset($result_ReqCourses['Cumulative_Credits_UG']) ? $result_ReqCourses['Cumulative_Credits_UG'] : null);
					$Cumulative_Quality_Points_UG 	= (isset($result_ReqCourses['Cumulative_Quality_Points_UG']) ? $result_ReqCourses['Cumulative_Quality_Points_UG'] : null);
					$Hours_Attempted_G 				= (isset($result_ReqCourses['Hours_Attempted_G']) ? $result_ReqCourses['Hours_Attempted_G'] : null);
					$Hours_Passed_G 					= (isset($result_ReqCourses['Hours_Passed_G']) ? $result_ReqCourses['Hours_Passed_G'] : null);
					$GPA_Hours_G						= (isset($result_ReqCourses['GPA_Hours_G']) ? $result_ReqCourses['GPA_Hours_G'] : null);
					$Grade_Points_G 					= (isset($result_ReqCourses['Grade_Points_G']) ? $result_ReqCourses['Grade_Points_G'] : null);
					$GPA_G 								= (isset($result_ReqCourses['GPA_G']) ? $result_ReqCourses['GPA_G'] : null);
					$Overral_Hours_Passed_G 	= (isset($result_ReqCourses['Overral_Hours_Passed_G']) ? $result_ReqCourses['Overral_Hours_Passed_G'] : null);
										
					$Transfer_Hours_G 		 = (isset($result_ReqCourses['Transfer_Hours_G']) ? $result_ReqCourses['Transfer_Hours_G'] : null);
					$Cumulative_Credits_G = (isset($result_ReqCourses['Cumulative_Credits_G']) ? $result_ReqCourses['Cumulative_Credits_G'] : null);
					$Cumulative_Quality_Points_G = (isset($result_ReqCourses['Cumulative_Quality_Points_G']) ? $result_ReqCourses['Cumulative_Quality_Points_G'] : null);
					$Registration_Status_Date 	= (isset($result_ReqCourses['Registration_Status_Date']) ? $result_ReqCourses['Registration_Status_Date'] : null);
					$Hours_Registerd 	= (isset($result_ReqCourses['Hours_Registerd']) ? $result_ReqCourses['Hours_Registerd'] : null);
					$College_1_Description = (isset($result_ReqCourses['Registration_Status_Date']) ? $result_ReqCourses['Registration_Status_Date'] : null);
					$Program_1			= (isset($result_ReqCourses['Program_1']) ? $result_ReqCourses['Program_1'] : null);
					$Level_1_Code				= (isset($result_ReqCourses['Level_1_Code']) ? $result_ReqCourses['Level_1_Code'] : null);
					$Degree_1_Code				= (isset($result_ReqCourses['Degree_1_Code']) ? $result_ReqCourses['Degree_1_Code'] : null);
					$Curriculum1_1				= (isset($result_ReqCourses['Curriculum1_1']) ? $result_ReqCourses['Curriculum1_1'] : null);
					$College_1_Description	= (isset($result_ReqCourses['College_1_Description']) ? $result_ReqCourses['College_1_Description'] : null);
					
					
					
					
							$resultRequirements[$i] = array(
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
									'ProgramID'							=>	utf8_encode($ProgramID), 
									'CourseDescription'					=>	utf8_encode($CourseDescription),
									'Status'							=>	'success'
							
							);
							
							
							
						
							$i++;
						
					} //end while loop
				
			
				return $resultRequirements;
			}else{
				return 0;
			}
		
		
		
	} // This is the end of my funciton Get requirements by Student ID
		
		
	
	
	
} // End of my Users Class


