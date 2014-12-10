// JavaScript Document

/////////////////////////////////////////////////////////////////
////////////////////  GLOBAL VARIABLES //////////////////////////
/////////////////////////////////////////////////////////////////




////////////   WHEN THE PAGE IS READY IT IS NECESSARY TO GET FORM TYPE AND DISPLAY IT ON THE PAGE /////////


$(document).ready(function(e) {
	displayToDoEvents();
});


	
var displayToDoEvents = function(){

	var EventTuId = $('#EventTuIdInput').val();
		
		//User_Info['TU_ID'] is a global variable which contain the info of each user that is connected*/
		var dataString = 'EventTuId='+EventTuId+'&displayToDoEvents=true';
				
			$.ajax({
				  type: "POST",
				  url: "assets/php/functionToDo.php",
				  data: dataString,
				  dataType:"Json",
				  success: function(data) {
					  if (data.Status == 'success'){
							hideLoginModal();
					
							/// RESET THE DOM TO NOT OVERWRITE
						
							$('#BodyToDoList').html("");
						
						
						var Todo_List_Id	 	=	 data.Todo_List_Id;
						var ToDo_Description 	=	 data.ToDo_Description;
						var ToDo_Date_Mysql	=	 data.ToDo_Date_Mysql;
						var ToDo_Date 			=	 data.ToDo_Date;
						var ToDo_Urgent 		=	 data.ToDo_Urgent;
						var Tu_Id 				=	 data.Tu_Id;
						var Urgent = 'check.png';
						
							/// INSERT ALL VALUES INTO THE DOM 
							for(var i in Todo_List_Id){
							
								if(ToDo_Urgent[i] == 0){
									Urgent = 'uncheck.png'; 
								}else{
									Urgent = 'check.png';
									}
								
								
								$('#BodyToDoList').append(
								
									 '<tr>'+
                                    	 '<td class="DescriptionCol">'+ToDo_Description[i]+'</td>'+
                                        '<td class="DateCol">'+ToDo_Date[i]+'</td>'+
                                        '<td class="UrgentCol"><img src="assets/img/'+Urgent+'" alt="icon Urgent"></td>'+
                                        '<td class="ActionCol">'+
                                        	'<a onClick="EditTaskInput('+Todo_List_Id[i]+',\''+ToDo_Description[i]+'\',\''+ToDo_Date_Mysql[i]+'\','+ToDo_Urgent[i]+','+Tu_Id[i]+')" data-toggle="modal" href="#myModalEdit"><span class="glyphicon glyphicon-edit green"></span></a> '+
											
											
                                           '<a onClick="DeleteTaskInput('+Todo_List_Id[i]+')" data-toggle="modal" href="#myModalDelete"><span class="glyphicon glyphicon-remove-circle red"></span></a>'+ 
                                        '</td>'+
                                    '</tr>'
									
								);
								
							
							} // End for loop
					
					  }else{
						 /*
						   $('#loading').hide();
						  // Empty the box message
							$('#boxMessageModal').html("");
							  // Introduce the new message
							$('#boxMessageModal').html("Error displaying Forms, please contact with the administrator. Dr. Shi");
							  //Execute the modal box
							 $('#modalExpiration').click();
						  */
						  }
						 
				  },
				  error: function (XMLHttpRequest, textStatus, errorThrown) {
					if (textStatus == 'Unauthorized') {
						 hideLoginModal();
						alert('custom message. Error: ' + errorThrown);
					} else {
						 hideLoginModal();
						alert('custom message. Error: ' + errorThrown);
					}
				}

			});
			return false;
			  
		
		
		
	} /// End function display Forms



 ////// THIS FUNCTION IS TO INTRODUCE THE TASK ID INTO THE INPUT TO LATER USER WITH THE DELETE FUNCTION //......////
 
var DeleteTaskInput = function(Task_Id){
	$('#taskId').val(Task_Id);
}



////// DELETE TASK ///////


var DeleteTask = function(){
	
	
		var Task_Id = $('#taskId').val();
		var dataString = 'Task_Id='+Task_Id+'&deleteToDoEvents=true';
				
			$.ajax({
				  type: "POST",
				  url: "assets/php/functionToDo.php",
				  data: dataString,
				  dataType:"Json",
				  success: function(data) {
					   if (data.Status == 'success'){
							hideLoginModal();
							
							//// Refresing Task list
							displayToDoEvents();
							displayToDoEventsInfoToHeader();
					
					  }else{
						 
						   $('#loading').hide();
						  // Empty the box message
							$('#boxMessageModal').html("");
							  // Introduce the new message
							$('#boxMessageModal').html("Error deleting Task, please contact with the administrator. Dr. Shi");
							  //Execute the modal box
							 $('#modalExpiration').click();
						  
						  }
						 
				  },
				  error: function (XMLHttpRequest, textStatus, errorThrown) {
					if (textStatus == 'Unauthorized') {
						 hideLoginModal();
						alert('custom message. Error: ' + errorThrown);
					} else {
						 hideLoginModal();
						alert('custom message. Error: ' + errorThrown);
					}
				}

			});
			return false;
			  
		
		
} // END DeleteTask


