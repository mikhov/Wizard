// JavaScript Document



//IF THE LOGIN BTN IS CLICKED EXECUTE THE LOGIN PROCESS
$('#login_btn').click(function(){
	
	
 var Username =	$('#username').val();
 var Password =	$('#password').val();
	
	
	
	
	
	//// CHECK IF WE HAVE INTERNET CONNECTION
	if(checkNetConnection()){
	
		
		if(Username == "" || Username == null){
			
			  // Empty the box message
			$('#boxMessageModal').html("");
			  // Introduce the new message
			$('#boxMessageModal').html("Please introduce a UserName");
			  //Execute the modal box
			 $('#modalExpiration').click();
	
			  $('#username').focus();
			
		}else if(Password == "" || Password == null){
			
			 // Empty the box message
			$('#boxMessageModal').html("");
			  // Introduce the new message
			$('#boxMessageModal').html("Please introduce a Password");
			  //Execute the modal box
			 $('#modalExpiration').click();
			 $('#password').focus();
			 
		}else{
			displayLoginModal();
			
			//// After check that inputs are not empty, It is necessary to start with the ajax process..
		
		var dataString = 'Username='+Username+'&Password='+Password+'&LdapLogin=true';
				
			$.ajax({
				  type: "POST",
				  url: "assets/php/functionLogin.php",
				  data: dataString,
				  dataType:"Json",
				  success: function(data) {
					  if (data.Status == 'success'){
							hideLoginModal();
						 	window.location = "index.php";
	
					  }else if(data.Status == 'Error_User_Pass'){
						   hideLoginModal();
							$('#loading').hide();
						   // Empty the box message
							$('#boxMessageModal').html("");
							  // Introduce the new message
							$('#boxMessageModal').html("Wrong user and password");
							  //Execute the modal box
							 $('#modalExpiration').click();
						  
					  }else{
						   hideLoginModal();
						   $('#loading').hide();
						  // Empty the box message
							$('#boxMessageModal').html("");
							  // Introduce the new message
							$('#boxMessageModal').html("Error login, please contact with the administrator. Dr. Shi");
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
			  
			
			} /// End else condition
		
		
		
	}else{
		 // Empty the box message
			$('#boxMessageModal').html("");
			  // Introduce the new message
			$('#boxMessageModal').html("fail to connect, please check your connection settings");
			  //Execute the modal box
			 $('#modalExpiration').click();
			
		
	}
		

	
});





//////  THIS FUNCTION OPEN THE MODAL WINDOWS WHEN AJAX IS WORKING /////// 

var displayLoginModal = function(){
	$('#loading').css('display','-webkit-box');
	$('#loading').css('display','-moz-box');
	$('#loading').css('display','-ms-flexbox');	
}

var hideLoginModal = function(){
	$('#loading').css('display','none');
	
}




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

