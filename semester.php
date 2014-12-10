<?php
include('header.php');
?>



<section class="containerHorizontal">
            
            	 <div class="leftPanel">
                 
                 		<div class="headerTable">
                        
                          <h4 id="titleMemberTable">Graduate Student</h4>
                          
                          
                            <div class="lineTwoColumns">
                            		<div class="leftColumn">
                                    
                                   <div class="input-group inputSeparation">

                                    <span class="input-group-addon addonWidth"><i class="fa fa-filter"></i></span>
                                 	<input type="text" class="form-control inputWidth" id="nameFilter" placeholder="Students Filter">
       
                                    </div>
                                
                                
                                 </div> <!-- end of leftColumn -->
                                <div class="rightColumn">
                                
                                   <div class="input-group">
                            
                            
                                    <!-- <a href="#course">Course</a> -->
                                    <?php
                                    require "assets/core/connect.php";
                    
                                    $query = $sql_connection->prepare("SELECT SemesterSeasonName, SemesterYear, SemesterCode FROM semester");
                                    $query->execute();
                    
                                    $dropdown = "<form name='myForm' action''>";
                                    $dropdown = "<select name='semesters' id='semesterList' onchange='handleSelect()'>";
                                    while ($row = $query->fetch()) {
                                        $dropdown .= "\r\n<option value='{$row[2]}'>{$row[0]} {$row[1]}</option>";
                                    }
                                    $dropdown .= "\r\n</select>";
                                    echo $dropdown;
                                    ?>
                                </div>
                              
                                
                                </div><!-- end of rightColumn -->
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



<?php include('include.php'); ?>

<!--script for this page-->
<script src="assets/js/Wizard_Functions/semester.js"></script> 