//////////   INPUT INFO INTO MODAL EDIT TASK  //////////


var EditTaskInput = function(Todo_List_Id,ToDo_Description,ToDo_Date_Mysql,ToDo_Urgent){
	
	$('#DescriptionEventEdit').val(ToDo_Description);
	$('#EventDateEdit').val(ToDo_Date_Mysql);
	$('#taskIdEdit').val(Todo_List_Id);
	
	
	if(ToDo_Urgent == 1){
		$('#UrgentEdit').prop('checked', true);
	}else{
		$('#UrgentEdit').prop('checked', false);
	}
	
	
	
} // End EditTaskInput



var EditTask = function(){
	
	var DescriptionEventEdit  = $('#DescriptionEventEdit').val();
	var EventDateEdit 			= $('#EventDateEdit').val();
	var taskId 					= $('#taskIdEdit').val();
	var UrgentEvent			=	0;
	
	
	
	
	if($('#UrgentEdit').is(':checked')){
		  UrgentEvent = 1;
	}
	
	
	
	///////// ///////// ///////// ///////// ///////// ///////// ///////// ///////// 
			/////////   CHECK THAT SOME REQUIRED INPUTS ARE NOT EMPTY /////////////
		///////// ///////// ///////// ///////// ///////// ///////// ///////// ///////// 	
		
		
		if( $('#DescriptionEventEdit').val() == "" ||  $('#DescriptionEventEdit').val() == null){
			
				
				 // Empty the box message
				$('#boxMessageModal').html("");
				// Introduce the new message
				$('#boxMessageModal').html("Please complete Description field");
							  //Execute the modal box
				$('#modalExpiration').click();
				$('#DescriptionEventEdit').select();
				
		}else if( $('#EventDateEdit').val() == "" ||  $('#EventDateEdit').val() == null){
			
				
				$('#boxMessageModal').html("");
				// Introduce the new message
				$('#boxMessageModal').html("Please Select a date");
							  //Execute the modal box
				$('#modalExpiration').click();
				$('#EventDateEdit').select();
				
		}else if(checkDate($('#EventDateEdit').val()) == false){
			
			 // Empty the box message
				$('#boxMessageModal').html("");
				// Introduce the new message
				$('#boxMessageModal').html("Please enter an appropiate date YYYY/MM/DD");
							  //Execute the modal box
				$('#modalExpiration').click();
				$('#EventDateEdit').select();
			
		
		}else{
			
		
	
				var dataString = 'DescriptionEventEdit='+DescriptionEventEdit+'&EventDateEdit='+EventDateEdit+'&UrgentEvent='+UrgentEvent+'&taskId='+taskId+'&EditToDoEvent=true';
				
			$.ajax({
				
				  type: "POST",
				  url: "assets/php/functionToDo.php",
				  data: dataString,
				  dataType:"Json",
				  success: function(data) {
					  if (data.Status == 'success'){
						  
						////////   REFRESH CALENDAR ///////////
					
						//// Refresing Task list
							displayToDoEvents();
							
					
					 ////////   CLEAR ALL INPUTS FROM EVENT FORMS ///////////
							
										
								$('#DescriptionEventEdit').val("");
								$('#EventDateEdit').val("");
								$('#EventTuIdEdit').val("");
								$('#taskIdEdit').val("");
								
							
				
								
					  }else{
						  
						
						   // Empty the box message
							$('#boxMessageModal').html("");
							// Introduce the new message
							$('#boxMessageModal').html("Error updating task");
						   //Execute the modal box
							$('#modalExpiration').click();
							
								$('#DescriptionEventEdit').val("");
								$('#EventDateEdit').val("");
								$('#EventTuIdEdit').val("");
								$('#taskIdEdit').val("");
						
						   //////  NO RESULTS FOUND
						  
						  }
				
				
				},
				    
					error: function (XMLHttpRequest, textStatus, errorThrown) {
					if (textStatus == 'Unauthorized') {
						 
						 hideLoginModal();
						 alert('custom message. Error: ' + errorThrown);
					
					} else {
						 
						 hideLoginModal();
						 alert('custom message. Error: ' + errorThrown);
						 
					}
				}
						
		});
			return false;
		
	} // end else condition
	
	
} // End EditTask.


 
$('#BtnEventInsert').click(function(){
	
		var DescriptionEvent	 	= $('#DescriptionEventInput').val();
		var EventDate 				= $('#EventDateInput').val();
		var EventTuId				= $('#EventTuIdInput').val();
		var UrgentEvent			=	0;
		
		if($('#UrgentInput').is(':checked')){
			  UrgentEvent = 1;
		}
	
	
		///////// ///////// ///////// ///////// ///////// ///////// ///////// ///////// 
			/////////   CHECK THAT SOME REQUIRED INPUTS ARE NOT EMPTY /////////////
		///////// ///////// ///////// ///////// ///////// ///////// ///////// ///////// 	
		
		
		if( $('#DescriptionEventInput').val() == "" ||  $('#DescriptionEventInput').val() == null){
			
				
				 // Empty the box message
				$('#boxMessageModal').html("");
				// Introduce the new message
				$('#boxMessageModal').html("Please complete Description field");
							  //Execute the modal box
				$('#modalExpiration').click();
				$('#TitleEventInput').select();
				
		}else if( $('#EventDateInput').val() == "" ||  $('#EventDateInput').val() == null){
			
				
				$('#boxMessageModal').html("");
				// Introduce the new message
				$('#boxMessageModal').html("Please Select a date");
							  //Execute the modal box
				$('#modalExpiration').click();
				$('#EventDateInput').select();
				
		}else if(checkDate($('#EventDateInput').val()) == false){
			
			 // Empty the box message
				$('#boxMessageModal').html("");
				// Introduce the new message
				$('#boxMessageModal').html("Please enter an appropiate date YYYY/MM/DD");
							  //Execute the modal box
				$('#modalExpiration').click();
				$('#EventDateInput').select();
			
		
		}else if( $('#EventTuIdInput').val() == "" ||  $('#EventTuIdInput').val() == null){
			
			 // Empty the box message
				$('#boxMessageModal').html("");
				// Introduce the new message
				$('#boxMessageModal').html("Contact with administratior of Wizard, Dr. Shi");
							  //Execute the modal box
				$('#modalExpiration').click();
				$('#EventStartInput').select();
			
			
		}else{
			
			
	
				var dataString = 'DescriptionEvent='+DescriptionEvent+'&EventDate='+EventDate+'&EventTuId='+EventTuId+'&UrgentEvent='+UrgentEvent+'&AddToDoEvent=true';
				
			$.ajax({
				
				  type: "POST",
				  url: "assets/php/functionToDo.php",
				  data: dataString,
				  dataType:"Json",
				  success: function(data) {
					  if (data.Status == 'success'){
						  
						////////   REFRESH CALENDAR ///////////
							
											
						//// Refresing Task list
							displayToDoEvents();
							displayToDoEventsInfoToHeader();
						
						////////   CLEAR ALL INPUTS FROM EVENT FORMS ///////////
						
							$('#DescriptionEventInput').val("");
							$('#EventDateInput').val("");
							$('#UrgentInput').val("");
							
				
								
					  }else{
						  
						
						// Empty the box message
							$('#boxMessageModal').html("");
							// Introduce the new message
							$('#boxMessageModal').html("Error creating the new event");
										  //Execute the modal box
							$('#modalExpiration').click();
							
								$('#DescriptionEventInput').val("");
								$('#EventDateInput').val("");
								$('#UrgentInput').val("");
						
						   //////  NO RESULTS FOUND
						  
						  }
						 
				  },
				  error: function (XMLHttpRequest, textStatus, errorThrown) {
					if (textStatus == 'Unauthorized') {
						 hideLoginModal();
						alert('custom message. Error: ' + errorThrown);
					} else {
						 hideLoginModal();
						alert('custom message. Error: ' + errorThrown);
					}
				}

			});
			return false;
		
			
			
	} // end else condition
		
		
	
});   /// end searchFormBtn





//////  THIS FUNCTION OPEN THE MODAL WINDOWS WHEN AJAX IS WORKING /////// 

var displayLoginModal = function(){
	$('#loading').show();
}

var hideLoginModal = function(){
	$('#loading').hide();
}





/////////  CHECK IF IS IT IS A DATE ////////

var checkDate = function(StringDate){
	
	if (Date.parse(StringDate)) {
		return true;
	} else {
	  return false;
	}
	
} // End checkDate




//////// THIS FUNCTION CHECK IF THE USER HAVE INTERNET CONNECTION ////////


function checkNetConnection(){
 
	$.ajax({
			url: 'http://web-huertas.com/work/programs/Wizard_Git/assets/php/checkConnection.php',
			async: false,
			data: {'tag':'connection'},
			dataType:"Json",
			success: function (data) {
                Success = true;//doesnt goes here
            },
            error: function (textStatus, errorThrown) {
                Success = false;//doesnt goes here
            }

        });
        //done after here
        return Success;
} /// END checkNetConnection



//////  THIS FUNCTION OPEN THE MODAL WINDOWS WHEN AJAX IS WORKING /////// 

var displayLoginModal = function(){
	$('#loading').show();
}

var hideLoginModal = function(){
	$('#loading').hide();
}


