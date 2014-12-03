<?php
include('header.php');
?>


   <section class="containerHorizontal">
            
            
            
            	 <div class="leftPanel">
                 
                 		<div class="headerTable">
                        
                          <h4 id="titleMemberTable">Temple Students</h4>
                                <div class="input-group inputSeparation">
                                  <span class="input-group-addon addonWidth"><i class="fa fa-filter"></i></span>
                                 	 <input type="text" class="form-control inputWidth" id="nameFilter" placeholder="Students Filter">
                                </div>
	                  	  	  <hr>
                              
                              <div class="lineHeader">
                              
                              	<div class="blockName"><i class="fa fa-user"></i> Name</div>
                                
                                <div class="blockCollege"><i class="fa fa-book"></i> College</div>
                                <div class="blockAcademicStatus"><i class="fa fa-folder-open"></i> Academic Status </div>
                                <div class="blockGPA"><i class="fa fa-star"></i> GPA</div>
                                
                                
                                <div class="blockEmail"><i class="fa fa-envelope"></i> Email</div>
                                <div class="tuidBlook"><i class="fa fa-key"></i> TU-ID</div>
                                <div class="Action_Blook"><i class="fa fa-cogs"></i> Action</div>
                                
                              </div> <!-- end lineHeader -->
                       </div> <!-- headerTable -->
                       
                       
                       <div class="bodyTable">
                       	<div id="bodyTableFull">
                        			<table class="table table-striped table-advance table-hover draggable">
                                     <tbody class="searchable" id="StudentTable">
                                    
                                          <!-- DISPLAY INFO WITH AJAX -->
                                     </tbody>
                                 </table>
                               
                                    
                          </div>
                       </div> <!-- end bodyTable -->
               
                    
               </div> <!-- end leftPanel -->
               
              
             
            
      
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
  
  
  
  				 <!-- //////////////////////////////////////////////////////////////// -->
               <!--------------   MODAL WINDOWS TO DISPLAY STUDENTS INFORMATION ------->
               <!-- //////////////////////////////////////////////////////////////// -->
  
  
              
          
 
     <!-- Modal WINDOWS TO EDIT SCIENCETAP MEMBERS -->
                    <div class="modal fade" id="editMemberModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header" id="HeaderModal">
                            <button type="button" class="close" data-dismiss="modal" id="closeX">
                            			<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Student Records <i class="fa fa-user"></i></h4>
                          </div>
                              <div class="modal-body">
                          
                          			 <h4 class="LabelStudentInfo">Personal Info</h4>
                                     <hr class="LabelStudentInfo">
                                     <br>
                                     
                                    <div class="lineStudentRecord">
                                    	<div class="lineStudentRecordI">
                                        	 <div class="leftStudent"><p>Name:</p></div>
                                            <div class="rightStudent"><p id="NameStudentInfo"><p></div>
                                        </div>
                                        <div class="lineStudentRecordI">
                                        	<div class="leftStudent"><p>Gender:</p></div>
                                           <div class="rightStudent"><p id="GenderStudentInfo"></p></div>
                                        </div>
                                   
                                    </div> <!-- end lineStudentRecord -->
                                    
                                    <div class="lineStudentRecord">
                                    	<div class="lineStudentRecordI">
                                        	 <div class="leftStudent"><p>Address:</p></div>
                                            <div class="rightStudent"><p id="Address_Street_StudentInfo"><p></div>
                                        </div>
                                       
                                    </div> <!-- end lineStudentRecord -->
                                    
                                    
                                    
                                    
                                    <div class="lineStudentRecord">
                                    	<div class="lineStudentRecordI">
                                        	 <div class="leftStudent"><p>City:</p></div>
                                            <div class="rightStudent"><p id="CityStudioInfo"><p></div>
                                        </div>
                                        <div class="lineStudentRecordI">
                                        	<div class="leftStudent"><p >Zip:</p></div>
                                           <div class="rightStudent"><p id="ZipStudioInfo"></p></div>
                                        </div>
                                     </div> <!-- end lineStudentRecord -->
                                    
                                    <br>
                                    
                                    
                                    
                                    <h4 class="LabelStudentInfo">Contact Info</h4>
                                    <hr class="LabelStudentInfo">
                                    <br>
                                    
                                     <div class="lineStudentRecord">
                                    	<div class="lineStudentRecordI">
                                        	 <div class="leftStudent"><p>Email:</p></div>
                                            <div class="rightStudent"><p id="EmailStudentInfo">tue89164@temple.edu<p></div>
                                        </div>
                                        <div class="lineStudentRecordI">
                                        	<div class="leftStudent"><p>Phone:</p></div>
                                           <div class="rightStudent"><p id="phoneStudentInfo">267-348-7342</p></div>
                                        </div>
                                     </div> <!-- end lineStudentRecord -->
                                    
                                    
                                  <br>
                                  <h4 class="LabelStudentInfo">Academic Info</h4>
                                  <hr class="LabelStudentInfo">
                                  <br>
                                 
                                  <div class="lineStudentRecord">
                                    	<div class="lineStudentRecordI">
                                        	 <div class="leftStudent"><p>Tu_Id:</p></div>
                                            <div class="rightStudent" id="TuIdStudentInfo"><p></p></div>
                                        </div>
                                        <div class="lineStudentRecordI">
                                        	<div class="leftStudent"><p>Graduation:</p></div>
                                           <div class="rightStudent"><p id="ExpectStudentInfo"></p></div>
                                        </div>
                                 </div> <!-- end lineStudentRecord -->
                                 
                                 
                                   <div class="lineStudentRecord">
                                    	<div class="lineStudentRecordI">
                                        	 <div class="leftStudent"><p>College:</p></div>
                                            <div class="rightStudent"><p id="collegeStudentInfo"></p></div>
                                        </div>
                                        <div class="lineStudentRecordI">
                                        	<div class="leftStudent"><p>Program:</p></div>
                                           <div class="rightStudent"><p id="programStudentInfo"></p></div>
                                        </div>
                                 	</div> <!-- end lineStudentRecord -->
                                 
                                 
                                 
                                 
                                   <div class="lineStudentRecord">
                                    	<div class="lineStudentRecordI">
                                        	 <div class="leftStudent"><p>Level:</p></div>
                                            <div class="rightStudent"><p id="levelStudentInfo"></p></div>
                                        </div>
                                        <div class="lineStudentRecordI">
                                        	<div class="leftStudent"><p>Degree:</p></div>
                                           <div class="rightStudent"><p id="degreeStudentInfo"> </p></div>
                                        </div>
                                 	</div> <!-- end lineStudentRecord -->
                                 
                                 
                                   <div class="lineStudentRecord">
                                    	<div class="lineStudentRecordI">
                                        	 <div class="leftStudent"><p>Curriculum:</p></div>
                                            <div class="rightStudent"><p id="curriculumStudionInfo"></p></div>
                                        </div>
                                        <div class="lineStudentRecordI">
                                        	 <div class="leftStudent"><p>Hours Att:</p></div>
                                            <div class="rightStudent"><p id="hoursAttStudionInfo"></p></div>
                                        </div>
                                       
                                 	</div> <!-- end lineStudentRecord -->
                                 
                                 
                                 
                                 <div class="lineStudentRecord">
                                    	
                                        <div class="lineStudentRecordI">
                                        	<div class="leftStudent"><p>GPA Hours:</p></div>
                                           <div class="rightStudent"><p id="GPAHoursStudentInfo"></p></div>
                                        </div>
                                        <div class="lineStudentRecordI">
                                        	 <div class="leftStudent"><p>Grade Points:</p></div>
                                            <div class="rightStudent"><p id="gradePointStudentInfo"></p></div>
                                        </div>
                                 </div> <!-- end lineStudentRecord -->
                                 
                                 
                                  <div class="lineStudentRecord">
                                    	
                                        <div class="lineStudentRecordI">
                                        	<div class="leftStudent"><p>GPA:</p></div>
                                           <div class="rightStudent"><p id="GPAStudentInfo"></p></div>
                                        </div>
                                        <div class="lineStudentRecordI">
                                        	 <div class="leftStudent"><p>Overall Passed:</p></div>
                                            <div class="rightStudent"><p id="OveralPassedStudentInfo"></p></div>
                                        </div>
                                 </div> <!-- end lineStudentRecord -->
                                 
                                 
                                 
                                  <div class="lineStudentRecord">
                                    	
                                        <div class="lineStudentRecordI">
                                        	<div class="leftStudent"><p>Transfer Hours:</p></div>
                                           <div class="rightStudent"><p id="TransferHourStudentInfo"></p></div>
                                        </div>
                                       <div class="lineStudentRecordI">
                                        	<div class="leftStudent"><p>Cum Points:</p></div>
                                           <div class="rightStudent"><p id="CumulativePointStudentInfo"></p></div>
                                        </div>
                                 </div> <!-- end lineStudentRecord -->
                                 
                                 
                                 
                                
                              </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" id="closeEditModal">Close</button>
                     		
                          </div>
                        </div>
                      </div>
                    </div>
		          <!-- modal -->
 
 
 
 
 
 
 
 
 			
     <!-- Modal WINDOWS TO EDIT SCIENCETAP MEMBERS -->
                    <div class="modal fade" id="attachFormModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header" id="HeaderModal">
                            <button type="button" class="close" data-dismiss="modal" id="closeX">
                            			<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel"> Attach Form <i class="fa fa-file-pdf-o"></i></h4>
                          </div>
                              <div class="modal-body">
                          
                          			 <h4 class="LabelStudentInfo" id="LabelAttachForm"></h4>
                                     <hr class="LabelStudentInfo">
                                     <br>
                                     
                                 
                                  <div class="lineAttachFormModal">
                                  	 <input type="file" id="fileToUpload" >
                               	  </div>
                                 
                           <div class="progress" id="contProgressBar">
                          <div class="progress-bar progress-bar-striped"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                            <p id="perecentageBar"></p>
                          </div>
                        </div>
                                 
                                 
                                 
                                 
                                    
                                   
                              </div>
                          <div class="modal-footer">
                         	   <input type="hidden" id="Student_Id">
                            <button type="button" class="btn btn-default" data-dismiss="modal" id="closeEditModal">Close</button>
                     		
                          </div>
                        </div>
                      </div>
                    </div>
		          <!-- modal -->
 
 
 
			



	<?php	include('include.php');	?>
	
	<!--script for this page-->
	<script src="assets/js/Wizard_Functions/formUpdate.js"></script> 
   