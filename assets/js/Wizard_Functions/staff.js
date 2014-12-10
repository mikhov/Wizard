// JavaScript Document

var NumRows;

var number_rows;

var StaffID;
var StaffFirstName;
var StaffMiddleName;
var StaffLastName;
var StaffNotes;
var StaffEmail1;
var StaffEmail2;
var StaffEmail3;
var StaffBusinessPhone;
var StaffPriority;
var StaffCategories;


$document.ready(function(e){
	displayTempleStaff();
	
	
}// End document ready

var displayTempleStaff = function(){
	var dataString = 'DisplayStaff=true';
	
	$.ajax({
		type: "POST",
		url: "assets/php/functionStaff.php",
		data: dataString,
		success: function(data){
			if(data.Status == 'success'){
				StaffID = data.StaffID;
				StaffFirstName = data.StaffFirstName;
				StaffMiddleName = data.StaffMiddleName;
				StaffLastName = data.StaffLastName;
				StaffNotes = data.StaffNotes;
				StaffEmail1 = data.StaffEmail1;
				StaffEmail2 = data.StaffEmail2;
				StaffEmail3 = data.StaffEmail3;
				StaffBusinessPhone = data.StaffBusinessPhone;
				StaffPriority = data.StaffPriority;
				StaffCategories = data.StaffCategories;
				
				$('#staffTable').html("");
				for (var i in StaffID){
					$('#staffTable').append{
						'<tr>'+
							'<td>' + StaffFirstName[i] + ' ' + StaffLastName[i] + '</td>' +
							'<td>' + StaffNotes[i] + '</td>' +
							'<td>' + StaffEmail1[i] + '</td>' +
							'<td>' + StaffEmail2[i] + '</td>' +
							'<td>' + StaffEmail3[i] + '</td>' +
							'<td>' + StaffBusinessPhone[i] + '</td>' +
							'<td>' + StaffPriority[i] + '</td>' +
							'<td>' + StaffCategories[i] + '</td>' +
						'</tr>'
					}
				}
			}
		}
	});
}