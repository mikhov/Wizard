// JavaScript Document

/////////////////////////////////////////////////////////////////
////////////////////  GLOBAL VARIABLES //////////////////////////
/////////////////////////////////////////////////////////////////
var file;




////////////   WHEN THE PAGE IS READY IT IS NECESSARY TO GET FORM TYPE AND DISPLAY IT ON THE PAGE /////////


$(document).ready(function(e) {
	displayForms();
    displayTypeForm();
});





	
var displayForms = function(){

		displayLoginModal();
		var dataString = 'DisplayForms=true';
				
			$.ajax({
				  type: "POST",
				  url: "assets/php/functionForm.php",
				  data: dataString,
				  dataType:"Json",
				  success: function(data) {
					  if (data.Status == 'success'){
							hideLoginModal();
							
						
							/// GET THE JSON VALUES THAT IT RETURN FROM SERVER
							var Form_ID  					= data.Form_ID;
						 	var Form_Description 			= data.Form_Description;
							var Form_Date_mysql  			= data.Form_Date_mysql;
						 	var Form_Date 					= data.Form_Date;
							var Form_Type_Id  				= data.Form_Type_Id;
						 	var Form_Path 				 	= data.Form_Path;
							var Form_Type_Description  	= data.Form_Type_Description;
							
						
							/// RESET THE DOM TO NOT OVERWRITE
						
							$('#BodyFormContainer').html("");
						
						
							/// INSERT ALL VALUES INTO THE DOM 
							for(var i in Form_ID){
								
							
								
								$('#BodyFormContainer').append(
								
									 '<div class="lineBodyContainer">'+ 
                                        	'<div class="leftLineBodyContainer"><p>'+Form_Description[i]+'</p></div>'+
												'<div class="middleLineBodyContainer"><p>'+Form_Type_Description[i]+'</p></div>'+
                                           '<div class="rightLineBodyContainer">'+
										   
											   			  '<a href="'+Form_Path[i]+'" target="_blank">'+
                                                      '<span class="glyphicon glyphicon-cloud-download blue"></span>'+
                                                    '</a>'+
													
                                                    
                                                    '<a href="javascript:openFileModal(\''+Form_Path[i]+'\');" >'+
                                                      '<span class="glyphicon glyphicon-eye-open green"></span>'+
                                                    '</a>'+
                                                    
                                                    '<a href="javascript:deleteForm('+Form_ID[i]+');" >'+
                                                      '<span class="glyphicon glyphicon-remove-circle red"></span>'+
                                                    '</a>'+
                                                 
                                            '</div>'+
                                    '</div>'
									
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




$('#searchFormBtn').click(function(){
	
	var FormType = $('#searchFormType').val();
	var FormName = $('#searchFormName').val();
	


			var dataString = 'FormTypeSearch='+FormType+'&FormName='+FormName+'&SearchForms=true';
				
			$.ajax({
				
				  type: "POST",
				  url: "assets/php/functionForm.php",
				  data: dataString,
				  dataType:"Json",
				  success: function(data) {
					  if (data.Status == 'success'){
						  
							
							
							hideLoginModal();
							
							/// GET THE JSON VALUES THAT IT RETURN FROM SERVER
							var Form_ID  					= data.Form_ID;
						 	var Form_Description 			= data.Form_Description;
							var Form_Date_mysql  			= data.Form_Date_mysql;
						 	var Form_Date 					= data.Form_Date;
							var Form_Type_Id  				= data.Form_Type_Id;
						 	var Form_Path 				 	= data.Form_Path;
							var Form_Type_Description  	= data.Form_Type_Description;
							
						
							/// RESET THE DOM TO NOT OVERWRITE
						
							$('#BodyFormContainer').html("");
						
						
							/// INSERT ALL VALUES INTO THE DOM 
							for(var i in Form_ID){
								
							
								
								$('#BodyFormContainer').append(
								
									 '<div class="lineBodyContainer">'+ 
                                        	'<div class="leftLineBodyContainer"><p>'+Form_Description[i]+'</p></div>'+
												'<div class="middleLineBodyContainer"><p>'+Form_Type_Description[i]+'</p></div>'+
                                           '<div class="rightLineBodyContainer">'+
										   
											   			  '<a href="'+Form_Path[i]+'" target="_blank">'+
                                                      '<span class="glyphicon glyphicon-cloud-download blue"></span>'+
                                                    '</a>'+
													
                                                    
                                                    '<a href="javascript:openFileModal(\''+Form_Path[i]+'\');" >'+
                                                      '<span class="glyphicon glyphicon-eye-open green"></span>'+
                                                    '</a>'+
                                                    
                                                    '<a href="javascript:;" >'+
                                                      '<span class="glyphicon glyphicon-edit red"></span>'+
                                                    '</a>'+
                                                 
                                            '</div>'+
                                    '</div>'
									
								);
								
							
							} // End for loop
							
						
							
	
					  }else{
						 $('#BodyFormContainer').html("");
						   $('#loading').hide();
						  // Empty the box message
							$('#boxMessageModal').html("");
							  // Introduce the new message
							$('#boxMessageModal').html("No results found.....");
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
			  


	
});   /// end searchFormBtn


var deleteForm = function(Form_ID){
	

	
		var dataString = 'Form_ID='+Form_ID+'&DeleteForm=true';
				
			$.ajax({
				  type: "POST",
				  url: "assets/php/functionForm.php",
				  data: dataString,
				  dataType:"Json",
				  success: function(data) {
					  if (data.Status == 'success'){
							hideLoginModal();
							 displayForms();
					 }else{
						 
						   $('#loading').hide();
						  // Empty the box message
							$('#boxMessageModal').html("");
							  // Introduce the new message
							$('#boxMessageModal').html("Error deleting form, please contact with the administrator. Dr. Shi");
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

	
} /// End deleleForm





///// Store the file that it is selected and validate the format file
		
$(':file').change(function(){
	
    file = this.files[0];
    name = file.name;
    size = file.size;
    type = file.type;
	
	
    if(file.name.length < 1) {
    }
    else if(file.size > 1000000) {
      
		
		////// OPEN MODAL BOX //////
				
				  // Empty the box message
				$('#boxMessageModal').html("");
				  // Introduce the new message
				$('#boxMessageModal').html("File is to big");
				  //Execute the modal box
				$('#modalExpiration').click();
				
				$("#fileToUpload").val("");
		
    }
    else if(  file.type != 'image/png' 
			&& file.type != 'image/jpg' 
			&& file.type != 'image/gif' 
			&& file.type != 'image/jpeg' 
			&& file.type != 'application/pdf'
			&& file.type != 'application/vnd.openxmlformats-officedocument.wordprocessingml.document' 
			&& file.type != 'application/msword') {
				
				////// OPEN MODAL BOX //////
				
				  // Empty the box message
				$('#boxMessageModal').html("");
				  // Introduce the new message
				$('#boxMessageModal').html("File doesnt match png, jpg, gif, pdf, doc or docx");
				  //Execute the modal box
				$('#modalExpiration').click();
				$("#fileToUpload").val("");
				
	}
   
 });
	
	






 $('#addFormBtn').click(function(){
	  
			var formData = new FormData();
			
	
			
			if( $('#DescriptionForm').val() == "" ||  $('#DescriptionForm').val() == null){
				
				
				  // Empty the box message
				$('#boxMessageModal').html("");
				  // Introduce the new message
				$('#boxMessageModal').html("Complete description file");
				  //Execute the modal box
				$('#modalExpiration').click();
				$('#DescriptionForm').focus();
				
			}else if( $('#addFormType').val() == "" ||  $('#addFormType').val() == null){
				
				// Empty the box message
				$('#boxMessageModal').html("");
				  // Introduce the new message
				$('#boxMessageModal').html("Complete description file");
				  //Execute the modal box
				$('#modalExpiration').click();
				$('#addFormType').focus();
				
				
			}else if($('#fileToUpload').val() == "" ||  $('#fileToUpload').val() == null){
				
					// Empty the box message
				$('#boxMessageModal').html("");
				  // Introduce the new message
				$('#boxMessageModal').html("Choose a file to upload");
				  //Execute the modal box
				$('#modalExpiration').click();
				$('#fileToUpload').focus();
				
			}else{
				
				
				
			
				formData.append("DescriptionForm", $('#DescriptionForm').val());
				formData.append("FormType", $('#addFormType').val()); // number 123456 is immediately converted to string "123456"
				
				// HTML file input user's choice...
				formData.append("userfile", fileToUpload.files[0]);
				
				
				$.ajax({
					beforeSend: function() {
							
							$('#contProgressBar').show();
							$('.progress-bar').css('width','0%');
							
						},
						
						////// This control my progress bar
						xhr: function()
						  {
							var xhr = new window.XMLHttpRequest();
							//Upload progress
							xhr.upload.addEventListener("progress", function(evt){
							  if (evt.lengthComputable) {
								var percentComplete = (evt.loaded / evt.total) * 100;
								//Do something with upload progress
								console.log(percentComplete);
								
								
								$('#perecentageBar').html(percentComplete+'%');
								 /// Here I need to increase my progress bar
								
								$('#contProgressBar').show();
								$('.progress-bar').css('width', percentComplete+'%');
								
								
							  }
							}, false);
							//Download progress
							xhr.addEventListener("progress", function(evt){
							  if (evt.lengthComputable) {
								var percentComplete = evt.loaded / evt.total;
								//Do something with download progress
								console.log(percentComplete);
							  }
							}, false);
							return xhr;
						  },
											
					
					
					
					
						url: 'assets/php/functionForm.php',
						data: formData,
						cache: false,
						contentType: false,
						processData: false,
						type: 'POST',
						dataType:"Json",
						success: function(data){
							
							if(data.Status == 'success'){
							
							
								// Empty the box message
									$('#boxMessageModal').html("");
									  // Introduce the new message
									$('#boxMessageModal').html("Form successfully created");
									  //Execute the modal box
									$('#modalExpiration').click();
									
							
								
									
								/// Clean the field input /////
									$('#DescriptionForm').val("");
									$('#fileToUpload').val("");
								
								
								
								
									
								 /// hide the progress bar /// 
									
									$('.progress-bar').css('width', 0+'%');
									
							//// DISPLAY THE FORM ON THE LEFT SITE
							
							displayForms();
									
							
								
							}else if(data.Status == 'file_no_attached'){
								
									// Empty the box message
									$('#boxMessageModal').html("");
									  // Introduce the new message
									$('#boxMessageModal').html("Choose a file to upload. File not attached");
									  //Execute the modal box
									$('#modalExpiration').click();
								
								
								
							}else if(data.Status == 'error_moving_file'){
								
								
								// Empty the box message
									$('#boxMessageModal').html("");
									  // Introduce the new message
									$('#boxMessageModal').html("Error moving uploading file");
									  //Execute the modal box
									$('#modalExpiration').click();
								
								
								
							}else{
								
								// Empty the box message
									$('#boxMessageModal').html("");
									  // Introduce the new message
									$('#boxMessageModal').html("Error on Wizard System. Contact with the administrator of the system.");
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
			
				
			} // End if else condition
			
			
			
});



////////////  THIS FUNCTION IS TO DISPLAY TYPE OF FORM DYNAMICALLY //////////////

var displayTypeForm = function(){
	
		displayLoginModal();
		var dataString = 'DisplayTypeForm=true';
				
			$.ajax({
				  type: "POST",
				  url: "assets/php/functionForm.php",
				  data: dataString,
				  dataType:"Json",
				  success: function(data) {
					  if (data.Status == 'success'){
							hideLoginModal();
							
							
							/// GET THE JSON VALUES THAT IT RETURN FROM SERVER
							var Form_Type_Id  = data.Form_Type_Id;
						 	var Form_Type 		= data.FormType;
							
							/// RESET THE DOM TO NOT OVERWRITE
						
							$('#searchFormType').html("");
							$('#addFormType').html("");
							$('#displayFormType').html("");
						
						
						
							/// INSERT ALL VALUES INTO THE DOM 
							for(var i in Form_Type_Id){
								
								$('#searchFormType').append(
									'<option value='+Form_Type_Id[i]+'>'+Form_Type[i]+'</option>' 
								);
								$('#addFormType').append(
									'<option value='+Form_Type_Id[i]+'>'+Form_Type[i]+'</option>' 
								);
								
								$('#displayFormType').append(
								
									 '<div class="lineFormType">'+
												'<div class="leftFormLine">'+Form_Type[i]+'</div>'+
											'<div class="rightFormLine">'+
													
													'<a  href="javascript:deleteTypeForm('+Form_Type_Id[i]+')">'+
																	 '<span class="glyphicon glyphicon-remove-circle red"></span>'+
													'</a>'+    
												 '</div>'+
									'</div>'
									
								);
								
							
							} // End for loop
	
					  }else{
						 
						   $('#loading').hide();
						  // Empty the box message
							$('#boxMessageModal').html("");
							  // Introduce the new message
							$('#boxMessageModal').html("Error displaying formType, please contact with the administrator. Dr. Shi");
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
			  
}  /// End fuction getFormType

	
	
	
 var deleteTypeForm = function(Form_Type_Id){
	 


		displayLoginModal();
		var dataString = 'Form_Type_Id='+Form_Type_Id+'&DeleteFormType=true';
				
			$.ajax({
				  type: "POST",
				  url: "assets/php/functionForm.php",
				  data: dataString,
				  dataType:"Json",
				  success: function(data) {
					  if (data.Status == 'success'){
						  
						  /// Hide the  loginModal
							hideLoginModal();
							
						  ///Display form_type on the page again to update the information
							displayTypeForm();
						
	
					  }else{
						 
						   $('#loading').hide();
						  // Empty the box message
							$('#boxMessageModal').html("");
							  // Introduce the new message
							$('#boxMessageModal').html("Error deleting this form type");
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

 } // end deleteTypeForm 
	
	





 var insertTypeForm = function(Form_Type_Description){
	 

		var Form_Type_Description = $('#Form_Type_Description').val();
		
		displayLoginModal();
		var dataString = 'Form_Type_Description='+Form_Type_Description+'&Insert_Form_Type=true';
				
			$.ajax({
				  type: "POST",
				  url: "assets/php/functionForm.php",
				  data: dataString,
				  dataType:"Json",
				  success: function(data) {
					  if (data.Status == 'success'){
						  
						  /// Hide the  loginModal
							hideLoginModal();
							
						  ///Display form_type on the page again to update the information
							displayTypeForm();
						
						 /// Resent the input box ///
						 $('#Form_Type_Description').val("");
	
					  }else if(data.Status == 'repeated'){
						  
						  
						  ///// closer previously modal
						  
						   $('#closeModalBtn').click();
						  
						  //////// hide login modal and open message modal
						  
					    	$('#loading').hide();
						  // Empty the box message
							$('#boxMessageModal').html("");
							  // Introduce the new message
							$('#boxMessageModal').html("This form type already exist on the database");
							  //Execute the modal box
							 $('#modalExpiration').click();
					  
					  
					  }else{
						 
						   $('#loading').hide();
						  // Empty the box message
							$('#boxMessageModal').html("");
							  // Introduce the new message
							$('#boxMessageModal').html("Error creating a new form type");
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







 } // end deleteTypeForm 
	
	









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













/////////////////////////// open modal to display documents ///////////////////////


var openFileModal = function(url){
	
	///SETTUP THE CSS TO IFRAME WINDOWS.
	
	$("#ModalDialog").css('display','-webkit-box');
	$("#ModalDialog").css('-webkit-box-align','center');
	$("#ModalDialog").css('-webkit-box-pack','center');
	
	$("#ModalDialog").css('display','-moz-box');
	$("#ModalDialog").css('-moz-box-align','center');
	$("#ModalDialog").css('-moz-box-pack','center');
	
	$("#ModalDialog").css('display','-ms-flexbox');
	$("#ModalDialog").css('-ms-flex-pack','center');
	$("#ModalDialog").css('-ms-flex-align','center');

	////// Build the Path to display the image /////
	
	
	
	
	var finalURL ='http://docs.google.com/gview?url='+url+'&embedded=true';
	
	$("#ModalDialog").show();
	$('#iframe').attr('src',finalURL);
	

} // end openFileModal


var closeModal = function(){
	
	$("#ModalDialog").css('display','none');
}








