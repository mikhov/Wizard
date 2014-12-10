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
								


$(document).ready(function(e) {

		displayTempleStudents();
		
		
		
/////////////////////////////////////////////////////////////////////////////////////////////////////////  
//////////////////// This function filer the information that I implement on tables /////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////  
		
	(function ($) {
		  $('#nameFilter').keyup(function () {
            var rex = new RegExp($(this).val(), 'i');
            $('.searchable tr').hide();
            $('.searchable tr').filter(function () {
                return rex.test($(this).text());
            }).show();

        })

		}(jQuery));
  });






	
var displayTempleStudents = function(){

		displayLoginModal();
		var dataString = 'DisplayStudents=true';
				
			//alert(dataString);
					
					$.ajax({
						  type: "POST",
						  url: "assets/php/functionForm.php",
						  data: dataString,
						  dataType:"Json",
						  success: function(data) {
								//////// HIDE MODAL LOADING WINDOWS 
								hideLoginModal ();
							
							if(data.Status == 'success'){
						
								Student_Id 					= data.Student_Id;
								Name_First 					= data.Name_First;
								Name_Last 						= data.Name_Last;
								Tu_Id 							= data.Tu_Id;
								Expected_Graduation_Date 		= data.Expected_Graduation_Date;
								Email_Type_Address 			= data.Email_Type_Address;
								Gender 							= data.Gender;
								Address_Street_Line1 			= data.Address_Street_Line1;
								Address_City 					= data.Address_City;
								Address_Zip 					= data.Address_Zip;
								Phone_Number 					= data.Phone_Number;
								Hours_Attempted_UG 			= data.Hours_Attempted_UG;
								GPA_Hours_UG 					= data.GPA_Hours_UG;
								Grade_Points_UG 				= data.Grade_Points_UG;
								GPA_UG 							= data.GPA_UG;
								Overall_passed_UG 				= data.Overall_passed_UG;
								Transfer_Hours_UG 				= data.Transfer_Hours_UG;
								Cumulative_Credits_UG 		= data.Cumulative_Credits_UG;
								Cumulative_Quality_Points_UG = data.Cumulative_Quality_Points_UG;
								Hours_Attempted_G 				= data.Hours_Attempted_G;
								Hours_Passed_G 				= data.Hours_Passed_G;
								GPA_Hours_G 					= data.GPA_Hours_G;
								Grade_Points_G 				= data.Grade_Points_G;
								GPA_G 							= data.GPA_G;
								Overall_passed_G 				= data.Overral_Hours_Passed_G;
								Transfer_Hours_G 				= data.Transfer_Hours_G;
								Cumulative_Credits_G 			= data.Cumulative_Credits_G;
								Cumulative_Quality_Points_G 	= data.Cumulative_Quality_Points_G;
								Registration_Status_Date 		= data.Registration_Status_Date;
								Hours_Registerd 				= data.Hours_Registerd;
								College_1_Description 		= data.College_1_Description;
								Program_1 						= data.Program_1;
								Level_1_Code 					= data.Level_1_Code;
								Degree_1_Code 					= data.Degree_1_Code;
								Curriculum1_1 					= data.Curriculum1_1;
								College_1_Description			= data.College_1_Description;
								var GPA = 0;	
								var Hours_Attempted = 0;
								var GPA_Hours = 0;
								var Grade_Points = 0;
								var Overall_passed = 0;
								var Transfer_Hours = 0;
								var Cumulative_Quality_Points = 0;
								
								
							
							
					
								
						$('#StudentTable').html("");
						
							  for (var i in Student_Id) {
								  	
					if(GPA_G[i] != 0){GPA = GPA_G[i];}else{GPA = GPA_UG[i];}
					if(Hours_Attempted_G[i] != 0){Hours_Attempted = Hours_Attempted_G[i];}else{Hours_Attempted = Hours_Attempted_UG[i];}
					if(GPA_Hours_G[i] != 0){GPA_Hours = GPA_Hours_G[i];}else{GPA_Hours = GPA_Hours_UG[i];}				
					if(Grade_Points_G[i] != 0){Grade_Points = Grade_Points_G[i];}else{Grade_Points = Grade_Points_UG[i];}	
					if(Overall_passed_G[i] != 0){Overall_passed = Overall_passed_G[i];}else{Overall_passed = Overall_passed_UG[i];}
					if(Transfer_Hours_G[i] != 0){Transfer_Hours = Transfer_Hours_G[i];}else{Transfer_Hours = Transfer_Hours_UG[i];}		
					if(Cumulative_Quality_Points_G[i] != 0){Cumulative_Quality_Points = Cumulative_Quality_Points_G[i];}else{Cumulative_Quality_Points = Cumulative_Quality_Points_UG[i];}	
						
									
									
							
							 $('#StudentTable').append(
								 
								 
								 				'<tr>'+
                                                '<td class="blockName">'+Name_First[i]+' '+Name_Last[i]+'</td>'+
												 	 '<td class="blockCollege">'+College_1_Description[i]+'</td>'+
													 '<td class="AcademicColumn">'+Level_1_Code[i]+'</td>'+
													 '<td class="AcademicColumn">'+Degree_1_Code[i]+'</td>'+
													 '<td class="AcademicColumn">'+Curriculum1_1[i]+'</td>'+
													 '<td class="blockGPA">'+GPA+'</td>'+
                                                '<td class="blockEmail">'+ Email_Type_Address[i]+'</td>'+
                                                '<td class="tuidBlook"> '+Tu_Id[i]+'</td>'+
                                                '<td class="Action_Blook">'+
												
                                                	'<button class="btn btn-white btn-xs btnSeparation" data-toggle="modal" data-target="#attachFormModal" onclick="modalAttachForm('+Student_Id[i]+',\''+Name_First[i]+'\',\''+Name_Last[i]+'\');" >'+
                                                    	'<i class="fa fa-file-pdf-o"></i>'+
                                                	'</button>'+
                                                	'<button class="btn btn-danger btn-xs btnSeparation" data-toggle="modal" data-target="#editMemberModal" onclick="modalStudentInfo(\''+Name_First[i]+'\',\''+Name_Last[i]+'\',\''+Gender[i]+'\','+Tu_Id[i]+',\''+Address_City[i]+'\',\''+Address_Street_Line1[i]+'\',\''+Address_Zip[i]+'\',\''+Email_Type_Address[i]+'\',\''+Phone_Number[i]+'\',\''+Expected_Graduation_Date[i]+'\',\''+College_1_Description[i]+'\',\''+Program_1[i]+'\',\''+Level_1_Code[i]+'\',\''+Degree_1_Code[i]+'\',\''+Curriculum1_1[i]+'\','+Hours_Attempted+','+GPA_Hours+','+Grade_Points+','+GPA+','+Overall_passed+','+Transfer_Hours+','+Cumulative_Quality_Points+');">'+
													
                                            			'<i class="fa fa-eye"></i>'+
                                            		'</button>'+
                                                '</td>'+
                                            '</tr>'
								 
							
							
							
							
							
							
								   );
							 } // End for loop
	
					  }else{
						 	//////// HIDE MODAL LOADING WINDOWS 
								hideLoginModal ();
						  
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
	
	
//// THIS FUNCTION IS TO OPEN MODAL WINDOWS WITH THE STUDENTS INFO ////// 


var modalStudentInfo = function(Name_First,Name_Last,Gender,Tu_Id,Address_City,Address_Street_Line1,Address_Zip,Email,Phone,Expected_Graduation_Date,College_1_Description,Program_1,Level_1_Code,Degree_1_Code,Curriculum1_1,Hours_Attempted,GPA_Hours,Grade_Points,GPA,Overall_passed,Transfer_Hours,Cumulative_Quality_Points){
	
	
	
	
		//// Clear field modal box

		$('#NameStudentInfo').html("");
		$('#GenderStudentInfo').html("");
		$('#Address_Street_StudentInfo').html("");
		$('#CityStudioInfo').html("");
		$('#ZipStudioInfo').html("");
		$('#EmailStudentInfo').html("");
		$('#phoneStudentInfo').html("");
		$('#TuIdStudentInfo').html("");
		$('#ExpectStudentInfo').html("");
		$('#collegeStudentInfo').html("");
		$('#programStudentInfo').html("");
		$('#levelStudentInfo').html("");
		$('#degreeStudentInfo').html("");
		$('#curriculumStudionInfo').html("");
		$('#hoursAttStudionInfo').html("");
		$('#GPAHoursStudentInfo').html("");
		$('#gradePointStudentInfo').html("");
		$('#GPAStudentInfo').html("");	
		$('#OveralPassedStudentInfo').html("");		
		$('#TransferHourStudentInfo').html("");				
		$('#CumulativePointStudentInfo').html("");
		
				
				
				$('#NameStudentInfo').html(Name_First +' '+ Name_Last);
				$('#GenderStudentInfo').html(Gender);
				$('#Address_Street_StudentInfo').html(Address_Street_Line1);
				$('#CityStudioInfo').html(Address_City);
				$('#ZipStudioInfo').html(Address_Zip);
				
				$('#EmailStudentInfo').html(Email);
				$('#phoneStudentInfo').html(Phone);
				
				$('#TuIdStudentInfo').html(Tu_Id);
				$('#ExpectStudentInfo').html(Expected_Graduation_Date);
				
				$('#collegeStudentInfo').html(College_1_Description);
				$('#programStudentInfo').html(Program_1);
				
				
				$('#levelStudentInfo').html(Level_1_Code);
				$('#degreeStudentInfo').html(Degree_1_Code);
				
				$('#curriculumStudionInfo').html(Curriculum1_1);
				$('#hoursAttStudionInfo').html(Hours_Attempted);
				
				$('#GPAHoursStudentInfo').html(GPA_Hours);
				$('#gradePointStudentInfo').html(Grade_Points);
				$('#GPAStudentInfo').html(GPA);
				$('#OveralPassedStudentInfo').html(Overall_passed);
				$('#TransferHourStudentInfo').html(Transfer_Hours);
				$('#CumulativePointStudentInfo').html(Cumulative_Quality_Points);
				

} // end modalStudentInfo -->






var modalAttachForm = function(Student_Id,Name_First,Name_Last){
	$('#LabelAttachForm').html("");
	$('#LabelAttachForm').html('Student:  '+Name_First+'  '+Name_Last);
	$('#Student_Id').val();
	
} // End modalAttachForm -->





	
	
	
	
	
//////  THIS FUNCTION OPEN THE MODAL WINDOWS WHEN AJAX IS WORKING /////// 

var displayLoginModal = function(){
	$('#loading').show();
}

var hideLoginModal = function(){
	$('#loading').hide();
}












