<?php
include('header.php');
?>
<section id="main-content">
	<section class="wrapper">      
	
	<!--main content start-->

     
            <!-- page start-->
            <div class="row mt">
                <aside class="col-lg-3 mt">
                    <h4><i class="fa fa-calendar"></i>  Add Events </h4>
                    <hr class="hrUpdateCSV">
                    <div class="addEventBox">
                    
                    		<div class="lineEvents">
                           <input type="text" class="form-control" placeholder="Title" id="TitleEventInput"> 
                         </div> <!-- end lineEvents -->
                         <div class="lineEvents">
                           <input type="text" class="form-control" placeholder="Description" id="DescriptionEventInput">
                         </div> <!-- end lineEvents -->
                         
                         
                         <div class="lineEvents">
                          
                         	 <div class='input-group date' id='dateEvent'>
                                <input type='text' class="form-control" id="EventDateInput" data-date-format="YYYY/MM/DD" placeholder="Date"/>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                                      
                          
                          
                         </div> <!-- end lineEvents -->
                         
                         
                          <div class="lineEvents">
                          
                          
                          <div class='input-group date' id='EventStart'>
                            <input type='text' class="form-control" id="EventStartInput" placeholder="Event Start" readonly/>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
                            </span>
                        </div>
                                   
                         </div> <!-- end lineEvents -->
                          <div class="lineEvents">
                           
                           
                           
                            <div class='input-group date' id='EventEnd'>
                                <input type='text' class="form-control" id="EventEndInput" placeholder="Event End" readonly/>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
                                </span>
                            </div>
 
                           
                           
                         </div> <!-- end lineEvents -->
                    	    <div class="lineEvents">
                           <input type="url" class="form-control" placeholder="Url" id="UrlEventInput">
                         </div> <!-- end lineEvents -->
                         <div class="lineEventsInline">
                           <div class="CheckboxDiv"><input type="checkbox" id="publicEventInput"></div><div><p>Public Event</p> </div>
                         </div> <!-- end lineEvents -->
                    
                    		<div class="lineEvents">
                            
                            <!-- HIDE INPUT TO STORE THE USER_ID -->
                            <input type="hidden" value="<?php if(isset($UserObject['TU_ID'])){echo $UserObject['TU_ID'];}?>" id="EventTuIdInput">
                            <input type="button" class="btn btn-danger" value="Create Event" id="BtnEventInsert">
                         </div> <!-- end lineEvents -->
                        
                    
                    </div>
                </aside>
                <aside class="col-lg-9 mt">
                    <section class="panel">
                        <div class="panel-body">
                            <div id="calendar" class="has-toolbar"></div>
                        </div>
                    </section>
                </aside>
            </div>
            <!-- page end-->
	<!--main content end-->	
	</section>
</section>
	
    
    
    
    
      <!-- /////////////////////////////////////////////////// -->
        <!--------------   MODAL WINDOWS TO DISPLAY MESSAGES ------>
        <!-- /////////////////////////////////////////////////// -->


	 <!-- Modal Windows to display messages -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal3" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Wizard Alert</h4>
                                  <a data-toggle="modal" id="modalExpiration" href="login.html#myModal3"></a>
		                      </div>
                               <div class="modal-body" id="bodyAlertMessageBox">
		                          <h4 class="modal-dialog" id="boxMessageModal"></h4>
								
		                      </div>
		                      <div class="modal-footer" id="footerModalSessionExpired">
		                          <button data-dismiss="modal" class="btn btn-default" type="button" id="BtnExpirationModal">OK</button>
								
		                      </div>
		                      
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
                
                
                <!-- /////////////////////////////////////////////////// -->
                <!--------------   MODAL WINDOWS TO DISPLAY LOADING ICON ------>
                <!-- /////////////////////////////////////////////////// -->

 				<div class="modal-body" id="loading"><img src="assets/img/ajax-loader.gif" /></div> 
  
  
    
    
    
    
    
	
	<?php	include('include.php');	?>
	
    <!--script for this page-->
	
    <script src="assets/js/moment.js"></script> 
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script> 
    <script src="assets/js/calendar-conf-events.js"></script>
    <script type="text/javascript">
	  $(function () {
				$('#dateEvent').datetimepicker({
					pickTime: false
				});
				$('#EventStart').datetimepicker({
					pickDate: false
				});
				$('#EventEnd').datetimepicker({
                    pickDate: false
                });
				
			});
	</script>

    
   