// JavaScript Document

/////////////////////////////////////////////////////////////////
////////////////////  GLOBAL VARIABLES //////////////////////////
/////////////////////////////////////////////////////////////////
var file;




////////////   WHEN THE PAGE IS READY IT IS NECESSARY TO GET FORM TYPE AND DISPLAY IT ON THE PAGE /////////


$(document).ready(function(e) {
	
});





///// Store the file that it is selected and validate the format file
		
$(':file').change(function(){
	
    file = this.files[0];
    name = file.name;
    size = file.size;
    type = file.type;
	
	
    if(file.name.length < 1){
		
		
		
		
    }else if( file.type != 'text/csv' 
			&& file.type != 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') {
				
				////// OPEN MODAL BOX //////
				
				  // Empty the box message
				$('#boxMessageModal').html("");
				  // Introduce the new message
				$('#boxMessageModal').html("File doesnt match csv");
				  //Execute the modal box
				$('#modalExpiration').click();
				$("#fileToUpload").val("");
				
	}
   
 });
	
	






 $('#updateStudentBtn').click(function(){
	  
	  
	  	
	  
			var formData = new FormData();
			
	
			
			if($('#fileToUpload').val() == "" ||  $('#fileToUpload').val() == null){
				
					// Empty the box message
				$('#boxMessageModal').html("");
				  // Introduce the new message
				$('#boxMessageModal').html("Choose a csv file to upload");
				  //Execute the modal box
				$('#modalExpiration').click();
				$('#fileToUpload').focus();
				
			}else{
				
				///// INITIALIZE LOADING MODAL
				displayLoginModal();
			
			
				// HTML file input user's choice...
				formData.append("StudentFileUpdate", fileToUpload.files[0]);
				
				
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
											
					
					
					
					
						url: 'assets/php/functionUpdate.php',
						data: formData,
						cache: false,
						contentType: false,
						processData: false,
						type: 'POST',
						dataType:"Json",
						success: function(data){
							
							
							///// HIDE LOADING MODAL WINDOWS
								 hideLoginModal();
								 
							if(data.Status == 'success'){
							
							
								// Empty the box message
									$('#boxMessageModal').html("");
									  // Introduce the new message
									$('#boxMessageModal').html("File successfully update");
									  //Execute the modal box
									$('#modalExpiration').click();
									$("#fileToUpload").val("");
									
									//// Reset progress bar
									$('.progress-bar').css('width', 0+'%');
									$('#perecentageBar').html("");
							
						
									
							
								
							}else if(data.Status == 'file_no_attached'){
								
									// Empty the box message
									$('#boxMessageModal').html("");
									  // Introduce the new message
									$('#boxMessageModal').html("Choose a file to upload. File not attached");
									  //Execute the modal box
									$('#modalExpiration').click();
									
									//// Reset progress bar
									$('.progress-bar').css('width', 0+'%');
									$('#perecentageBar').html("");
								
								
							}else if(data.Status == 'error_moving_file'){
								
								
								// Empty the box message
									$('#boxMessageModal').html("");
									  // Introduce the new message
									$('#boxMessageModal').html("Error moving uploading file");
									  //Execute the modal box
									$('#modalExpiration').click();
								
									//// Reset progress bar
									$('.progress-bar').css('width', 0+'%');
									$('#perecentageBar').html("");
								
							}else{
								
								// Empty the box message
									$('#boxMessageModal').html("");
									  // Introduce the new message
									$('#boxMessageModal').html("Error on Wizard System. Contact with the administrator of the system.");
									  //Execute the modal box
									$('#modalExpiration').click();
								
									//// Reset progress bar
									$('.progress-bar').css('width', 0+'%');
									$('#perecentageBar').html("");
								
								}
						
							
							
					 	},
					 	 error: function (XMLHttpRequest, textStatus, errorThrown) {
							if (textStatus == 'Unauthorized') {
									///// HIDE LOADING MODAL WINDOWS
									 hideLoginModal();
								 
								 	//// Reset progress bar
									$('.progress-bar').css('width', 0+'%');
									$('#perecentageBar').html("");
									
									alert('custom message. Error: ' + errorThrown);
									
							} else {
								
									///// HIDE LOADING MODAL WINDOWS
									 hideLoginModal();
									 
									 	//// Reset progress bar
									$('.progress-bar').css('width', 0+'%');
									$('#perecentageBar').html("");
									
									alert('custom message. Error: ' + errorThrown);
							}
				}
					 
			 
				});
			
				
			} // End if else condition
			
			
			
});



	
	









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












