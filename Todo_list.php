<?php
include('header.php');
?>
<section id="main-content marginTodoList">
	<section class="wrapperNoTop">        
    <!--main content start-->

      <!-- HERE IS WHERE IS NECESSARY TO INCLUDE THE CONTENT -->
        
      
        
        
       <!-- page start-->
            <div class="row mt">
                <aside class="col-lg-3 mt">
                    <h4><i class="fa fa-frown-o"></i>  Add Task </h4>
                    <hr class="hrUpdateCSV">
                    <div class="addEventBox">
                    
                    		
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
                         
                         
                        
                       
                         <div class="lineEventsInline">
                           <div class="CheckboxDiv"><input type="checkbox" id="UrgentInput"></div><div><p>Urgent</p> </div>
                         </div> <!-- end lineEvents -->
                    
                    		<div class="lineEvents">
                            
                            <!-- HIDE INPUT TO STORE THE USER_ID -->
                            <input type="hidden" value="<?php echo $UserObject['TU_ID']; ?>" id="EventTuIdInput">
                            <input type="button" class="btn btn-danger" value="Create Event" id="BtnEventInsert">
                         </div> <!-- end lineEvents -->
                        
                    
                    </div>
                </aside>
                <aside class="col-lg-9 mt fullHeight">
                    <section class="panel maxWidthTask fullInsideBox">
                        <div class="panel-body ">
                             <table class="table table-striped tableDynamic">
                                 <thead class="TheadStatic">
                                 	<tr class="sortable-row">
                                    	 <td class="DescriptionCol"><i class="fa fa-comments"></i> Description</td>
                                        <td class="DateCol"><i class="fa fa-calendar"></i> Date</td>
                                        <td class="UrgentCol"><i class="fa fa-flash"> Urgent</td>
                                        <td class="ActionCol"><i class="fa fa-gears"> Actions</td>
                                    </tr>
                                 </thead>
                                
                                 <tbody class="table-bordered" id="BodyToDoList">
                                 		
                                        <!-- INFO DISPLAY WITH AJAX -->
                                        
                                 </tbody>
                                
                             </table>
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
  
  
    
    
    
    
    	 <!-- /////////////////////////////////////////////////// -->
        <!--------------   MODAL WINDOWS TO DELETE TASK   --------->
        <!-- /////////////////////////////////////////////////// -->


	 <!-- Modal Windows to display messages -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModalDelete" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Wizard Alert</h4>
                                 
		                      </div>
                               <div class="modal-body" id="bodyAlertMessageBox">
		                          <h4 class="modal-dialog" id="boxMessageModal"> do you want to delete this task?</h4>
								
		                      </div>
		                      <div class="modal-footer" id="footerModalSessionExpired">
                              	<input type="hidden" id="taskId">
		                          <button data-dismiss="modal" class="btn btn-default" type="button" onClick="DeleteTask()" >YES</button>	
                                 <button data-dismiss="modal" class="btn btn-default" type="button">NO</button>
								
		                      </div>
		                      
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
                
                
                
                
                
                
    	 <!-- /////////////////////////////////////////////////// -->
        <!--------------   MODAL WINDOWS TO EDIT TASK   --------->
        <!-- /////////////////////////////////////////////////// -->


	 <!-- Modal Windows to display messages -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModalEdit" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Edit Task</h4>
                                 
		                      </div>
                               <div class="modal-body" id="bodyAlertMessageBox">
		                          
                                  
                                      <div class="lineEvents">
                           <input type="text" class="form-control" placeholder="Description" id="DescriptionEventEdit">
                         </div> <!-- end lineEvents -->
                         
                         
                         <div class="lineEvents">
                          
                         	 <div class='input-group date' id='dateEventE'>
                                <input type='text' class="form-control" id="EventDateEdit" data-date-format="YYYY/MM/DD" placeholder="Date"/>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                                      
                          
                          
                         </div> <!-- end lineEvents -->
                         
                         
                        
                       
                         <div class="lineEventsInline">
                           <div class="CheckboxDiv"><input type="checkbox" id="UrgentEdit"></div><div><p>Urgent</p> </div>
                         </div> <!-- end lineEvents -->
                    
                    		<div class="lineEvents">
                        
                            <!-- HIDE INPUT TO STORE THE USER_ID  and ToDoList_Id-->
                            <input type="hidden" id="EventTuIdEdit">
                            <input type="hidden" id="taskIdEdit">
                         </div> <!-- end lineEvents -->
                                  
                                  
                                  
                                  
                                  
                                  
                                  
								
		                      </div>
		                      <div class="modal-footer" id="footerModalSessionExpired">
                              <button data-dismiss="modal" class="btn btn-default" type="button" onClick="EditTask()" >EDIT</button>	
                              <button data-dismiss="modal" class="btn btn-default" type="button">CLOSE</button>
								</div>
		                      
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
    
    
    
	
	<!--main content end-->
	</section>
</section>
	
	<?php	include('include.php');	?>
	
	<!--script for this page-->
    <script src="assets/js/Wizard_Functions/ToDo.js"></script> 
    <script src="assets/js/moment.js"></script> 
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script> 
      <script type="text/javascript">
	  $(function () {
				$('#dateEvent').datetimepicker({
					pickTime: false
				});
				$('#dateEventE').datetimepicker({
					pickTime: false
				});
			});
	</script>
