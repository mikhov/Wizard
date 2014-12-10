




var Script = function () {

    /* initialize the calendar
     -----------------------------------------------------------------*/

 
  $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,basicWeek,basicDay'
        },
        editable: true,
        droppable: true, // this allows things to be dropped onto the calendar !!!
        drop: function(date, allDay) { // this function is called when something is dropped

            // retrieve the dropped element's stored Event Object
            var originalEventObject = $(this).data('eventObject');

            // we need to copy it, so that multiple events don't have a reference to the same object
            var copiedEventObject = $.extend({}, originalEventObject);

            // assign it the date that was reported
            copiedEventObject.start = date;
            copiedEventObject.allDay = allDay;

            // render the event on the calendar
            // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
            $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

            // is the "remove after drop" checkbox checked?
            if ($('#drop-remove').is(':checked')) {
                // if so, remove the element from the "Draggable Events" list
                $(this).remove();
            }

        },
		
         /*	events: 'assets/php/functionCalendar.php?getEventsCalendarById=true&&TU_ID='+User_Info['TU_ID'], */
       	   events: 'assets/php/functionCalendar.php?getEventsCalendarById=true&&TU_ID=915049363', 
			color: 'yellow',   // an option!
			textColor: 'black' // an option!
		
		/* 'assets/js/Events.json'*/
    });


}();




var reloadCalendar = function(){
	
	$('#calendar').html("");
	
	 $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,basicWeek,basicDay'
        },
        editable: true,
        droppable: true, // this allows things to be dropped onto the calendar !!!
        drop: function(date, allDay) { // this function is called when something is dropped

            // retrieve the dropped element's stored Event Object
            var originalEventObject = $(this).data('eventObject');

            // we need to copy it, so that multiple events don't have a reference to the same object
            var copiedEventObject = $.extend({}, originalEventObject);

            // assign it the date that was reported
            copiedEventObject.start = date;
            copiedEventObject.allDay = allDay;

            // render the event on the calendar
            // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
            $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

            // is the "remove after drop" checkbox checked?
            if ($('#drop-remove').is(':checked')) {
                // if so, remove the element from the "Draggable Events" list
                $(this).remove();
            }

        },
		
         	events: 'assets/php/functionCalendar.php?getEventsCalendarById=true&&TU_ID='+User_Info['TU_ID'],
       
			color: 'yellow',   // an option!
			textColor: 'black' // an option!
		
		/* 'assets/js/Events.json'*/
    });





} // End reloadCalendar




	


$('#BtnEventInsert').click(function(){
	
	
	
	var TitleEvent 			= $('#TitleEventInput').val();
	var DescriptionEvent	 	= $('#DescriptionEventInput').val();
	var EventDate 				= $('#EventDateInput').val();
	var EventStart 			= $('#EventStartInput').val();
	var EventEnd				= $('#EventEndInput').val();
	var UrlEvent				= $('#UrlEventInput').val();
	var EventTuId				= $('#EventTuIdInput').val();
	var publicEvent			=	0;
	
	if($('#publicEventInput').is(':checked')){
		  publicEvent = 1;
	}
	
	
		///////// ///////// ///////// ///////// ///////// ///////// ///////// ///////// 
			/////////   CHECK THAT SOME REQUIRED INPUTS ARE NOT EMPTY /////////////
		///////// ///////// ///////// ///////// ///////// ///////// ///////// ///////// 	
		
		
		if( $('#TitleEventInput').val() == "" ||  $('#TitleEventInput').val() == null){
			
				
				 // Empty the box message
				$('#boxMessageModal').html("");
				// Introduce the new message
				$('#boxMessageModal').html("Please complete title field");
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
			
		
		}else if( $('#EventStartInput').val() == "" ||  $('#EventStartInput').val() == null){
			
			 // Empty the box message
				$('#boxMessageModal').html("");
				// Introduce the new message
				$('#boxMessageModal').html("When start this event?");
							  //Execute the modal box
				$('#modalExpiration').click();
				$('#EventStartInput').select();
			
			
		}else if( $('#EventEndInput').val() == "" ||  $('#EventEndInput').val() == null){
			
			 // Empty the box message
				$('#boxMessageModal').html("");
				// Introduce the new message
				$('#boxMessageModal').html("When this event end?");
							  //Execute the modal box
				$('#modalExpiration').click();
				$('#EventStartInput').select();
			
			
		}else if( $('#EventTuIdInput').val() == "" ||  $('#EventTuIdInput').val() == null){
			
			 // Empty the box message
				$('#boxMessageModal').html("");
				// Introduce the new message
				$('#boxMessageModal').html("Contact with administratior of Wizard, Dr. Shi");
							  //Execute the modal box
				$('#modalExpiration').click();
				$('#EventStartInput').select();
			
			
		}else{
			
				var dataString = 'TitleEvent='+TitleEvent+'&DescriptionEvent='+DescriptionEvent+'&EventDate='+EventDate+'&EventStart='+EventStart+'&EventEnd='+EventEnd+'&UrlEvent='+UrlEvent+'&EventTuId='+EventTuId+'&publicEvent='+publicEvent+'&AddCalendarEvent=true';
				
			$.ajax({
				
				  type: "POST",
				  url: "assets/php/functionCalendar.php",
				  data: dataString,
				  dataType:"Json",
				  success: function(data) {
					  if (data.Status == 'success'){
						  
						////////   REFRESH CALENDAR ///////////
							
							
						// Empty the box message
							$('#boxMessageModal').html("");
							// Introduce the new message
							$('#boxMessageModal').html("Event successfully created");
										  //Execute the modal box
							$('#modalExpiration').click();
							$('#EventStartInput').select();
							
						
							
							////////   CLEAR ALL INPUTS FROM EVENT FORMS ///////////
							
								$('#TitleEventInput').val("");
								$('#DescriptionEventInput').val("");
								$('#EventDateInput').val("");
								$('#EventStartInput').val("");
								$('#EventEndInput').val("");
								$('#UrlEventInput').val("");
								$('#publicEventInput').val("");
							
								reloadCalendar();
					  }else{
						  
						
						// Empty the box message
							$('#boxMessageModal').html("");
							// Introduce the new message
							$('#boxMessageModal').html("Error creating the new event");
										  //Execute the modal box
							$('#modalExpiration').click();
							$('#EventStartInput').select();
							
						
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





