<?php

require_once(dirname(__FILE__)).'/../core/init.php';


class ExportExcel{



	



    private $Students;
	
	public
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
	
	
		public function __construct()
		{
			$this->Students = new Connection();
			$this->Students = $this->Students->ConnectDB();
	
		}
		




	public function UpdateDatabase(){
		$inputFile = "db/files/Student/Student.csv";
		$row = 0;
		if (($handle = fopen($inputFile, "r")) !== FALSE) {
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				
				$num = count($data);
		
		
				
				if($row > 0){
					for ($c=0; $c < $num; $c++) {
						  $s= 0;
						  $Term_Code = $data[$s++];
						  $Name_Last = $data[$s++];
						  $Name_First = $data[$s++];
						  $Tu_Id = $data[$s++];
						  $Name_Full = $data[$s++];
						  $Name_Prefix = $data[$s++];
						  $Name_Suffix = $data[$s++];
						  $College = $data[$s++];
						  $Student_Type_Code = $data[$s++];
						  $Student_Status_Code = $data[$s++];
						  $Education_Goal_Code = $data[$s++];
						  $Education_Goal_Description = $data[$s++];
						  $Expected_Graduation_Date = $data[$s++];
						  $First_Semister_Attened = $data[$s++];
						  $Last_Semister_Attened = $data[$s++];
						  $Admissions_Term = $data[$s++];
						  $Catalog_Term = $data[$s++];
						  $Last_Term_Avalible = $data[$s++];
						  $Hold_Indicator = $data[$s++];
						  $Registration_Status_Code = $data[$s++];
						  $Registration_Status_Description = $data[$s++];
						  $Recidency_Code = $data[$s++];
						  $Recidency_Description = $data[$s++];
						  $Co_Op_Code1 = $data[$s++];
						  $Co_Op_Code2 = $data[$s++];
						  $Co_Op_Code3 = $data[$s++];
						  $Email_Type_Code = $data[$s++];
						  $Email_Type_Address = $data[$s++];
						  $Confidentiality_Indicator = $data[$s++];
						  $Deceased_Indicator = $data[$s++];
						  $Birth_Date = $data[$s++];
						  $Gender = $data[$s++];
						  $Hispanic_Indicator = $data[$s++];
						  $Reported_Race = $data[$s++];
						  $Race = $data[$s++];
						  $International_Reported_race = $data[$s++];
						  $Employee_Indicator = $data[$s++];
						  $Veteran_Indicator = $data[$s++];
						  $Marital_Status_Code = $data[$s++];
						  $Religion_Code = $data[$s++];
						  $Financial_Aid_Year = $data[$s++];
						  $Financial_Aid_Application_Recieved_Date = $data[$s++];
						  $Bill_Date = $data[$s++];
						  $Bill_Due_Date = $data[$s++];
						  $Payment_Status = $data[$s++];
						  $Payment_Status_Date = $data[$s++];
						  $Term_Balace = $data[$s++];
						  $Total_Account_Balance = $data[$s++];
						  $Address_Type_Code = $data[$s++];
						  $Address_Type_Description = $data[$s++];
						  $Address_Street_Line1 = $data[$s++];
						  $Address_Street_Line2 = $data[$s++];
						  $Address_City = $data[$s++];
						  $Address_State_Code = $data[$s++];
						  $Address_Zip = $data[$s++];
						  $Address_County_Code = $data[$s++];
						  $Address_County_Description = $data[$s++];
						  $Address_nation_Code = $data[$s++];
						  $Address_Nation_Description = $data[$s++];
						  $Phone_Number = $data[$s++];
						  $Phone_Extension = $data[$s++];
						  $Associated_Campus_Ambler_Indicator = $data[$s++];
						  $Associated_Campus_Center_City_Indicator = $data[$s++];
						  $Associated_Campus_Fort_Washington_Indicator = $data[$s++];
						  $Associated_Campus_Harrisburg_Indicator = $data[$s++];
						  $Associated_Campus_HSC_Indicator = $data[$s++];
						  $Associated_Campus_Main_Indicator = $data[$s++];
						  $Associated_Campus_Online_Indicator = $data[$s++];
						  $Hours_Attempted_UG = $data[$s++];
						  $Hours_Passed_UG = $data[$s++];
						  $GPA_Hours_UG = $data[$s++];
						  $Grade_Points_UG = $data[$s++];
						  $GPA_UG = $data[$s++];
						  $Overall_passed_UG = $data[$s++];
						  $Transfer_Hours_UG = $data[$s++];
						  $Cumulative_Credits_UG = $data[$s++];
						  $Cumulative_Quality_Points_UG = $data[$s++];
						  $Graduate_Level_Code = $data[$s++];
						  $Hours_Attempted_G = $data[$s++];
						  $Hours_Passed_G = $data[$s++];
						  $GPA_Hours_G = $data[$s++];
						  $Grade_Points_G = $data[$s++];
						  $GPA_G = $data[$s++];
						  $Overrall_Hours_Passed_G = $data[$s++];
						  $Transfer_Hours_G = $data[$s++];
						  $Cumulative_Credits_G = $data[$s++];
						  $Cumulative_Quality_Points_G = $data[$s++];
						  $Profrssional_Level_Code = $data[$s++];
						  $Hours_Attempted_P = $data[$s++];
						  $Hours_Passed_P = $data[$s++];
						  $GPA_Hours = $data[$s++];
						  $Grade_Points_P = $data[$s++];
						  $GPA_P = $data[$s++];
						  $Overall_Hours_Passed_P = $data[$s++];
						  $Transfer_Hours_P = $data[$s++];
						  $Cumulative_Credits_P = $data[$s++];
						  $cumulative_Quality_Points = $data[$s++];
						  $Continuing_Education_Level_Code = $data[$s++];
						  $Hours_Attempted_CE = $data[$s++];
						  $Hours_Passed_CE = $data[$s++];
						  $GPA_Hours_CE = $data[$s++];
						  $Grades_Points_CE = $data[$s++];
						  $GPA_CE = $data[$s++];
						  $Overall_Hours_Passed_CE = $data[$s++];
						  $Transfer_Hours_Passed = $data[$s++];
						  $Cumulative_Credits_CE = $data[$s++];
						  $Cumulative_Qulity_Points_CE = $data[$s++];
						  $REgistration_Status_Date = $data[$s++];
						  $Registration_Change_Date = $data[$s++];
						  $CAlculated_Campus_Code = $data[$s++];
						  $Calculated_Campus_Description = $data[$s++];
						  $Campus_Of_Record = $data[$s++];
						  $Campus_Of_Record_Description = $data[$s++];
						  $Hours_Registerd = $data[$s++];
						  $Initial_Registration_Date = $data[$s++];
						  $Time_Status_Code = $data[$s++];
						  $Time_Status_Date = $data[$s++];
						  $Maximum_Hours_Allowed = $data[$s++];
						  $College_1_Description = $data[$s++];
						  $Program_1 = $data[$s++];
						  $Level_1_Code = $data[$s++];
						  $Level_1_Description = $data[$s++];
						  $Class_1_Code = $data[$s++];
						  $Class_1_description = $data[$s++];
						  $Degree_1_Code = $data[$s++];
						  $Degree_1_Description = $data[$s++];
						  $Curriculum1_1 = $data[$s++];
						  $Curriculum1_1_Description = $data[$s++];
						  $Curriculum1_2 = $data[$s++];
						  $Curriculum1_2_Description = $data[$s++];
						  $Concentration_1_1 = $data[$s++];
						  $Concentration_1_1_Descripton = $data[$s++];
						  $Concentration_1_2 = $data[$s++];
						  $Concentration1_2_Description = $data[$s++];
						  $Minor1_1 = $data[$s++];
						  $Minor1_1_Description = $data[$s++];
						  $Minor1_2 = $data[$s++];
						  $Minor1_2_Description = $data[$s++];
						  $College_2_Code = $data[$s++];
						  $College_2_Description = $data[$s++];
						  $Program_2 = $data[$s++];
						  $Level_2_Code = $data[$s++];
						  $Level_2_Description = $data[$s++];
						  $Class_2_Code = $data[$s++];
						  $Class_2_Description = $data[$s++];
						  $Degree_2_Code = $data[$s++];
						  $Degree_2_Description = $data[$s++];
						  $Curriculum_2_1 = $data[$s++];
						  $Curriculum_2_1_Description = $data[$s++];
						  $Curriculum_2_2 = $data[$s++];
						  $Curriculum_2_2_Description = $data[$s++];
						  $Concentration_2_1 = $data[$s++];
						  $Concentraction_2_1_Description = $data[$s++];
						  $Concentration_2_2 = $data[$s++];
						  $Concentration_2_2_Description = $data[$s++];
						  $Visa_Type_Code = $data[$s++];
						  $Visa_Type_Description = $data[$s++];
						  $VIsa_No = $data[$s++];
						  $Visa_Start_Date = $data[$s++];
						  $Visa_Expiration_Date = $data[$s++];
						  $Citizenship_Indicator = $data[$s++];
						  $Citizenship_Decription = $data[$s++];
						  $Activity_1_Code = $data[$s++];
						  $Activity_1_Description = $data[$s++];
						  $Activity_2_Code = $data[$s++];
						  $Activity_2_Description = $data[$s++];
						  $Sport_1 = $data[$s++];
						  $Sport_1_Description = $data[$s++];
						  $Sport_1_Status_Code = $data[$s++];
						  $Sport_1_Status_Description = $data[$s++];
						  $Sport_2 = $data[$s++];
						  $Sport_2_Description = $data[$s++];
						  $Sport_2_Status_Code = $data[$s++];
						  $Sport_2_Status_Description = $data[$s++];
						  $Sport_3 = $data[$s++];
						  $Sport_3_Description = $data[$s++];
						  $Sport_3_Status_Code = $data[$s++];
						  $Sport_3_Status_Description = $data[$s++];
						  $Attribute_1_Code = $data[$s++];
						  $Attribute_1_Description = $data[$s++];
						  $Attribute_1_Effective_Term = $data[$s++];
						  $Attribute_2_Code = $data[$s++];
						  $Attribute_2_Description = $data[$s++];
						  $Attribute_2_Effective_Term = $data[$s++];
						  $Attribute_3_Code = $data[$s++];
						  $Attribute_3_Description = $data[$s++];
						  $Attribute_3_Effective_Term = $data[$s++];
						  $Attribute_4_Code = $data[$s++];
						  $Attribute_4_Description = $data[$s++];
						  $Attribute_4_Effective_Term = $data[$s++];
						  $Attribute_5_Code = $data[$s++];
						  $Attribute_5_Description = $data[$s++];
						  $Attribute_5_Effective_Term = $data[$s++];
						  $Cohort_1_Code = $data[$s++];
						  $Cohort_1_Description = $data[$s++];
						  $Cohort_1_Effective_Term = $data[$s++];
						  $Cohort_2_Code = $data[$s++];
						  $Cohort_2_Desription = $data[$s++];
						  $Cohort_2_Effective_Term = $data[$s++];
						  $Cohort_3_Code = $data[$s++];
						  $Cohort_3_description = $data[$s++];
						  $Cohort_3_Effective_Term = $data[$s++];
						  $Cohort_4_Code = $data[$s++];
						  $Cohort_4_Description = $data[$s++];
						  $Cohort_4_Effective_Term = $data[$s++];
						  $Cohort_5_Code = $data[$s++];
						  $Cohort_5_Description = $data[$s++];
						  $Cohort_5_Effective_Term = $data[$s++];
						  $Cohort_6_Code = $data[$s++];
						  $Cohot_6_Description = $data[$s++];
						  $Cohort_6_Effective_Term = $data[$s++];
						  $Cohort_7_Code = $data[$s++];
						  $Cohort_7_Description = $data[$s++];
						  $Cohort_7_Effective_Term = $data[$s++];
						  $Cohort_8_Code = $data[$s++];
						  $Cohort_8_Description = $data[$s++];
						  $Cohort_8_Effective_Term = $data[$s++];
						  $Cohort_9_Code = $data[$s++];
						  $Cohort_9_Description = $data[$s++];
						  $Cohort_Effective_Term = $data[$s++];
						  $Cohort_10_Code = $data[$s++];
						  $Cohort_10_Descroption = $data[$s++];
						  $Cohort_10_Effective_Term = $data[$s++];
						  
						  
						  
						  
						  
					}
				
					
				} // End condition row if > 0
				
				
					
						$InsertStudent = new Students();
						$result =	$InsertStudent->Insert_Students(
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
						  $Cohort_10_Effective_Term);
						
						
				 $row++;
					
				
			return $Result;
				
			}
			fclose($handle);
		}

} // End updateDatabase
}
?>
			
	
	