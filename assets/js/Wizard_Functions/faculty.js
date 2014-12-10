// JavaScript Document

var NumRows;

var number_rows;

var FacultyID;
var FacultyFirstName;
var FacultyMiddleName;
var FacultyLastName;
var FacultyStatus;
var FacultyUpdate;
var FacultyRank;
var FacultyCategory;
var FacultyNotes;
var FacultyEmail1;
var FacultyEmail2;
var FacultyEmail3;
var FacultyJobTitle;
var FacultyPriority;

$document.ready(function(e){
	displayTempleFaculty();
	
	
}// End document ready

var displayTempleFaculty = function(){
	var dataString = 'DisplayFaculty=true';
	
	$.ajax({
		type: "POST",
		url: "assets/php/functionFaculty.php",
		data: dataString,
		success: function(data){
		
			if(data.Status == 'success'){
				FacultyID = data.FacultyID;
				FacultyFirstName = data.FacultyFirstName;
				FacultyMiddleName = data.FacultyMiddleName;
				FacultyLastName = data.FacultyLastName;
				FacultyStatus = data.FacultyStatus;
				FacultyUpdate = data.FacultyUpdate;
				FacultyRank = data.FacultyRank;
				FacultyCategory = data.FacultyCategory;
				FacultyNotes = data.FacultyNotes;
				FacultyEmail1 = data.FacultyEmail1;
				FacultyEmail2 = data.FacultyEmail2;
				FacultyEmail3 = data.FacultyEmail3;
				FacultyJobTitle = data.FacultyJobTitle;
				FacultyPriority = data.FacultyPriority;
				
				$('#facultyTable').html("");
				for (var i in FacultyID){
					$('#facultyTable').append{
						'<tr>'+
							'<td>' + FacultyFirstName[i] + ' ' + FacultyLastName[i] + '</td>' +
							'<td>' + FacultyStatus[i] + '</td>' +
							'<td>' + FacultyUpdate[i] + '</td>' +
							'<td>' + FacultyRank[i] + '</td>' +
							'<td>' + FacultyCategory[i] + '</td>' +
							'<td>' + FacultyNotes[i] + '</td>' +
							'<td>' + FacultyEmail1[i] + '</td>' +
							'<td>' + FacultyEmail2[i] + '</td>' +
							'<td>' + FacultyEmail3[i] + '</td>' +
							'<td>' + FacultyJobTitle[i] + '</td>' +
							'<td>' + FacultyPriority[i] + '</td>' +
						'</tr>'
					}
				}// end of loop
			}
		}
	});
}// End function display faculty