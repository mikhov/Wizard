// JavaScript Document

/////////////////////////////////////////////////////////////////
////////////////////  GLOBAL VARIABLES //////////////////////////
/////////////////////////////////////////////////////////////////




////////////   WHEN THE PAGE IS READY IT IS NECESSARY TO GET FORM TYPE AND DISPLAY IT ON THE PAGE /////////


$(document).ready(function(e) {
	displayToDoEventsInfoToHeader();
});


	
var displayToDoEventsInfoToHeader = function(){

		
		var dataString = 'EventTuId='+User_Info['TU_ID']+'&displayToDoEvents=true';
				
			$.ajax({
				  type: "POST",
				  url: "assets/php/functionToDo.php",
				  data: dataString,
				  dataType:"Json",
				  success: function(data) {
					  if (data.Status == 'success'){
					
					
							/// RESET THE DOM TO NOT OVERWRITE
						
							$('#PendingTask').html("");
					
						
						var Todo_List_Id	 	=	 data.Todo_List_Id;
						var ToDo_Description 	=	 data.ToDo_Description;
						var ToDo_Date_Mysql	=	 data.ToDo_Date_Mysql;
						var ToDo_Date 			=	 data.ToDo_Date;
						var ToDo_Urgent 		=	 data.ToDo_Urgent;
						var Tu_Id 				=	 data.Tu_Id;
						var Urgent = 'check.png';
						
						
						
						//// GET LENGHT OF OBJECT TASK
							var len = $.map(data.Todo_List_Id, function(n, i) { return i; }).length;
						
						///// IMPLEMENT NUMBER OF PENDING TASK ON THE HEADER
							$('#numTask').html(len);
							$('#numTaskTest').html('You have '+ len +' pending tasks');
						
						
							/// INSERT ALL VALUES INTO THE DOM 
							for(var i in Todo_List_Id){
							
								if(ToDo_Urgent[i] == 0){
									Urgent = 'uncheck.png'; 
								}else{
									Urgent = 'check.png';
									}
								
							 if(i < 5){	
								$('#PendingTask').append(
								
									
                                '<li>'+
                                    '<a>'+
                                        '<div class="task-info">'+
                                            '<div class="desc">'+ToDo_Description[i]+'</div>'+
                                            '<div class="percent"><img src="assets/img/'+Urgent+'" alt="icon Urgent"></div>'+
                                        '</div>'+
                                        '<div class="progress progress-striped">'+
                                            '<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">'+
                                                '<span class="sr-only">100% Complete (success)</span>'+
                                            '</div>'+
                                        '</div>'+
                                    '</a>'+
                                '</li>'
                                
									
									
								);
							 } // end if i< 5
								
								
							
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
					
						alert('custom message. Error: ' + errorThrown);
					} else {
						
						alert('custom message. Error: ' + errorThrown);
					}
				}

			});
			return false;
			  
		
		
		
	} /// End function display Forms


