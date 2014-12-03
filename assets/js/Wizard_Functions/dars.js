// JavaScript Document



//GLOBAL VARIABLES

var NumRows;

/// This variable scontain the info of the users
	var number_rows;
	
	var Student_Id;	
	var Name_First;
	var	Name_Last;
	var	Tu_Id;
	var	Expected_Graduation_Date;
	var	Email_Type_Address;
	var	Gender;
	var	Address_Street_Line1;
	var Address_City;
	var	Address_Zip;
	var	Phone_Number;
	var	Hours_Attempted_UG;
	var	GPA_Hours_UG;
	var	Grade_Points_UG;
	var	GPA_UG;
	var	Overall_passed_UG;
	var	Transfer_Hours_UG;
	var	Cumulative_Credits_UG;
	var	Cumulative_Quality_Points_UG;
	var	Hours_Attempted_G;
	var	Hours_Passed_G;
	var	GPA_Hours_G;
	var	Grade_Points_G;
	var	GPA_G;
	var	Overral_Hours_Passed_G;
	var	Transfer_Hours_G;
	var	Cumulative_Credits_G;
	var	Cumulative_Quality_Points_G;
	var	REgistration_Status_Date;
	var	Hours_Registerd;
	var	College_1_Description;
	var	Program_1;
	var Student_Registration_ID;
	var SemesterID;
	var ClassID;
	var StudentGrade;
	var ClassSectionNumber;
	var CourseID;
	var CourseStartDate;
	var CourseName;
	var CourseNumber;
	var CourseDescription;
								
									
									
								
										


$(document).ready(function(e) {

	displayStudentCourse();
  });






	
var displayStudentCourse = function(){

		
		
		var Student_IdInput = $('#inputStudent_Id').val();
		var dataString = 'Student_Id='+Student_IdInput+'&DisplayStudentCourse=true';
				
			//alert(dataString);
					
					$.ajax({
						  type: "POST",
						  url: "assets/php/functionStudents.php",
						  data: dataString,
						  dataType:"Json",
						  success: function(data) {
					
							if(data[0].Status == 'success'){
						
							////// THIS VALUES ARE THE SAME FOR THAT REASON IT IS POSSIBLE START ON THE VARIABLE WITHOUT
							///// THE NECESSITY TO USE FOR LOOP. 
							
								Student_Id 					= data[0].Student_Id;
								Name_First 					= data[0].Name_First;
								Name_Last 						= data[0].Name_Last;
								Tu_Id 							= data[0].Tu_Id;
								Expected_Graduation_Date 		= data[0].Expected_Graduation_Date;
								Email_Type_Address 			= data[0].Email_Type_Address;
								Gender 							= data[0].Gender;
								Address_Street_Line1 			= data[0].Address_Street_Line1;
								Address_City 					= data[0].Address_City;
								Address_Zip 					= data[0].Address_Zip;
								Phone_Number 					= data[0].Phone_Number;
								Hours_Attempted_UG 			= data[0].Hours_Attempted_UG;
								GPA_Hours_UG 					= data[0].GPA_Hours_UG;
								Grade_Points_UG 				= data[0].Grade_Points_UG;
								GPA_UG 							= data[0].GPA_UG;
								Overall_passed_UG 				= data[0].Overall_passed_UG;
								Transfer_Hours_UG 				= data[0].Transfer_Hours_UG;
								Cumulative_Credits_UG 		= data[0].Cumulative_Credits_UG;
								Cumulative_Quality_Points_UG = data[0].Cumulative_Quality_Points_UG;
								Hours_Attempted_G 				= data[0].Hours_Attempted_G;
								Hours_Passed_G 				= data[0].Hours_Passed_G;
								GPA_Hours_G 					= data[0].GPA_Hours_G;
								Grade_Points_G 				= data[0].Grade_Points_G;
								GPA_G 							= data[0].GPA_G;
								Overall_passed_G 				= data[0].Overral_Hours_Passed_G;
								Transfer_Hours_G 				= data[0].Transfer_Hours_G;
								Cumulative_Credits_G 			= data[0].Cumulative_Credits_G;
								Cumulative_Quality_Points_G 	= data[0].Cumulative_Quality_Points_G;
								Registration_Status_Date 		= data[0].Registration_Status_Date;
								Hours_Registerd 				= data[0].Hours_Registerd;
								College_1_Description 		= data[0].College_1_Description;
								Program_1 						= data[0].Program_1;
								Level_1_Code 					= data[0].Level_1_Code;
								Degree_1_Code 					= data[0].Degree_1_Code;
								Curriculum1_1 					= data[0].Curriculum1_1;
								College_1_Description			= data[0].College_1_Description;
								
								
									//////  GET LENGHT OF THE OBJECT TO MAKE THE FOR LOOP	
									var len = lenghtObject(data);
							
								
								for(var i = 0 ; i<len; i++){
									
										////// IT IS NECESSARY TO USE THE FOR LOOP TO GET ALL VALUES. 
									
									
										Student_Registration_ID		= data[i].Student_Registration_ID;
										SemesterID						= data[i].SemesterID;
										ClassID							= data[i].ClassID;
										StudentGrade					= data[i].StudentGrade;
										ClassSectionNumber			= data[i].ClassSectionNumber;
										CourseID						= data[i].CourseID;
										CourseStartDate				= data[i].CourseStartDate;
										CourseName						= data[i].CourseName;
										CourseNumber					= data[i].CourseNumber;
										CourseDescription				= data[i].CourseDescription;
											
											alert(ClassID);
								} // End foor loop
								
									
								
					  }else{
						 	
						  
						  // Empty the box message
							$('#boxMessageModal').html("");
							  // Introduce the new message
							$('#boxMessageModal').html("Error displaying Forms, please contact with the administrator. Dr. Shi");
							  //Execute the modal box
							 $('#modalExpiration').click();
						  
						  }
						 
				  },
				  error: function (XMLHttpRequest, textStatus, errorThrown) {
					if (textStatus == 'Unauthorized') {
						 //////// HIDE MODAL LOADING WINDOWS 
								hideLoginModal ();
						alert('custom message. Error: ' + errorThrown);
					} else {
						//////// HIDE MODAL LOADING WINDOWS 
								hideLoginModal ();
						alert('custom message. Error: ' + errorThrown);
					}
				}

			});
			return false;
			  
		
		
		
	} /// End function display Forms
	
	
	
	
	
//////  THIS FUNCTION OPEN THE MODAL WINDOWS WHEN AJAX IS WORKING /////// 

var displayLoginModal = function(){
	$('#loading').show();
}

var hideLoginModal = function(){
	$('#loading').hide();
}



//////////// THIS FUNCTION IS TO TOGGLE THE MENU /////////////////////

	$('#AcademicTab').click(function(){
			$('#AcademicTabDiv').slideToggle();
		});

		$('#AcademicFormTab').click(function(){
			$('#AcademicFormTabDiv').slideToggle();
		});
		
		$('#NotesTab').click(function(){
			$('#NotesTabDiv').slideToggle();
		});
		
		$('#ExamsTab').click(function(){
			$('#ExamsTabDiv').slideToggle();
		});




////////////////////////  THIS FUNCTION IS TO GET THE LENGHT OF THE OBJECT //////



var lenghtObject = function(obj){
	
	var arr = [], len;

		for(key in obj) {
			arr.push(key);
		}
		
		len = arr.length;
return len;
	
} // End lengthObject

