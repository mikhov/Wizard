<?php

require_once(dirname(__FILE__)).'/../core/init.php';


class Students
{
	
	private $_db;
	
	
	public
	  $Student_Id,
	  $Term_Code,
	  $Name_Last,
	  $Name_First,
	  $Tu_Id,
	  $Name_Full,
	  $Name_Prefix,
	  $Name_Suffix,
	  $College,
	  $Student_Type_Code,
	  $Student_Status_Code,
	  $Education_Goal_Code,
	  $Education_Goal_Description,
	  $Expected_Graduation_Date,
	  $First_Semister_Attened,
	  $Last_Semister_Attened,
	  $Admissions_Term,
	  $Catalog_Term,
	  $Last_Term_Avalible,
	  $Hold_Indicator,
	  $Registration_Status_Code,
	  $Registration_Status_Description,
	  $Recidency_Code,
	  $Recidency_Description,
	  $Co_Op_Code1,
	  $Co_Op_Code2,
	  $Co_Op_Code3,
	  $Email_Type_Code,
	  $Email_Type_Address,
	  $Confidentiality_Indicator,
	  $Deceased_Indicator,
	  $Birth_Date,
	  $Gender,
	  $Hispanic_Indicator,
	  $Reported_Race,
	  $Race,
	  $International_Reported_race,
	  $Employee_Indicator,
	  $Veteran_Indicator,
	  $Marital_Status_Code,
	  $Religion_Code,
	  $Financial_Aid_Year,
	  $Financial_Aid_Application_Recieved_Date,
	  $Bill_Date,
	  $Bill_Due_Date,
	  $Payment_Status,
	  $Payment_Status_Date,
	  $Term_Balace,
	  $Total_Account_Balance,
	  $Address_Type_Code,
	  $Address_Type_Description,
	  $Address_Street_Line1,
	  $Address_Street_Line2,
	  $Address_City,
	  $Address_State_Code,
	  $Address_Zip,
	  $Address_County_Code,
	  $Address_County_Description,
	  $Address_nation_Code,
	  $Address_Nation_Description,
	  $Phone_Number,
	  $Phone_Extension,
	  $Associated_Campus_Ambler_Indicator,
	  $Associated_Campus_Center_City_Indicator,
	  $Associated_Campus_Fort_Washington_Indicator,
	  $Associated_Campus_Harrisburg_Indicator,
	  $Associated_Campus_HSC_Indicator,
	  $Associated_Campus_Main_Indicator,
	  $Associated_Campus_Online_Indicator,
	  $Hours_Attempted_UG,
	  $Hours_Passed_UG,
	  $GPA_Hours_UG,
	  $Grade_Points_UG,
	  $GPA_UG,
	  $Overall_passed_UG,
	  $Transfer_Hours_UG,
	  $Cumulative_Credits_UG,
	  $Cumulative_Quality_Points_UG,
	  $Graduate_Level_Code,
	  $Hours_Attempted_G,
	  $Hours_Passed_G,
	  $GPA_Hours_G,
	  $Grade_Points_G,
	  $GPA_G,
	  $Overrall_Hours_Passed_G,
	  $Transfer_Hours_G,
	  $Cumulative_Credits_G,
	  $Cumulative_Quality_Points_G,
	  $Profrssional_Level_Code,
	  $Hours_Attempted_P,
	  $Hours_Passed_P,
	  $GPA_Hours,
	  $Grade_Points_P,
	  $GPA_P,
	  $Overall_Hours_Passed_P,
	  $Transfer_Hours_P,
	  $Cumulative_Credits_P,
	  $cumulative_Quality_Points,
	  $Continuing_Education_Level_Code,
	  $Hours_Attempted_CE,
	  $Hours_Passed_CE,
	  $GPA_Hours_CE,
	  $Grades_Points_CE,
	  $GPA_CE,
	  $Overall_Hours_Passed_CE,
	  $Transfer_Hours_Passed,
	  $Cumulative_Credits_CE,
	  $Cumulative_Qulity_Points_CE,
	  $REgistration_Status_Date,
	  $Registration_Change_Date,
	  $CAlculated_Campus_Code,
	  $Calculated_Campus_Description,
	  $Campus_Of_Record,
	  $Campus_Of_Record_Description,
	  $Hours_Registerd,
	  $Initial_Registration_Date,
	  $Time_Status_Code,
	  $Time_Status_Date,
	  $Maximum_Hours_Allowed,
	  $College_1_Description,
	  $Program_1,
	  $Level_1_Code,
	  $Level_1_Description,
	  $Class_1_Code,
	  $Class_1_description,
	  $Degree_1_Code,
	  $Degree_1_Description,
	  $Curriculum1_1,
	  $Curriculum1_1_Description,
	  $Curriculum1_2,
	  $Curriculum1_2_Description,
	  $Concentration_1_1,
	  $Concentration_1_1_Descripton,
	  $Concentration_1_2,
	  $Concentration1_2_Description,
	  $Minor1_1,
	  $Minor1_1_Description,
	  $Minor1_2,
	  $Minor1_2_Description,
	  $College_2_Code,
	  $College_2_Description,
	  $Program_2,
	  $Level_2_Code,
	  $Level_2_Description,
	  $Class_2_Code,
	  $Class_2_Description,
	  $Degree_2_Code,
	  $Degree_2_Description,
	  $Curriculum_2_1,
	  $Curriculum_2_1_Description,
	  $Curriculum_2_2,
	  $Curriculum_2_2_Description,
	  $Concentration_2_1,
	  $Concentraction_2_1_Description,
	  $Concentration_2_2,
	  $Concentration_2_2_Description,
	  $Visa_Type_Code,
	  $Visa_Type_Description,
	  $VIsa_No,
	  $Visa_Start_Date,
	  $Visa_Expiration_Date,
	  $Citizenship_Indicator,
	  $Citizenship_Decription,
	  $Activity_1_Code,
	  $Activity_1_Description,
	  $Activity_2_Code,
	  $Activity_2_Description,
	  $Sport_1,
	  $Sport_1_Description,
	  $Sport_1_Status_Code,
	  $Sport_1_Status_Description,
	  $Sport_2,
	  $Sport_2_Description,
	  $Sport_2_Status_Code,
	  $Sport_2_Status_Description,
	  $Sport_3,
	  $Sport_3_Description,
	  $Sport_3_Status_Code,
	  $Sport_3_Status_Description,
	  $Attribute_1_Code,
	  $Attribute_1_Description,
	  $Attribute_1_Effective_Term,
	  $Attribute_2_Code,
	  $Attribute_2_Description,
	  $Attribute_2_Effective_Term,
	  $Attribute_3_Code,
	  $Attribute_3_Description,
	  $Attribute_3_Effective_Term,
	  $Attribute_4_Code,
	  $Attribute_4_Description,
	  $Attribute_4_Effective_Term,
	  $Attribute_5_Code,
	  $Attribute_5_Description,
	  $Attribute_5_Effective_Term,
	  $Cohort_1_Code,
	  $Cohort_1_Description,
	  $Cohort_1_Effective_Term,
	  $Cohort_2_Code,
	  $Cohort_2_Desription,
	  $Cohort_2_Effective_Term,
	  $Cohort_3_Code,
	  $Cohort_3_description,
	  $Cohort_3_Effective_Term,
	  $Cohort_4_Code,
	  $Cohort_4_Description,
	  $Cohort_4_Effective_Term,
	  $Cohort_5_Code,
	  $Cohort_5_Description,
	  $Cohort_5_Effective_Term,
	  $Cohort_6_Code,
	  $Cohot_6_Description,
	  $Cohort_6_Effective_Term,
	  $Cohort_7_Code,
	  $Cohort_7_Description,
	  $Cohort_7_Effective_Term,
	  $Cohort_8_Code,
	  $Cohort_8_Description,
	  $Cohort_8_Effective_Term,
	  $Cohort_9_Code,
	  $Cohort_9_Description,
	  $Cohort_Effective_Term,
	  $Cohort_10_Code,
	  $Cohort_10_Descroption,
	  $Cohort_10_Effective_Term;
	  
	
	
	
	
	
	public function __construct(){
		$this->_db = new DB();
		$this->_db = $this->_db ->Connect();
	}
	
		
		
