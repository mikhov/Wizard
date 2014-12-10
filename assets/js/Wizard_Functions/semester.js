var Student_Id;

$('input#name-submit').on('click', function () {
    var name = $('input#name').val();
    //alert(name);
    if ($.trim(name) != '') {
        //alert(1);
        $.post('assets/php/functionSemester.php', {name: name}, function (data) {
            //alert(data);
            $('div#name-data').text(data);
        });
    }
});

function handleSelect() {
    var semester = $('select#semesterList').val();
    alert(semester);
    $.post("assets/php/functionSemester.php", {semesters: semester}, function (data) {
		//alert(data[0]);
        //$('div#student-data').html(data);
		Student_Id 			= data.Student_Id;
		Name_Last 				= data.Name_Last;
		Name_First 			= data.Name_First;
		Tu_Id 					= data.Tu_Id;
		Email_Type_Address 	= data.Email_Type_Address;
		Gender 					= data.Gender;
		
	
		
		
		
/*
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
		
		
		
		
		*/
		
		$('div#student-data').html("");
		
		
		for(var i in Student_Id){
			/*
			$('#student-data').append(
				'<tr>' +
					'<td>' + Student_Id[i] + '</td>' +
				'</tr>'
			)
			*/
		} // end of loop
		
		
    });
	
	
}// end of handle select