		public function Insert_Students(
	  $Term_Code,
	  $Name_Last,
	  $Name_First,
	  $Tu_Id,
	  $Name_Full,
	  $Name_Prefix,
	  $Name_Suffix,
	  $College,
	  $Student_Type_Code,
	  $Student_Status_Code,
	  $Education_Goal_Code,
	  $Education_Goal_Description,
	  $Expected_Graduation_Date,
	  $First_Semister_Attened,
	  $Last_Semister_Attened,
	  $Admissions_Term,
	  $Catalog_Term,
	  $Last_Term_Avalible,
	  $Hold_Indicator,
	  $Registration_Status_Code,
	  $Registration_Status_Description,
	  $Recidency_Code,
	  $Recidency_Description,
	  $Co_Op_Code1,
	  $Co_Op_Code2,
	  $Co_Op_Code3,
	  $Email_Type_Code,
	  $Email_Type_Address,
	  $Confidentiality_Indicator,
	  $Deceased_Indicator,
	  $Birth_Date,
	  $Gender,
	  $Hispanic_Indicator,
	  $Reported_Race,
	  $Race,
	  $International_Reported_race,
	  $Employee_Indicator,
	  $Veteran_Indicator,
	  $Marital_Status_Code,
	  $Religion_Code,
	  $Financial_Aid_Year,
	  $Financial_Aid_Application_Recieved_Date,
	  $Bill_Date,
	  $Bill_Due_Date,
	  $Payment_Status,
	  $Payment_Status_Date,
	  $Term_Balace,
	  $Total_Account_Balance,
	  $Address_Type_Code,
	  $Address_Type_Description,
	  $Address_Street_Line1,
	  $Address_Street_Line2,
	  $Address_City,
	  $Address_State_Code,
	  $Address_Zip,
	  $Address_County_Code,
	  $Address_County_Description,
	  $Address_nation_Code,
	  $Address_Nation_Description,
	  $Phone_Number,
	  $Phone_Extension,
	  $Associated_Campus_Ambler_Indicator,
	  $Associated_Campus_Center_City_Indicator,
	  $Associated_Campus_Fort_Washington_Indicator,
	  $Associated_Campus_Harrisburg_Indicator,
	  $Associated_Campus_HSC_Indicator,
	  $Associated_Campus_Main_Indicator,
	  $Associated_Campus_Online_Indicator,
	  $Hours_Attempted_UG,
	  $Hours_Passed_UG,
	  $GPA_Hours_UG,
	  $Grade_Points_UG,
	  $GPA_UG,
	  $Overall_passed_UG,
	  $Transfer_Hours_UG,
	  $Cumulative_Credits_UG,
	  $Cumulative_Quality_Points_UG,
	  $Graduate_Level_Code,
	  $Hours_Attempted_G,
	  $Hours_Passed_G,
	  $GPA_Hours_G,
	  $Grade_Points_G,
	  $GPA_G,
	  $Overrall_Hours_Passed_G,
	  $Transfer_Hours_G,
	  $Cumulative_Credits_G,
	  $Cumulative_Quality_Points_G,
	  $Profrssional_Level_Code,
	  $Hours_Attempted_P,
	  $Hours_Passed_P,
	  $GPA_Hours,
	  $Grade_Points_P,
	  $GPA_P,
	  $Overall_Hours_Passed_P,
	  $Transfer_Hours_P,
	  $Cumulative_Credits_P,
	  $cumulative_Quality_Points,
	  $Continuing_Education_Level_Code,
	  $Hours_Attempted_CE,
	  $Hours_Passed_CE,
	  $GPA_Hours_CE,
	  $Grades_Points_CE,
	  $GPA_CE,
	  $Overall_Hours_Passed_CE,
	  $Transfer_Hours_Passed,
	  $Cumulative_Credits_CE,
	  $Cumulative_Qulity_Points_CE,
	  $REgistration_Status_Date,
	  $Registration_Change_Date,
	  $CAlculated_Campus_Code,
	  $Calculated_Campus_Description,
	  $Campus_Of_Record,
	  $Campus_Of_Record_Description,
	  $Hours_Registerd,
	  $Initial_Registration_Date,
	  $Time_Status_Code,
	  $Time_Status_Date,
	  $Maximum_Hours_Allowed,
	  $College_1_Description,
	  $Program_1,
	  $Level_1_Code,
	  $Level_1_Description,
	  $Class_1_Code,
	  $Class_1_description,
	  $Degree_1_Code,
	  $Degree_1_Description,
	  $Curriculum1_1,
	  $Curriculum1_1_Description,
	  $Curriculum1_2,
	  $Curriculum1_2_Description,
	  $Concentration_1_1,
	  $Concentration_1_1_Descripton,
	  $Concentration_1_2,
	  $Concentration1_2_Description,
	  $Minor1_1,
	  $Minor1_1_Description,
	  $Minor1_2,
	  $Minor1_2_Description,
	  $College_2_Code,
	  $College_2_Description,
	  $Program_2,
	  $Level_2_Code,
	  $Level_2_Description,
	  $Class_2_Code,
	  $Class_2_Description,
	  $Degree_2_Code,
	  $Degree_2_Description,
	  $Curriculum_2_1,
	  $Curriculum_2_1_Description,
	  $Curriculum_2_2,
	  $Curriculum_2_2_Description,
	  $Concentration_2_1,
	  $Concentraction_2_1_Description,
	  $Concentration_2_2,
	  $Concentration_2_2_Description,
	  $Visa_Type_Code,
	  $Visa_Type_Description,
	  $VIsa_No,
	  $Visa_Start_Date,
	  $Visa_Expiration_Date,
	  $Citizenship_Indicator,
	  $Citizenship_Decription,
	  $Activity_1_Code,
	  $Activity_1_Description,
	  $Activity_2_Code,
	  $Activity_2_Description,
	  $Sport_1,
	  $Sport_1_Description,
	  $Sport_1_Status_Code,
	  $Sport_1_Status_Description,
	  $Sport_2,
	  $Sport_2_Description,
	  $Sport_2_Status_Code,
	  $Sport_2_Status_Description,
	  $Sport_3,
	  $Sport_3_Description,
	  $Sport_3_Status_Code,
	  $Sport_3_Status_Description,
	  $Attribute_1_Code,
	  $Attribute_1_Description,
	  $Attribute_1_Effective_Term,
	  $Attribute_2_Code,
	  $Attribute_2_Description,
	  $Attribute_2_Effective_Term,
	  $Attribute_3_Code,
	  $Attribute_3_Description,
	  $Attribute_3_Effective_Term,
	  $Attribute_4_Code,
	  $Attribute_4_Description,
	  $Attribute_4_Effective_Term,
	  $Attribute_5_Code,
	  $Attribute_5_Description,
	  $Attribute_5_Effective_Term,
	  $Cohort_1_Code,
	  $Cohort_1_Description,
	  $Cohort_1_Effective_Term,
	  $Cohort_2_Code,
	  $Cohort_2_Desription,
	  $Cohort_2_Effective_Term,
	  $Cohort_3_Code,
	  $Cohort_3_description,
	  $Cohort_3_Effective_Term,
	  $Cohort_4_Code,
	  $Cohort_4_Description,
	  $Cohort_4_Effective_Term,
	  $Cohort_5_Code,
	  $Cohort_5_Description,
	  $Cohort_5_Effective_Term,
	  $Cohort_6_Code,
	  $Cohot_6_Description,
	  $Cohort_6_Effective_Term,
	  $Cohort_7_Code,
	  $Cohort_7_Description,
	  $Cohort_7_Effective_Term,
	  $Cohort_8_Code,
	  $Cohort_8_Description,
	  $Cohort_8_Effective_Term,
	  $Cohort_9_Code,
	  $Cohort_9_Description,
	  $Cohort_Effective_Term,
	  $Cohort_10_Code,
	  $Cohort_10_Descroption,
	  $Cohort_10_Effective_Term)
		{
			
			
	/// Check if the user is on the database
	
	if($Tu_Id == ""){
		return "Emty Row";
	}else {
	
			$checkIdStudent = $this->_db->prepare("SELECT * FROM Student WHERE Tu_Id = ?");
			$checkIdStudent->bindParam(1,$Tu_Id);
			$checkIdStudent->execute();
			
			if($checkIdStudent->rowCount() == 1){
				
				$result = $checkIdStudent->fetchAll(PDO::FETCH_ASSOC);
				@$result = $result[0];
				$this->Student_Id 		= $result['Student_Id'];
				
				
				//return "Student already on database \n   UPDATING ...";
				
				$UpdateStudent = new Students();
				$UpdateStudent->Update_Students($Term_Code,$Name_Last,$Name_First,
	  $Tu_Id,
	  $Name_Full,
	  $Name_Prefix,
	  $Name_Suffix,
	  $College,
	  $Student_Type_Code,
	  $Student_Status_Code,
	  $Education_Goal_Code,
	  $Education_Goal_Description,
	  $Expected_Graduation_Date,
	  $First_Semister_Attened,
	  $Last_Semister_Attened,
	  $Admissions_Term,
	  $Catalog_Term,
	  $Last_Term_Avalible,
	  $Hold_Indicator,
	  $Registration_Status_Code,
	  $Registration_Status_Description,
	  $Recidency_Code,
	  $Recidency_Description,
	  $Co_Op_Code1,
	  $Co_Op_Code2,
	  $Co_Op_Code3,
	  $Email_Type_Code,
	  $Email_Type_Address,
	  $Confidentiality_Indicator,
	  $Deceased_Indicator,
	  $Birth_Date,
	  $Gender,
	  $Hispanic_Indicator,
	  $Reported_Race,
	  $Race,
	  $International_Reported_race,
	  $Employee_Indicator,
	  $Veteran_Indicator,
	  $Marital_Status_Code,
	  $Religion_Code,
	  $Financial_Aid_Year,
	  $Financial_Aid_Application_Recieved_Date,
	  $Bill_Date,
	  $Bill_Due_Date,
	  $Payment_Status,
	  $Payment_Status_Date,
	  $Term_Balace,
	  $Total_Account_Balance,
	  $Address_Type_Code,
	  $Address_Type_Description,
	  $Address_Street_Line1,
	  $Address_Street_Line2,
	  $Address_City,
	  $Address_State_Code,
	  $Address_Zip,
	  $Address_County_Code,
	  $Address_County_Description,
	  $Address_nation_Code,
	  $Address_Nation_Description,
	  $Phone_Number,
	  $Phone_Extension,
	  $Associated_Campus_Ambler_Indicator,
	  $Associated_Campus_Center_City_Indicator,
	  $Associated_Campus_Fort_Washington_Indicator,
	  $Associated_Campus_Harrisburg_Indicator,
	  $Associated_Campus_HSC_Indicator,
	  $Associated_Campus_Main_Indicator,
	  $Associated_Campus_Online_Indicator,
	  $Hours_Attempted_UG,
	  $Hours_Passed_UG,
	  $GPA_Hours_UG,
	  $Grade_Points_UG,
	  $GPA_UG,
	  $Overall_passed_UG,
	  $Transfer_Hours_UG,
	  $Cumulative_Credits_UG,
	  $Cumulative_Quality_Points_UG,
	  $Graduate_Level_Code,
	  $Hours_Attempted_G,
	  $Hours_Passed_G,
	  $GPA_Hours_G,
	  $Grade_Points_G,
	  $GPA_G,
	  $Overrall_Hours_Passed_G,
	  $Transfer_Hours_G,
	  $Cumulative_Credits_G,
	  $Cumulative_Quality_Points_G,
	  $Profrssional_Level_Code,
	  $Hours_Attempted_P,
	  $Hours_Passed_P,
	  $GPA_Hours,
	  $Grade_Points_P,
	  $GPA_P,
	  $Overall_Hours_Passed_P,
	  $Transfer_Hours_P,
	  $Cumulative_Credits_P,
	  $cumulative_Quality_Points,
	  $Continuing_Education_Level_Code,
	  $Hours_Attempted_CE,
	  $Hours_Passed_CE,
	  $GPA_Hours_CE,
	  $Grades_Points_CE,
	  $GPA_CE,
	  $Overall_Hours_Passed_CE,
	  $Transfer_Hours_Passed,
	  $Cumulative_Credits_CE,
	  $Cumulative_Qulity_Points_CE,
	  $REgistration_Status_Date,
	  $Registration_Change_Date,
	  $CAlculated_Campus_Code,
	  $Calculated_Campus_Description,
	  $Campus_Of_Record,
	  $Campus_Of_Record_Description,
	  $Hours_Registerd,
	  $Initial_Registration_Date,
	  $Time_Status_Code,
	  $Time_Status_Date,
	  $Maximum_Hours_Allowed,
	  $College_1_Description,
	  $Program_1,
	  $Level_1_Code,
	  $Level_1_Description,
	  $Class_1_Code,
	  $Class_1_description,
	  $Degree_1_Code,
	  $Degree_1_Description,
	  $Curriculum1_1,
	  $Curriculum1_1_Description,
	  $Curriculum1_2,
	  $Curriculum1_2_Description,
	  $Concentration_1_1,
	  $Concentration_1_1_Descripton,
	  $Concentration_1_2,
	  $Concentration1_2_Description,
	  $Minor1_1,
	  $Minor1_1_Description,
	  $Minor1_2,
	  $Minor1_2_Description,
	  $College_2_Code,
	  $College_2_Description,
	  $Program_2,
	  $Level_2_Code,
	  $Level_2_Description,
	  $Class_2_Code,
	  $Class_2_Description,
	  $Degree_2_Code,
	  $Degree_2_Description,
	  $Curriculum_2_1,
	  $Curriculum_2_1_Description,
	  $Curriculum_2_2,
	  $Curriculum_2_2_Description,
	  $Concentration_2_1,
	  $Concentraction_2_1_Description,
	  $Concentration_2_2,
	  $Concentration_2_2_Description,
	  $Visa_Type_Code,
	  $Visa_Type_Description,
	  $VIsa_No,
	  $Visa_Start_Date,
	  $Visa_Expiration_Date,
	  $Citizenship_Indicator,
	  $Citizenship_Decription,
	  $Activity_1_Code,
	  $Activity_1_Description,
	  $Activity_2_Code,
	  $Activity_2_Description,
	  $Sport_1,
	  $Sport_1_Description,
	  $Sport_1_Status_Code,
	  $Sport_1_Status_Description,
	  $Sport_2,
	  $Sport_2_Description,
	  $Sport_2_Status_Code,
	  $Sport_2_Status_Description,
	  $Sport_3,
	  $Sport_3_Description,
	  $Sport_3_Status_Code,
	  $Sport_3_Status_Description,
	  $Attribute_1_Code,
	  $Attribute_1_Description,
	  $Attribute_1_Effective_Term,
	  $Attribute_2_Code,
	  $Attribute_2_Description,
	  $Attribute_2_Effective_Term,
	  $Attribute_3_Code,
	  $Attribute_3_Description,
	  $Attribute_3_Effective_Term,
	  $Attribute_4_Code,
	  $Attribute_4_Description,
	  $Attribute_4_Effective_Term,
	  $Attribute_5_Code,
	  $Attribute_5_Description,
	  $Attribute_5_Effective_Term,
	  $Cohort_1_Code,
	  $Cohort_1_Description,
	  $Cohort_1_Effective_Term,
	  $Cohort_2_Code,
	  $Cohort_2_Desription,
	  $Cohort_2_Effective_Term,
	  $Cohort_3_Code,
	  $Cohort_3_description,
	  $Cohort_3_Effective_Term,
	  $Cohort_4_Code,
	  $Cohort_4_Description,
	  $Cohort_4_Effective_Term,
	  $Cohort_5_Code,
	  $Cohort_5_Description,
	  $Cohort_5_Effective_Term,
	  $Cohort_6_Code,
	  $Cohot_6_Description,
	  $Cohort_6_Effective_Term,
	  $Cohort_7_Code,
	  $Cohort_7_Description,
	  $Cohort_7_Effective_Term,
	  $Cohort_8_Code,
	  $Cohort_8_Description,
	  $Cohort_8_Effective_Term,
	  $Cohort_9_Code,
	  $Cohort_9_Description,
	  $Cohort_Effective_Term,
	  $Cohort_10_Code,
	  $Cohort_10_Descroption,
	  $Cohort_10_Effective_Term,
	  $this->Student_Id);
			
				
				return "user Updated";
				
				
				////// END UPDATING DATA
			
			
			 }else{
			
			$sql = "INSERT INTO Student (`Term_Code`, `Name_Last`, `Name_First`, `Tu_Id`, `Name_Full`, `Name_Prefix`, `Name_Suffix`, `College`, `Student_Type_Code`, `Student_Status_Code`, `Education_Goal_Code`, `Education_Goal_Description`, `Expected_Graduation_Date`, `First_Semister_Attened`, `Last_Semister_Attened`, `Admissions_Term`, `Catalog_Term`, `Last_Term_Avalible`, `Hold_Indicator`, `Registration_Status_Code`, `Registration_Status_Description`, `Recidency_Code`, `Recidency_Description`, `Co_Op_Code1`, `Co_Op_Code2`, `Co_Op_Code3`, `Email_Type_Code`, `Email_Type_Address`, `Confidentiality_Indicator`, `Deceased_Indicator`, `Birth_Date`, `Gender`, `Hispanic_Indicator`, `Reported_Race`, `Race`, `International_Reported_race`, `Employee_Indicator`, `Veteran_Indicator`, `Marital_Status_Code`, `Religion_Code`, `Financial_Aid_Year`, `Financial_Aid_Application_Recieved_Date`, `Bill_Date`, `Bill_Due_Date`, `Payment_Status`, `Payment_Status_Date`, `Term_Balace`, `Total_Account_Balance`, `Address_Type_Code`, `Address_Type_Description`, `Address_Street_Line1`, `Address_Street_Line2`, `Address_City`, `Address_State_Code`, `Address_Zip`, `Address_County_Code`, `Address_County_Description`, `Address_nation_Code`, `Address_Nation_Description`, `Phone_Number`, `Phone_Extension`, `Associated_Campus_Ambler_Indicator`, `Associated_Campus_Center_City_Indicator`, `Associated_Campus_Fort_Washington_Indicator`, `Associated_Campus_Harrisburg_Indicator`, `Associated_Campus_HSC_Indicator`, `Associated_Campus_Main_Indicator`, `Associated_Campus_Online_Indicator`, `Hours_Attempted_UG`, `Hours_Passed_UG`, `GPA_Hours_UG`, `Grade_Points_UG`, `GPA_UG`, `Overall_passed_UG`, `Transfer_Hours_UG`, `Cumulative_Credits_UG`, `Cumulative_Quality_Points_UG`, `Graduate_Level_Code`, `Hours_Attempted_G`, `Hours_Passed_G`, `GPA_Hours_G`, `Grade_Points_G`, `GPA_G`, `Overrall_Hours_Passed_G`, `Transfer_Hours_G`, `Cumulative_Credits_G`, `Cumulative_Quality_Points_G`, `Profrssional_Level_Code`, `Hours_Attempted_P`, `Hours_Passed_P`, `GPA_Hours`, `Grade_Points_P`, `GPA_P`, `Overall_Hours_Passed_P`, `Transfer_Hours_P`, `Cumulative_Credits_P`, `cumulative_Quality_Points`, `Continuing_Education_Level_Code`, `Hours_Attempted_CE`, `Hours_Passed_CE`, `GPA_Hours_CE`, `Grades_Points_CE`, `GPA_CE`, `Overall_Hours_Passed_CE`, `Transfer_Hours_Passed`, `Cumulative_Credits_CE`, `Cumulative_Qulity_Points_CE`, `REgistration_Status_Date`, `Registration_Change_Date`, `CAlculated_Campus_Code`, `Calculated_Campus_Description`, `Campus_Of_Record`, `Campus_Of_Record_Description`, `Hours_Registerd`, `Initial_Registration_Date`, `Time_Status_Code`, `Time_Status_Date`, `Maximum_Hours_Allowed`, `College_1_Description`, `Program_1`, `Level_1_Code`, `Level_1_Description`, `Class_1_Code`, `Class_1_description`, `Degree_1_Code`, `Degree_1_Description`, `Curriculum1_1`, `Curriculum1_1_Description`, `Curriculum1_2`, `Curriculum1_2_Description`, `Concentration_1_1`, `Concentration_1_1_Descripton`, `Concentration_1_2`, `Concentration1_2_Description`, `Minor1_1`, `Minor1_1_Description`, `Minor1_2`, `Minor1_2_Description`, `College_2_Code`, `College_2_Description`, `Program_2`, `Level_2_Code`, `Level_2_Description`, `Class_2_Code`, `Class_2_Description`, `Degree_2_Code`, `Degree_2_Description`, `Curriculum_2_1`, `Curriculum_2_1_Description`, `Curriculum_2_2`, `Curriculum_2_2_Description`, `Concentration_2_1`, `Concentraction_2_1_Description`, `Concentration_2_2`, `Concentration_2_2_Description`, `Visa_Type_Code`, `Visa_Type_Description`, `VIsa_No`, `Visa_Start_Date`, `Visa_Expiration_Date`, `Citizenship_Indicator`, `Citizenship_Decription`, `Activity_1_Code`, `Activity_1_Description`, `Activity_2_Code`, `Activity_2_Description`, `Sport_1`, `Sport_1_Description`, `Sport_1_Status_Code`, `Sport_1_Status_Description`, `Sport_2`, `Sport_2_Description`, `Sport_2_Status_Code`, `Sport_2_Status_Description`, `Sport_3`, `Sport_3_Description`, `Sport_3_Status_Code`, `Sport_3_Status_Description`, `Attribute_1_Code`, `Attribute_1_Description`, `Attribute_1_Effective_Term`, `Attribute_2_Code`, `Attribute_2_Description`, `Attribute_2_Effective_Term`, `Attribute_3_Code`, `Attribute_3_Description`, `Attribute_3_Effective_Term`, `Attribute_4_Code`, `Attribute_4_Description`, `Attribute_4_Effective_Term`, `Attribute_5_Code`, `Attribute_5_Description`, `Attribute_5_Effective_Term`, `Cohort_1_Code`, `Cohort_1_Description`, `Cohort_1_Effective_Term`, `Cohort_2_Code`, `Cohort_2_Desription`, `Cohort_2_Effective_Term`, `Cohort_3_Code`, `Cohort_3_description`, `Cohort_3_Effective_Term`, `Cohort_4_Code`, `Cohort_4_Description`, `Cohort_4_Effective_Term`, `Cohort_5_Code`, `Cohort_5_Description`, `Cohort_5_Effective_Term`, `Cohort_6_Code`, `Cohot_6_Description`, `Cohort_6_Effective_Term`, `Cohort_7_Code`, `Cohort_7_Description`, `Cohort_7_Effective_Term`, `Cohort_8_Code`, `Cohort_8_Description`, `Cohort_8_Effective_Term`, `Cohort_9_Code`, `Cohort_9_Description`, `Cohort_Effective_Term`, `Cohort_10_Code`, `Cohort_10_Descroption`, `Cohort_10_Effective_Term`) 
 VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		
		
		
			
			$N = 1;
	
	  $query_Insert = $this->_db->prepare($sql);
	  $query_Insert->bindParam($N++, $Term_Code);
	  $query_Insert->bindParam($N++,$Name_Last);
	  $query_Insert->bindParam($N++,$Name_First);
	  $query_Insert->bindParam($N++,$Tu_Id);
	  $query_Insert->bindParam($N++, $Name_Full);
	  $query_Insert->bindParam($N++,$Name_Prefix);
	  $query_Insert->bindParam($N++,$Name_Suffix);
	  $query_Insert->bindParam($N++,$College);
	  $query_Insert->bindParam($N++,$Student_Type_Code);
	  $query_Insert->bindParam($N++,$Student_Status_Code);
	  $query_Insert->bindParam($N++,$Education_Goal_Code);
	  $query_Insert->bindParam($N++,$Education_Goal_Description);
	  $query_Insert->bindParam($N++,$Expected_Graduation_Date);
	  $query_Insert->bindParam($N++,$First_Semister_Attened);
	  $query_Insert->bindParam($N++,$Last_Semister_Attened);
	  $query_Insert->bindParam($N++,$Admissions_Term);
	  $query_Insert->bindParam($N++, $Catalog_Term);
	  $query_Insert->bindParam($N++, $Last_Term_Avalible);
	  $query_Insert->bindParam($N++, $Hold_Indicator);
	  $query_Insert->bindParam($N++, $Registration_Status_Code);
	  $query_Insert->bindParam($N++, $Registration_Status_Description);
	  $query_Insert->bindParam($N++,$Recidency_Code);
	  $query_Insert->bindParam($N++,$Recidency_Description);
	  $query_Insert->bindParam($N++,$Co_Op_Code1);
	  $query_Insert->bindParam($N++,$Co_Op_Code2);
	  $query_Insert->bindParam($N++,$Co_Op_Code3);
	  $query_Insert->bindParam($N++,$Email_Type_Code);
	  $query_Insert->bindParam($N++, $Email_Type_Address);
	  $query_Insert->bindParam($N++, $Confidentiality_Indicator);
	  $query_Insert->bindParam($N++, $Deceased_Indicator);
	  $query_Insert->bindParam($N++,$Birth_Date);
	  $query_Insert->bindParam($N++, $Gender);
	  $query_Insert->bindParam($N++, $Hispanic_Indicator);
	  $query_Insert->bindParam($N++, $Reported_Race);
	  $query_Insert->bindParam($N++, $Race);
	  $query_Insert->bindParam($N++, $International_Reported_race);
	  $query_Insert->bindParam($N++, $Employee_Indicator);
	  $query_Insert->bindParam($N++, $Veteran_Indicator);
	  $query_Insert->bindParam($N++, $Marital_Status_Code);
	  $query_Insert->bindParam($N++, $Religion_Code);
	  $query_Insert->bindParam($N++, $Financial_Aid_Year);
	  $query_Insert->bindParam($N++, $Financial_Aid_Application_Recieved_Date);
	  $query_Insert->bindParam($N++, $Bill_Date);
	  $query_Insert->bindParam($N++, $Bill_Due_Date);
	  $query_Insert->bindParam($N++, $Payment_Status);
	  $query_Insert->bindParam($N++, $Payment_Status_Date);
	  $query_Insert->bindParam($N++, $Term_Balace);
	  $query_Insert->bindParam($N++, $Total_Account_Balance);
	  $query_Insert->bindParam($N++, $Address_Type_Code);
	  $query_Insert->bindParam($N++, $Address_Type_Description);
	  $query_Insert->bindParam($N++, $Address_Street_Line1);
	  $query_Insert->bindParam($N++, $Address_Street_Line2);
	  $query_Insert->bindParam($N++, $Address_City);
	  $query_Insert->bindParam($N++, $Address_State_Code);
	  $query_Insert->bindParam($N++, $Address_Zip);
	  $query_Insert->bindParam($N++, $Address_County_Code);
	  $query_Insert->bindParam($N++, $Address_County_Description);
	  $query_Insert->bindParam($N++, $Address_nation_Code);
	  $query_Insert->bindParam($N++, $Address_Nation_Description);
	  $query_Insert->bindParam($N++, $Phone_Number);
	  $query_Insert->bindParam($N++, $Phone_Extension);
	  $query_Insert->bindParam($N++, $Associated_Campus_Ambler_Indicator);
	  $query_Insert->bindParam($N++, $Associated_Campus_Center_City_Indicator);
	  $query_Insert->bindParam($N++, $Associated_Campus_Fort_Washington_Indicator);
	  $query_Insert->bindParam($N++, $Associated_Campus_Harrisburg_Indicator);
	  $query_Insert->bindParam($N++, $Associated_Campus_HSC_Indicator);
	  $query_Insert->bindParam($N++, $Associated_Campus_Main_Indicator);
	  $query_Insert->bindParam($N++, $Associated_Campus_Online_Indicator);
	  $query_Insert->bindParam($N++, $Hours_Attempted_UG);
	  $query_Insert->bindParam($N++, $Hours_Passed_UG);
	  $query_Insert->bindParam($N++, $GPA_Hours_UG);
	  $query_Insert->bindParam($N++, $Grade_Points_UG);
	  $query_Insert->bindParam($N++, $GPA_UG);
	  $query_Insert->bindParam($N++, $Overall_passed_UG);
	  $query_Insert->bindParam($N++, $Transfer_Hours_UG);
	  $query_Insert->bindParam($N++, $Cumulative_Credits_UG);
	  $query_Insert->bindParam($N++,$Cumulative_Quality_Points_UG);
	  $query_Insert->bindParam($N++, $Graduate_Level_Code);
	  $query_Insert->bindParam($N++, $Hours_Attempted_G);
	  $query_Insert->bindParam($N++, $Hours_Passed_G);
	  $query_Insert->bindParam($N++, $GPA_Hours_G);
	  $query_Insert->bindParam($N++, $Grade_Points_G);
	  $query_Insert->bindParam($N++, $GPA_G);
	  $query_Insert->bindParam($N++,  $Overrall_Hours_Passed_G);
	  $query_Insert->bindParam($N++,  $Transfer_Hours_G);
	  $query_Insert->bindParam($N++,  $Cumulative_Credits_G);
	  $query_Insert->bindParam($N++,  $Cumulative_Quality_Points_G);
	  $query_Insert->bindParam($N++,  $Profrssional_Level_Code);
	  $query_Insert->bindParam($N++,  $Hours_Attempted_P);
	  $query_Insert->bindParam($N++,  $Hours_Passed_P);
	  $query_Insert->bindParam($N++,  $GPA_Hours);
	  $query_Insert->bindParam($N++,  $Grade_Points_P);
	  $query_Insert->bindParam($N++,  $GPA_P);
	  $query_Insert->bindParam($N++, $Overall_Hours_Passed_P);
	  $query_Insert->bindParam($N++, $Transfer_Hours_P);
	  $query_Insert->bindParam($N++, $Cumulative_Credits_P);
	  $query_Insert->bindParam($N++, $cumulative_Quality_Points);
	  $query_Insert->bindParam($N++,  $Continuing_Education_Level_Code);
	  $query_Insert->bindParam($N++,  $Hours_Attempted_CE);
	  $query_Insert->bindParam($N++,$Hours_Passed_CE);
	  $query_Insert->bindParam($N++, $GPA_Hours_CE);
	  $query_Insert->bindParam($N++, $Grades_Points_CE);
	  $query_Insert->bindParam($N++, $GPA_CE);
	  $query_Insert->bindParam($N++, $Overall_Hours_Passed_CE);
	  $query_Insert->bindParam($N++, $Transfer_Hours_Passed);
	  $query_Insert->bindParam($N++, $Cumulative_Credits_CE);
	  $query_Insert->bindParam($N++, $Cumulative_Qulity_Points_CE);
	  $query_Insert->bindParam($N++, $REgistration_Status_Date);
	  $query_Insert->bindParam($N++, $Registration_Change_Date);
	  $query_Insert->bindParam($N++, $CAlculated_Campus_Code);
	  $query_Insert->bindParam($N++, $Calculated_Campus_Description);
	  $query_Insert->bindParam($N++, $Campus_Of_Record);
	  $query_Insert->bindParam($N++, $Campus_Of_Record_Description);
	  $query_Insert->bindParam($N++, $Hours_Registerd);
	  $query_Insert->bindParam($N++, $Initial_Registration_Date);
	  $query_Insert->bindParam($N++, $Time_Status_Code);
	  $query_Insert->bindParam($N++, $Time_Status_Date);
	  $query_Insert->bindParam($N++,  $Maximum_Hours_Allowed);
	  $query_Insert->bindParam($N++,  $College_1_Description);
	  $query_Insert->bindParam($N++, $Program_1);
	  $query_Insert->bindParam($N++, $Level_1_Code);
	  $query_Insert->bindParam($N++, $Level_1_Description);
	  $query_Insert->bindParam($N++, $Class_1_Code);
	  $query_Insert->bindParam($N++, $Class_1_description);
	  $query_Insert->bindParam($N++, $Degree_1_Code);
	  $query_Insert->bindParam($N++, $Degree_1_Description);
	  $query_Insert->bindParam($N++, $Curriculum1_1);
	  $query_Insert->bindParam($N++, $Curriculum1_1_Description);
	  $query_Insert->bindParam($N++, $Curriculum1_2);
	  $query_Insert->bindParam($N++, $Curriculum1_2_Description);
	  $query_Insert->bindParam($N++, $Concentration_1_1);
	  $query_Insert->bindParam($N++, $Concentration_1_1_Descripton);
	  $query_Insert->bindParam($N++, $Concentration_1_2);
	  $query_Insert->bindParam($N++, $Concentration1_2_Description);
	  $query_Insert->bindParam($N++,$Minor1_1);
	  $query_Insert->bindParam($N++, $Minor1_1_Description);
	  $query_Insert->bindParam($N++,  $Minor1_2);
	  $query_Insert->bindParam($N++, $Minor1_2_Description);
	  $query_Insert->bindParam($N++, $College_2_Code);
	  $query_Insert->bindParam($N++, $College_2_Description);
	  $query_Insert->bindParam($N++,  $Program_2);
	  $query_Insert->bindParam($N++,  $Level_2_Code);
	  $query_Insert->bindParam($N++,  $Level_2_Description);
	  $query_Insert->bindParam($N++,  $Class_2_Code);
	  $query_Insert->bindParam($N++,  $Class_2_Description);
	  $query_Insert->bindParam($N++, $Degree_2_Code);
	  $query_Insert->bindParam($N++, $Degree_2_Description);
	  $query_Insert->bindParam($N++, $Curriculum_2_1);
	  $query_Insert->bindParam($N++, $Curriculum_2_1_Description);
	  $query_Insert->bindParam($N++, $Curriculum_2_2);
	  $query_Insert->bindParam($N++, $Curriculum_2_2_Description);
	  $query_Insert->bindParam($N++, $Concentration_2_1);
	  $query_Insert->bindParam($N++, $Concentraction_2_1_Description);
	  $query_Insert->bindParam($N++, $Concentration_2_2);
	  $query_Insert->bindParam($N++, $Concentration_2_2_Description);
	  $query_Insert->bindParam($N++, $Visa_Type_Code);
	  $query_Insert->bindParam($N++, $Visa_Type_Description);
	  $query_Insert->bindParam($N++, $VIsa_No);
	  $query_Insert->bindParam($N++, $Visa_Start_Date);
	  $query_Insert->bindParam($N++, $Visa_Expiration_Date);
	  $query_Insert->bindParam($N++, $Citizenship_Indicator);
	  $query_Insert->bindParam($N++, $Citizenship_Decription);
	  $query_Insert->bindParam($N++,$Activity_1_Code);
	  $query_Insert->bindParam($N++, $Activity_1_Description);
	  $query_Insert->bindParam($N++, $Activity_2_Code);
	  $query_Insert->bindParam($N++, $Activity_2_Description);
	  $query_Insert->bindParam($N++, $Sport_1);
	  $query_Insert->bindParam($N++, $Sport_1_Description);
	  $query_Insert->bindParam($N++, $Sport_1_Status_Code);
	  $query_Insert->bindParam($N++, $Sport_1_Status_Description);
	  $query_Insert->bindParam($N++, $Sport_2);
	  $query_Insert->bindParam($N++, $Sport_2_Description);
	  $query_Insert->bindParam($N++, $Sport_2_Status_Code);
	  $query_Insert->bindParam($N++, $Sport_2_Status_Description);
	  $query_Insert->bindParam($N++, $Sport_3);
	  $query_Insert->bindParam($N++, $Sport_3_Description);
	  $query_Insert->bindParam($N++, $Sport_3_Status_Code);
	  $query_Insert->bindParam($N++, $Sport_3_Status_Description);
	  $query_Insert->bindParam($N++, $Attribute_1_Code);
	  $query_Insert->bindParam($N++, $Attribute_1_Description);
	  $query_Insert->bindParam($N++, $Attribute_1_Effective_Term);
	  $query_Insert->bindParam($N++, $Attribute_2_Code);
	  $query_Insert->bindParam($N++, $Attribute_2_Description);
	  $query_Insert->bindParam($N++, $Attribute_2_Effective_Term);
	  $query_Insert->bindParam($N++, $Attribute_3_Code);
	  $query_Insert->bindParam($N++, $Attribute_3_Description);
	  $query_Insert->bindParam($N++, $Attribute_3_Effective_Term);
	  $query_Insert->bindParam($N++, $Attribute_4_Code);
	  $query_Insert->bindParam($N++, $Attribute_4_Description);
	  $query_Insert->bindParam($N++, $Attribute_4_Effective_Term);
	  $query_Insert->bindParam($N++,$Attribute_5_Code);
	  $query_Insert->bindParam($N++,$Attribute_5_Description);
	  $query_Insert->bindParam($N++, $Attribute_5_Effective_Term);
	  $query_Insert->bindParam($N++,$Cohort_1_Code);
	  $query_Insert->bindParam($N++,$Cohort_1_Description);
	  $query_Insert->bindParam($N++, $Cohort_1_Effective_Term);
	  $query_Insert->bindParam($N++,$Cohort_2_Code);
	  $query_Insert->bindParam($N++, $Cohort_2_Desription);
	  $query_Insert->bindParam($N++, $Cohort_2_Effective_Term);
	  $query_Insert->bindParam($N++,$Cohort_3_Code);
	  $query_Insert->bindParam($N++,$Cohort_3_description);
	  $query_Insert->bindParam($N++, $Cohort_3_Effective_Term);
	  $query_Insert->bindParam($N++, $Cohort_4_Code);
	  $query_Insert->bindParam($N++,$Cohort_4_Description);
	  $query_Insert->bindParam($N++,$Cohort_4_Effective_Term);
	  $query_Insert->bindParam($N++,$Cohort_5_Code);
	  $query_Insert->bindParam($N++,$Cohort_5_Description);
	  $query_Insert->bindParam($N++,$Cohort_5_Effective_Term);
	  $query_Insert->bindParam($N++,$Cohort_6_Code);
	  $query_Insert->bindParam($N++,$Cohot_6_Description);
	  $query_Insert->bindParam($N++,$Cohort_6_Effective_Term);
	  $query_Insert->bindParam($N++,$Cohort_7_Code);
	  $query_Insert->bindParam($N++,$Cohort_7_Description);
	  $query_Insert->bindParam($N++,$Cohort_7_Effective_Term);
	  $query_Insert->bindParam($N++,$Cohort_8_Code);
	  $query_Insert->bindParam($N++,$Cohort_8_Description);
	  $query_Insert->bindParam($N++,$Cohort_8_Effective_Term);
	  $query_Insert->bindParam($N++,$Cohort_9_Code);
	  $query_Insert->bindParam($N++,$Cohort_9_Description);
	  $query_Insert->bindParam($N++,$Cohort_Effective_Term);
	  $query_Insert->bindParam($N++,$Cohort_10_Code);
	  $query_Insert->bindParam($N++,$Cohort_10_Descroption);
	  $query_Insert->bindParam($N++,$Cohort_10_Effective_Term);
		
				$query_Insert->execute();
				
			$N = 0;	
	
				return "New Student Added";
		}
		
	} // End else condition insert Studet
		
		} // End of my else condition
		
	
	
	
	
	
	
public function Update_Students($Term_Code,$Name_Last,$Name_First,
	  $Tu_Id,
	  $Name_Full,
	  $Name_Prefix,
	  $Name_Suffix,
	  $College,
	  $Student_Type_Code,
	  $Student_Status_Code,
	  $Education_Goal_Code,
	  $Education_Goal_Description,
	  $Expected_Graduation_Date,
	  $First_Semister_Attened,
	  $Last_Semister_Attened,
	  $Admissions_Term,
	  $Catalog_Term,
	  $Last_Term_Avalible,
	  $Hold_Indicator,
	  $Registration_Status_Code,
	  $Registration_Status_Description,
	  $Recidency_Code,
	  $Recidency_Description,
	  $Co_Op_Code1,
	  $Co_Op_Code2,
	  $Co_Op_Code3,
	  $Email_Type_Code,
	  $Email_Type_Address,
	  $Confidentiality_Indicator,
	  $Deceased_Indicator,
	  $Birth_Date,
	  $Gender,
	  $Hispanic_Indicator,
	  $Reported_Race,
	  $Race,
	  $International_Reported_race,
	  $Employee_Indicator,
	  $Veteran_Indicator,
	  $Marital_Status_Code,
	  $Religion_Code,
	  $Financial_Aid_Year,
	  $Financial_Aid_Application_Recieved_Date,
	  $Bill_Date,
	  $Bill_Due_Date,
	  $Payment_Status,
	  $Payment_Status_Date,
	  $Term_Balace,
	  $Total_Account_Balance,
	  $Address_Type_Code,
	  $Address_Type_Description,
	  $Address_Street_Line1,
	  $Address_Street_Line2,
	  $Address_City,
	  $Address_State_Code,
	  $Address_Zip,
	  $Address_County_Code,
	  $Address_County_Description,
	  $Address_nation_Code,
	  $Address_Nation_Description,
	  $Phone_Number,
	  $Phone_Extension,
	  $Associated_Campus_Ambler_Indicator,
	  $Associated_Campus_Center_City_Indicator,
	  $Associated_Campus_Fort_Washington_Indicator,
	  $Associated_Campus_Harrisburg_Indicator,
	  $Associated_Campus_HSC_Indicator,
	  $Associated_Campus_Main_Indicator,
	  $Associated_Campus_Online_Indicator,
	  $Hours_Attempted_UG,
	  $Hours_Passed_UG,
	  $GPA_Hours_UG,
	  $Grade_Points_UG,
	  $GPA_UG,
	  $Overall_passed_UG,
	  $Transfer_Hours_UG,
	  $Cumulative_Credits_UG,
	  $Cumulative_Quality_Points_UG,
	  $Graduate_Level_Code,
	  $Hours_Attempted_G,
	  $Hours_Passed_G,
	  $GPA_Hours_G,
	  $Grade_Points_G,
	  $GPA_G,
	  $Overrall_Hours_Passed_G,
	  $Transfer_Hours_G,
	  $Cumulative_Credits_G,
	  $Cumulative_Quality_Points_G,
	  $Profrssional_Level_Code,
	  $Hours_Attempted_P,
	  $Hours_Passed_P,
	  $GPA_Hours,
	  $Grade_Points_P,
	  $GPA_P,
	  $Overall_Hours_Passed_P,
	  $Transfer_Hours_P,
	  $Cumulative_Credits_P,
	  $cumulative_Quality_Points,
	  $Continuing_Education_Level_Code,
	  $Hours_Attempted_CE,
	  $Hours_Passed_CE,
	  $GPA_Hours_CE,
	  $Grades_Points_CE,
	  $GPA_CE,
	  $Overall_Hours_Passed_CE,
	  $Transfer_Hours_Passed,
	  $Cumulative_Credits_CE,
	  $Cumulative_Qulity_Points_CE,
	  $REgistration_Status_Date,
	  $Registration_Change_Date,
	  $CAlculated_Campus_Code,
	  $Calculated_Campus_Description,
	  $Campus_Of_Record,
	  $Campus_Of_Record_Description,
	  $Hours_Registerd,
	  $Initial_Registration_Date,
	  $Time_Status_Code,
	  $Time_Status_Date,
	  $Maximum_Hours_Allowed,
	  $College_1_Description,
	  $Program_1,
	  $Level_1_Code,
	  $Level_1_Description,
	  $Class_1_Code,
	  $Class_1_description,
	  $Degree_1_Code,
	  $Degree_1_Description,
	  $Curriculum1_1,
	  $Curriculum1_1_Description,
	  $Curriculum1_2,
	  $Curriculum1_2_Description,
	  $Concentration_1_1,
	  $Concentration_1_1_Descripton,
	  $Concentration_1_2,
	  $Concentration1_2_Description,
	  $Minor1_1,
	  $Minor1_1_Description,
	  $Minor1_2,
	  $Minor1_2_Description,
	  $College_2_Code,
	  $College_2_Description,
	  $Program_2,
	  $Level_2_Code,
	  $Level_2_Description,
	  $Class_2_Code,
	  $Class_2_Description,
	  $Degree_2_Code,
	  $Degree_2_Description,
	  $Curriculum_2_1,
	  $Curriculum_2_1_Description,
	  $Curriculum_2_2,
	  $Curriculum_2_2_Description,
	  $Concentration_2_1,
	  $Concentraction_2_1_Description,
	  $Concentration_2_2,
	  $Concentration_2_2_Description,
	  $Visa_Type_Code,
	  $Visa_Type_Description,
	  $VIsa_No,
	  $Visa_Start_Date,
	  $Visa_Expiration_Date,
	  $Citizenship_Indicator,
	  $Citizenship_Decription,
	  $Activity_1_Code,
	  $Activity_1_Description,
	  $Activity_2_Code,
	  $Activity_2_Description,
	  $Sport_1,
	  $Sport_1_Description,
	  $Sport_1_Status_Code,
	  $Sport_1_Status_Description,
	  $Sport_2,
	  $Sport_2_Description,
	  $Sport_2_Status_Code,
	  $Sport_2_Status_Description,
	  $Sport_3,
	  $Sport_3_Description,
	  $Sport_3_Status_Code,
	  $Sport_3_Status_Description,
	  $Attribute_1_Code,
	  $Attribute_1_Description,
	  $Attribute_1_Effective_Term,
	  $Attribute_2_Code,
	  $Attribute_2_Description,
	  $Attribute_2_Effective_Term,
	  $Attribute_3_Code,
	  $Attribute_3_Description,
	  $Attribute_3_Effective_Term,
	  $Attribute_4_Code,
	  $Attribute_4_Description,
	  $Attribute_4_Effective_Term,
	  $Attribute_5_Code,
	  $Attribute_5_Description,
	  $Attribute_5_Effective_Term,
	  $Cohort_1_Code,
	  $Cohort_1_Description,
	  $Cohort_1_Effective_Term,
	  $Cohort_2_Code,
	  $Cohort_2_Desription,
	  $Cohort_2_Effective_Term,
	  $Cohort_3_Code,
	  $Cohort_3_description,
	  $Cohort_3_Effective_Term,
	  $Cohort_4_Code,
	  $Cohort_4_Description,
	  $Cohort_4_Effective_Term,
	  $Cohort_5_Code,
	  $Cohort_5_Description,
	  $Cohort_5_Effective_Term,
	  $Cohort_6_Code,
	  $Cohot_6_Description,
	  $Cohort_6_Effective_Term,
	  $Cohort_7_Code,
	  $Cohort_7_Description,
	  $Cohort_7_Effective_Term,
	  $Cohort_8_Code,
	  $Cohort_8_Description,
	  $Cohort_8_Effective_Term,
	  $Cohort_9_Code,
	  $Cohort_9_Description,
	  $Cohort_Effective_Term,
	  $Cohort_10_Code,
	  $Cohort_10_Descroption,
	  $Cohort_10_Effective_Term,
	  $Student_Id){
		
		
		
				
				 $sqlUpdate = "UPDATE Student SET Term_Code= ?, Name_Last= ?, Name_First= ?, Tu_Id= ?, Name_Full= ?, Name_Prefix= ?, Name_Suffix= ?, College= ?, Student_Type_Code= ?, Student_Status_Code= ?, Education_Goal_Code= ?, Education_Goal_Description= ?, Expected_Graduation_Date= ?, First_Semister_Attened= ?, Last_Semister_Attened= ?, Admissions_Term= ?, Catalog_Term= ?, Last_Term_Avalible= ?, Hold_Indicator= ?, Registration_Status_Code= ?, Registration_Status_Description= ?, Recidency_Code= ?, Recidency_Description= ?, Co_Op_Code1= ?, Co_Op_Code2= ?, Co_Op_Code3= ?, Email_Type_Code= ?, Email_Type_Address= ?, Confidentiality_Indicator= ?, Deceased_Indicator= ?, Birth_Date= ?, Gender= ?, Hispanic_Indicator= ?, Reported_Race= ?, Race= ?, International_Reported_race= ?, Employee_Indicator= ?, Veteran_Indicator= ?, Marital_Status_Code= ?, Religion_Code= ?, Financial_Aid_Year= ?, Financial_Aid_Application_Recieved_Date= ?, Bill_Date= ?, Bill_Due_Date= ?, Payment_Status= ?, Payment_Status_Date= ?, Term_Balace= ?, Total_Account_Balance= ?, Address_Type_Code= ?, Address_Type_Description= ?, Address_Street_Line1= ?, Address_Street_Line2= ?, Address_City= ?, Address_State_Code= ?, Address_Zip= ?, Address_County_Code= ?, Address_County_Description= ?, Address_nation_Code= ?, Address_Nation_Description= ?, Phone_Number= ?, Phone_Extension= ?, Associated_Campus_Ambler_Indicator= ?, Associated_Campus_Center_City_Indicator= ?, Associated_Campus_Fort_Washington_Indicator= ?, Associated_Campus_Harrisburg_Indicator= ?, Associated_Campus_HSC_Indicator= ?, Associated_Campus_Main_Indicator= ?, Associated_Campus_Online_Indicator= ?, Hours_Attempted_UG= ?, Hours_Passed_UG= ?, GPA_Hours_UG= ?, Grade_Points_UG= ?, GPA_UG= ?, Overall_passed_UG= ?, Transfer_Hours_UG= ?, Cumulative_Credits_UG= ?, Cumulative_Quality_Points_UG= ?, Graduate_Level_Code= ?, Hours_Attempted_G= ?, Hours_Passed_G= ?, GPA_Hours_G= ?, Grade_Points_G= ?, GPA_G= ?, Overrall_Hours_Passed_G= ?, Transfer_Hours_G= ?, Cumulative_Credits_G= ?, Cumulative_Quality_Points_G= ?, Profrssional_Level_Code= ?, Hours_Attempted_P= ?, Hours_Passed_P= ?, GPA_Hours= ?, Grade_Points_P= ?, GPA_P= ?, Overall_Hours_Passed_P= ?, Transfer_Hours_P= ?, Cumulative_Credits_P= ?, cumulative_Quality_Points= ?, Continuing_Education_Level_Code= ?, Hours_Attempted_CE= ?, Hours_Passed_CE= ?, GPA_Hours_CE= ?, Grades_Points_CE= ?, GPA_CE= ?, Overall_Hours_Passed_CE= ?, Transfer_Hours_Passed= ?, Cumulative_Credits_CE= ?, Cumulative_Qulity_Points_CE= ?, REgistration_Status_Date= ?, Registration_Change_Date= ?, CAlculated_Campus_Code= ?, Calculated_Campus_Description= ?, Campus_Of_Record= ?, Campus_Of_Record_Description= ?, Hours_Registerd= ?, Initial_Registration_Date= ?, Time_Status_Code= ?, Time_Status_Date= ?, Maximum_Hours_Allowed= ?, College_1_Description= ?, Program_1= ?, Level_1_Code= ?, Level_1_Description= ?, Class_1_Code= ?, Class_1_description= ?, Degree_1_Code= ?, Degree_1_Description= ?, Curriculum1_1= ?, Curriculum1_1_Description= ?, Curriculum1_2= ?, Curriculum1_2_Description= ?, Concentration_1_1= ?, Concentration_1_1_Descripton= ?, Concentration_1_2= ?, Concentration1_2_Description= ?, Minor1_1= ?, Minor1_1_Description= ?, Minor1_2= ?, Minor1_2_Description= ?, College_2_Code= ?, College_2_Description= ?, Program_2= ?, Level_2_Code= ?, Level_2_Description= ?, Class_2_Code= ?, Class_2_Description= ?, Degree_2_Code= ?, Degree_2_Description= ?, Curriculum_2_1= ?, Curriculum_2_1_Description= ?, Curriculum_2_2= ?, Curriculum_2_2_Description= ?, Concentration_2_1= ?, Concentraction_2_1_Description= ?, Concentration_2_2= ?, Concentration_2_2_Description= ?, Visa_Type_Code= ?, Visa_Type_Description= ?, VIsa_No= ?, Visa_Start_Date= ?, Visa_Expiration_Date= ?, Citizenship_Indicator= ?, Citizenship_Decription= ?, Activity_1_Code= ?, Activity_1_Description= ?, Activity_2_Code= ?, Activity_2_Description= ?, Sport_1= ?, Sport_1_Description= ?, Sport_1_Status_Code= ?, Sport_1_Status_Description= ?, Sport_2= ?, Sport_2_Description= ?, Sport_2_Status_Code= ?, Sport_2_Status_Description= ?, Sport_3= ?, Sport_3_Description= ?, Sport_3_Status_Code= ?, Sport_3_Status_Description= ?, Attribute_1_Code= ?, Attribute_1_Description= ?, Attribute_1_Effective_Term= ?, Attribute_2_Code= ?, Attribute_2_Description= ?, Attribute_2_Effective_Term= ?, Attribute_3_Code= ?, Attribute_3_Description= ?, Attribute_3_Effective_Term= ?, Attribute_4_Code= ?, Attribute_4_Description= ?, Attribute_4_Effective_Term= ?, Attribute_5_Code= ?, Attribute_5_Description= ?, Attribute_5_Effective_Term= ?, Cohort_1_Code= ?, Cohort_1_Description= ?, Cohort_1_Effective_Term= ?, Cohort_2_Code= ?, Cohort_2_Desription= ?, Cohort_2_Effective_Term= ?, Cohort_3_Code= ?, Cohort_3_description= ?, Cohort_3_Effective_Term= ?, Cohort_4_Code= ?, Cohort_4_Description= ?, Cohort_4_Effective_Term= ?, Cohort_5_Code= ?, Cohort_5_Description= ?, Cohort_5_Effective_Term= ?, Cohort_6_Code= ?, Cohot_6_Description= ?, Cohort_6_Effective_Term= ?, Cohort_7_Code= ?, Cohort_7_Description= ?, Cohort_7_Effective_Term= ?, Cohort_8_Code= ?, Cohort_8_Description= ?, Cohort_8_Effective_Term= ?, Cohort_9_Code= ?, Cohort_9_Description= ?, Cohort_Effective_Term= ?, Cohort_10_Code= ?, Cohort_10_Descroption= ?, Cohort_10_Effective_Term = ?  WHERE Student_Id = ?";
		
			$U = 1;
		
	
	   $query_Update = $this->_db->prepare($sqlUpdate);
	  $query_Update->bindParam($U++, $Term_Code);
	  $query_Update->bindParam($U++,$Name_Last);
	  $query_Update->bindParam($U++,$Name_First);
	  $query_Update->bindParam($U++,$Tu_Id);
	  $query_Update->bindParam($U++, $Name_Full);
	  $query_Update->bindParam($U++,$Name_Prefix);
	  $query_Update->bindParam($U++,$Name_Suffix);
	  $query_Update->bindParam($U++,$College);
	  $query_Update->bindParam($U++,$Student_Type_Code);
	  $query_Update->bindParam($U++,$Student_Status_Code);
	  $query_Update->bindParam($U++,$Education_Goal_Code);
	  $query_Update->bindParam($U++,$Education_Goal_Description);
	  $query_Update->bindParam($U++,$Expected_Graduation_Date);
	  $query_Update->bindParam($U++,$First_Semister_Attened);
	  $query_Update->bindParam($U++,$Last_Semister_Attened);
	  $query_Update->bindParam($U++,$Admissions_Term);
	  $query_Update->bindParam($U++, $Catalog_Term);
	  $query_Update->bindParam($U++, $Last_Term_Avalible);
	  $query_Update->bindParam($U++, $Hold_Indicator);
	  $query_Update->bindParam($U++, $Registration_Status_Code);
	  $query_Update->bindParam($U++, $Registration_Status_Description);
	  $query_Update->bindParam($U++,$Recidency_Code);
	  $query_Update->bindParam($U++,$Recidency_Description);
	  $query_Update->bindParam($U++,$Co_Op_Code1);
	  $query_Update->bindParam($U++,$Co_Op_Code2);
	  $query_Update->bindParam($U++,$Co_Op_Code3);
	  $query_Update->bindParam($U++,$Email_Type_Code);
	  $query_Update->bindParam($U++, $Email_Type_Address);
	  $query_Update->bindParam($U++, $Confidentiality_Indicator);
	  $query_Update->bindParam($U++, $Deceased_Indicator);
	  $query_Update->bindParam($U++,$Birth_Date);
	  $query_Update->bindParam($U++, $Gender);
	  $query_Update->bindParam($U++, $Hispanic_Indicator);
	  $query_Update->bindParam($U++, $Reported_Race);
	  $query_Update->bindParam($U++, $Race);
	  $query_Update->bindParam($U++, $International_Reported_race);
	  $query_Update->bindParam($U++, $Employee_Indicator);
	  $query_Update->bindParam($U++, $Veteran_Indicator);
	  $query_Update->bindParam($U++, $Marital_Status_Code);
	  $query_Update->bindParam($U++, $Religion_Code);
	  $query_Update->bindParam($U++, $Financial_Aid_Year);
	  $query_Update->bindParam($U++, $Financial_Aid_Application_Recieved_Date);
	  $query_Update->bindParam($U++, $Bill_Date);
	  $query_Update->bindParam($U++, $Bill_Due_Date);
	  $query_Update->bindParam($U++, $Payment_Status);
	  $query_Update->bindParam($U++, $Payment_Status_Date);
	  $query_Update->bindParam($U++, $Term_Balace);
	  $query_Update->bindParam($U++, $Total_Account_Balance);
	  $query_Update->bindParam($U++, $Address_Type_Code);
	  $query_Update->bindParam($U++, $Address_Type_Description);
	  $query_Update->bindParam($U++, $Address_Street_Line1);
	  $query_Update->bindParam($U++, $Address_Street_Line2);
	  $query_Update->bindParam($U++, $Address_City);
	  $query_Update->bindParam($U++, $Address_State_Code);
	  $query_Update->bindParam($U++, $Address_Zip);
	  $query_Update->bindParam($U++, $Address_County_Code);
	  $query_Update->bindParam($U++, $Address_County_Description);
	  $query_Update->bindParam($U++, $Address_nation_Code);
	  $query_Update->bindParam($U++, $Address_Nation_Description);
	  $query_Update->bindParam($U++, $Phone_Number);
	  $query_Update->bindParam($U++, $Phone_Extension);
	  $query_Update->bindParam($U++, $Associated_Campus_Ambler_Indicator);
	  $query_Update->bindParam($U++, $Associated_Campus_Center_City_Indicator);
	  $query_Update->bindParam($U++, $Associated_Campus_Fort_Washington_Indicator);
	  $query_Update->bindParam($U++, $Associated_Campus_Harrisburg_Indicator);
	  $query_Update->bindParam($U++, $Associated_Campus_HSC_Indicator);
	  $query_Update->bindParam($U++, $Associated_Campus_Main_Indicator);
	  $query_Update->bindParam($U++, $Associated_Campus_Online_Indicator);
	  $query_Update->bindParam($U++, $Hours_Attempted_UG);
	  $query_Update->bindParam($U++, $Hours_Passed_UG);
	  $query_Update->bindParam($U++, $GPA_Hours_UG);
	  $query_Update->bindParam($U++, $Grade_Points_UG);
	  $query_Update->bindParam($U++, $GPA_UG);
	  $query_Update->bindParam($U++, $Overall_passed_UG);
	  $query_Update->bindParam($U++, $Transfer_Hours_UG);
	  $query_Update->bindParam($U++, $Cumulative_Credits_UG);
	  $query_Update->bindParam($U++,$Cumulative_Quality_Points_UG);
	  $query_Update->bindParam($U++, $Graduate_Level_Code);
	  $query_Update->bindParam($U++, $Hours_Attempted_G);
	  $query_Update->bindParam($U++, $Hours_Passed_G);
	  $query_Update->bindParam($U++, $GPA_Hours_G);
	  $query_Update->bindParam($U++, $Grade_Points_G);
	  $query_Update->bindParam($U++, $GPA_G);
	  $query_Update->bindParam($U++,  $Overrall_Hours_Passed_G);
	  $query_Update->bindParam($U++,  $Transfer_Hours_G);
	  $query_Update->bindParam($U++,  $Cumulative_Credits_G);
	  $query_Update->bindParam($U++,  $Cumulative_Quality_Points_G);
	  $query_Update->bindParam($U++,  $Profrssional_Level_Code);
	  $query_Update->bindParam($U++,  $Hours_Attempted_P);
	  $query_Update->bindParam($U++,  $Hours_Passed_P);
	  $query_Update->bindParam($U++,  $GPA_Hours);
	  $query_Update->bindParam($U++,  $Grade_Points_P);
	  $query_Update->bindParam($U++,  $GPA_P);
	  $query_Update->bindParam($U++, $Overall_Hours_Passed_P);
	  $query_Update->bindParam($U++, $Transfer_Hours_P);
	  $query_Update->bindParam($U++, $Cumulative_Credits_P);
	  $query_Update->bindParam($U++, $cumulative_Quality_Points);
	  $query_Update->bindParam($U++,  $Continuing_Education_Level_Code);
	  $query_Update->bindParam($U++,  $Hours_Attempted_CE);
	  $query_Update->bindParam($U++,$Hours_Passed_CE);
	  $query_Update->bindParam($U++, $GPA_Hours_CE);
	  $query_Update->bindParam($U++, $Grades_Points_CE);
	  $query_Update->bindParam($U++, $GPA_CE);
	  $query_Update->bindParam($U++, $Overall_Hours_Passed_CE);
	  $query_Update->bindParam($U++, $Transfer_Hours_Passed);
	  $query_Update->bindParam($U++, $Cumulative_Credits_CE);
	  $query_Update->bindParam($U++, $Cumulative_Qulity_Points_CE);
	  $query_Update->bindParam($U++, $REgistration_Status_Date);
	  $query_Update->bindParam($U++, $Registration_Change_Date);
	  $query_Update->bindParam($U++, $CAlculated_Campus_Code);
	  $query_Update->bindParam($U++, $Calculated_Campus_Description);
	  $query_Update->bindParam($U++, $Campus_Of_Record);
	  $query_Update->bindParam($U++, $Campus_Of_Record_Description);
	  $query_Update->bindParam($U++, $Hours_Registerd);
	  $query_Update->bindParam($U++, $Initial_Registration_Date);
	  $query_Update->bindParam($U++, $Time_Status_Code);
	  $query_Update->bindParam($U++, $Time_Status_Date);
	  $query_Update->bindParam($U++,  $Maximum_Hours_Allowed);
	  $query_Update->bindParam($U++,  $College_1_Description);
	  $query_Update->bindParam($U++, $Program_1);
	  $query_Update->bindParam($U++, $Level_1_Code);
	  $query_Update->bindParam($U++, $Level_1_Description);
	  $query_Update->bindParam($U++, $Class_1_Code);
	  $query_Update->bindParam($U++, $Class_1_description);
	  $query_Update->bindParam($U++, $Degree_1_Code);
	  $query_Update->bindParam($U++, $Degree_1_Description);
	  $query_Update->bindParam($U++, $Curriculum1_1);
	  $query_Update->bindParam($U++, $Curriculum1_1_Description);
	  $query_Update->bindParam($U++, $Curriculum1_2);
	  $query_Update->bindParam($U++, $Curriculum1_2_Description);
	  $query_Update->bindParam($U++, $Concentration_1_1);
	  $query_Update->bindParam($U++, $Concentration_1_1_Descripton);
	  $query_Update->bindParam($U++, $Concentration_1_2);
	  $query_Update->bindParam($U++, $Concentration1_2_Description);
	  $query_Update->bindParam($U++,$Minor1_1);
	  $query_Update->bindParam($U++, $Minor1_1_Description);
	  $query_Update->bindParam($U++,  $Minor1_2);
	  $query_Update->bindParam($U++, $Minor1_2_Description);
	  $query_Update->bindParam($U++, $College_2_Code);
	  $query_Update->bindParam($U++, $College_2_Description);
	  $query_Update->bindParam($U++,  $Program_2);
	  $query_Update->bindParam($U++,  $Level_2_Code);
	  $query_Update->bindParam($U++,  $Level_2_Description);
	  $query_Update->bindParam($U++,  $Class_2_Code);
	  $query_Update->bindParam($U++,  $Class_2_Description);
	  $query_Update->bindParam($U++, $Degree_2_Code);
	  $query_Update->bindParam($U++, $Degree_2_Description);
	  $query_Update->bindParam($U++, $Curriculum_2_1);
	  $query_Update->bindParam($U++, $Curriculum_2_1_Description);
	  $query_Update->bindParam($U++, $Curriculum_2_2);
	  $query_Update->bindParam($U++, $Curriculum_2_2_Description);
	  $query_Update->bindParam($U++, $Concentration_2_1);
	  $query_Update->bindParam($U++, $Concentraction_2_1_Description);
	  $query_Update->bindParam($U++, $Concentration_2_2);
	  $query_Update->bindParam($U++, $Concentration_2_2_Description);
	  $query_Update->bindParam($U++, $Visa_Type_Code);
	  $query_Update->bindParam($U++, $Visa_Type_Description);
	  $query_Update->bindParam($U++, $VIsa_No);
	  $query_Update->bindParam($U++, $Visa_Start_Date);
	  $query_Update->bindParam($U++, $Visa_Expiration_Date);
	  $query_Update->bindParam($U++, $Citizenship_Indicator);
	  $query_Update->bindParam($U++, $Citizenship_Decription);
	  $query_Update->bindParam($U++,$Activity_1_Code);
	  $query_Update->bindParam($U++, $Activity_1_Description);
	  $query_Update->bindParam($U++, $Activity_2_Code);
	  $query_Update->bindParam($U++, $Activity_2_Description);
	  $query_Update->bindParam($U++, $Sport_1);
	  $query_Update->bindParam($U++, $Sport_1_Description);
	  $query_Update->bindParam($U++, $Sport_1_Status_Code);
	  $query_Update->bindParam($U++, $Sport_1_Status_Description);
	  $query_Update->bindParam($U++, $Sport_2);
	  $query_Update->bindParam($U++, $Sport_2_Description);
	  $query_Update->bindParam($U++, $Sport_2_Status_Code);
	  $query_Update->bindParam($U++, $Sport_2_Status_Description);
	  $query_Update->bindParam($U++, $Sport_3);
	  $query_Update->bindParam($U++, $Sport_3_Description);
	  $query_Update->bindParam($U++, $Sport_3_Status_Code);
	  $query_Update->bindParam($U++, $Sport_3_Status_Description);
	  $query_Update->bindParam($U++, $Attribute_1_Code);
	  $query_Update->bindParam($U++, $Attribute_1_Description);
	  $query_Update->bindParam($U++, $Attribute_1_Effective_Term);
	  $query_Update->bindParam($U++, $Attribute_2_Code);
	  $query_Update->bindParam($U++, $Attribute_2_Description);
	  $query_Update->bindParam($U++, $Attribute_2_Effective_Term);
	  $query_Update->bindParam($U++, $Attribute_3_Code);
	  $query_Update->bindParam($U++, $Attribute_3_Description);
	  $query_Update->bindParam($U++, $Attribute_3_Effective_Term);
	  $query_Update->bindParam($U++, $Attribute_4_Code);
	  $query_Update->bindParam($U++, $Attribute_4_Description);
	  $query_Update->bindParam($U++, $Attribute_4_Effective_Term);
	  $query_Update->bindParam($U++,$Attribute_5_Code);
	  $query_Update->bindParam($U++,$Attribute_5_Description);
	  $query_Update->bindParam($U++, $Attribute_5_Effective_Term);
	  $query_Update->bindParam($U++,$Cohort_1_Code);
	  $query_Update->bindParam($U++,$Cohort_1_Description);
	  $query_Update->bindParam($U++, $Cohort_1_Effective_Term);
	  $query_Update->bindParam($U++,$Cohort_2_Code);
	  $query_Update->bindParam($U++, $Cohort_2_Desription);
	  $query_Update->bindParam($U++, $Cohort_2_Effective_Term);
	  $query_Update->bindParam($U++,$Cohort_3_Code);
	  $query_Update->bindParam($U++,$Cohort_3_description);
	  $query_Update->bindParam($U++, $Cohort_3_Effective_Term);
	  $query_Update->bindParam($U++, $Cohort_4_Code);
	  $query_Update->bindParam($U++,$Cohort_4_Description);
	  $query_Update->bindParam($U++,$Cohort_4_Effective_Term);
	  $query_Update->bindParam($U++,$Cohort_5_Code);
	  $query_Update->bindParam($U++,$Cohort_5_Description);
	  $query_Update->bindParam($U++,$Cohort_5_Effective_Term);
	  $query_Update->bindParam($U++,$Cohort_6_Code);
	  $query_Update->bindParam($U++,$Cohot_6_Description);
	  $query_Update->bindParam($U++,$Cohort_6_Effective_Term);
	  $query_Update->bindParam($U++,$Cohort_7_Code);
	  $query_Update->bindParam($U++,$Cohort_7_Description);
	  $query_Update->bindParam($U++,$Cohort_7_Effective_Term);
	  $query_Update->bindParam($U++,$Cohort_8_Code);
	  $query_Update->bindParam($U++,$Cohort_8_Description);
	  $query_Update->bindParam($U++,$Cohort_8_Effective_Term);
	  $query_Update->bindParam($U++,$Cohort_9_Code);
	  $query_Update->bindParam($U++,$Cohort_9_Description);
	  $query_Update->bindParam($U++,$Cohort_Effective_Term);
	  $query_Update->bindParam($U++,$Cohort_10_Code);
	  $query_Update->bindParam($U++,$Cohort_10_Descroption);
	  $query_Update->bindParam($U++,$Cohort_10_Effective_Term);
      $query_Update->bindParam($U++,$Student_Id);
	  
	  
	  $query_Update->execute();
				
			$U = 0;	
		
		}
		
		
		

		
		
		public function checkUser($Email_Type_Address){
		
			$query_checkEmail = $this->_db->prepare("SELECT * FROM Student WHERE Email_Type_Address = ?");
			$query_checkEmail->bindParam(1,$Email_Type_Address);
			$query_checkEmail->execute();
			
			if($query_checkEmail->rowCount() == 1){
				//echo 1;
				return 1;
			}else{
				//echo 0;
				return 0;
			}
			
		} // End checkUser
		
	
	
	
		public function get_Student_Info_by_Email($Email_Type_Address)
			{
				
				$query_getUser = $this->_db->prepare("SELECT * FROM Student WHERE Email_Type_Address = ?");
				$query_getUser->bindParam(1, $Email_Type_Address);
				$query_getUser->execute();
				  
				  if($query_getUser->rowCount() != 0){
					
						$result_Students = $query_getUser->fetch(PDO::FETCH_ASSOC);
					
						$this->Student_Id						=	$result_Students['Student_Id']; 
						$this->Name_Last						=	$result_Students['Name_Last']; 
						$this->Name_First						=	$result_Students['Name_First']; 
						$this->Tu_Id							=	$result_Students['Tu_Id']; 
						$this->Expected_Graduation_Date 		=	$result_Students['Expected_Graduation_Date']; 
						$this->Email_Type_Address				=	$result_Students['Email_Type_Address']; 
						$this->Gender							=	$result_Students['Gender']; 
						$this->Address_Street_Line1				=	$result_Students['Address_Street_Line1']; 
						$this->Address_City						=	$result_Students['Address_City']; 
						$this->Address_Zip						=	$result_Students['Address_Zip']; 
						$this->Phone_Number						=	$result_Students['Phone_Number']; 
						$this->Hours_Attempted_UG				=	$result_Students['Hours_Attempted_UG']; 
						$this->GPA_Hours_UG						=	$result_Students['GPA_Hours_UG']; 
						$this->Grade_Points_UG					=	$result_Students['Grade_Points_UG']; 
						$this->GPA_UG							=	$result_Students['GPA_UG']; 
						$this->Overall_passed_UG				=	$result_Students['Overall_passed_UG']; 
						$this->Transfer_Hours_UG				=	$result_Students['Transfer_Hours_UG']; 
						$this->Cumulative_Credits_UG			=	$result_Students['Cumulative_Credits_UG']; 
						$this->Cumulative_Quality_Points_UG		=	$result_Students['Cumulative_Quality_Points_UG']; 
						$this->Hours_Attempted_G				=	$result_Students['Hours_Attempted_G']; 
						$this->Hours_Passed_G					=	$result_Students['Hours_Passed_G']; 
						$this->GPA_Hours_G						=	$result_Students['GPA_Hours_G']; 
						$this->Grade_Points_G					=	$result_Students['Grade_Points_G']; 
						$this->GPA_G							=	$result_Students['GPA_G']; 
						$this->Overral_Hours_Passed_G			=	$result_Students['Overral_Hours_Passed_G']; 
						$this->Transfer_Hours_G					=	$result_Students['Transfer_Hours_G']; 
						$this->Cumulative_Credits_G				=	$result_Students['Cumulative_Credits_G']; 
						$this->Cumulative_Quality_Points_G		=	$result_Students['Cumulative_Quality_Points_G']; 
						$this->REgistration_Status_Date			=	$result_Students['REgistration_Status_Date']; 
						$this->Hours_Registerd					=	$result_Students['Hours_Registerd']; 
						$this->College_1_Description			=	$result_Students['College_1_Description']; 
						$this->Program_1						=	$result_Students['Program_1']; 
		
				  }else{
					  
					  return 0;
					  }
				
			
				
			}  // end function get_User_Info_by_Email($Email);







	
	
	
		public function get_Student_Id_Email($Email_Type_Address)
			{
				
				$query_getUser = $this->_db->prepare("SELECT * FROM Student WHERE Email_Type_Address = ?");
				$query_getUser->bindParam(1, $Email_Type_Address);
				$query_getUser->execute();
				  
				  if($query_getUser->rowCount() != 0){
					
						$result_Students = $query_getUser->fetch(PDO::FETCH_ASSOC);
						return $this->Student_Id = $result_Students['Student_Id']; 
				 }else{
					 
					  return 0;
					  }
				
			
				
			}  // end function get_User_Info_by_Email($Email);





	
		
	public function sendEmail($Email,$Student_Id,$User_Type){
			
	
		$results = array();  //This will hold the info to display later with Json
		$Url_Link = "http://web-huertas.com/work/programs/Wizard_Juan/RequestPassword.php?Email_Request=".$Email."&StudentId=".$Student_Id."&User_Type=".$User_Type;
	
			try{
				 
							 $to = $Email;
							 $subject = "Wizard Password Request";
							 $headersEmail = 'From: Wizard@temple.edu';
							 $body = wordwrap("Please click on the following link to create a password:
											   $Url_Link");
												
							if( mail($to, $subject, $body, $headersEmail)){
								return 1;
							}else{
								return 0;
								}
							
			
				
			
				
			}catch(PDOExecption $e) { 
			
					return 0;
			} 	
				
			
		
			
		} // End function
		
		

	
	
	
	
	
} // End of my Users Class



//$Student = new Students();
//$Student->get_Student_Id_Email('tue89164@temple.edu');
// echo $Student->Email_Type_Address;
