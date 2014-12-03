<?php
include('header.php');
?>
<section id="main-content">
	<section class="wrapper">
    <!--main content start-->

    
      <div class="bodyForm">
                   		
                        <div class="leftBodyForm">
                        	 	<div class="formContainer">
                                	<div class="headerFormContainer">
                                    	<p>Forms</p>
                                 </div> <!-- end headerFormContainer -->
                                 
                                 
                                 <div id="BodyFormContainer">
                                 
                                        <!-- display forms by ajax -->
                                        
                                 
                                 </div><!-- end BodyFormContainer -->
                                 
                                
                                 
                             </div>
                             
                              <div class="footerFormContainer">
                                 	<div class="headerFooterFormContainer">
                                    	<p>Refined your search</p>
                                    </div>
                                    
                                    <div class="bodyFooterFormContainer">
                                    	<div class="lineBodyFooterFormContainer">
                                        	<div class="leftLineBodyFooterFormContainer">
                                            	<p>Form Name:</p>
                                           </div> <!-- end leftLineBodyFooterFormContainer -->
                                           <div class="rightLineBodyFooterFormContainer">
                                            	<input type="text" id="searchFormName" placeholder="Form Name" />
                                           </div><!-- end rightLineBodyFooterFormContainer -->
                                        </div> <!-- end lineBodyFooterFormContainer -->
                                        
                                        <div class="lineBodyFooterFormContainer">
                                        	<div class="leftLineBodyFooterFormContainer">
                                            	<p>Form Type:</p>
                                           </div> <!-- end leftLineBodyFooterFormContainer -->
                                           <div class="rightLineBodyFooterFormContainer">
                                           		<select id="searchFormType" >
                                                	<!-- Display forms with ajax -->
                                               </select>
                                            	
                                           </div><!-- end rightLineBodyFooterFormContainer -->
                                        
                                        
                                        </div>
                                        <div class="lineBodyFooterFormContainer"></div>
                                        <div class="lineBodyFooterFormContainer">
                                        	<button type="button" id="searchFormBtn">Search</button>
                                        </div>
                                        
                                    </div> <!-- end bodyFooterFormContainer -->
                                    
                                 
                                 </div><!-- end footerFormContainer -->
                        </div><!-- end leftBodyForm -->
                        
                        
                        <div class="rightBodyForm">
                        
                        		<div class="formContainer">
                                	<div class="headerFormContainer">
                                    	<p>Add new form</p>
                                 </div> <!-- end headerFormContainer -->
                                 
                  
                                 
                                 <div class="BodyFormContainer">
                                 	<div class="lineBodyContainerAdd">
                                    	<input type="file" id="fileToUpload" >
                                    </div>
                                    
                                    
                                 	
                                    <div class="lineBodyContainerAdd">
                                    	<textarea placeholder="Description" id="DescriptionForm" ></textarea>
                                    </div>
                                    
                                     <div class="lineBodyContainerAdd">
                                     			<p>Form type</p>
                                                
                                         
                                         
                                        <div class="lineFormType"> 
                                                
                                                 <div class="LLineBodyContainer">
                                                         <select id="addFormType" >
                                                          
                                                             	<!-- Display forms with ajax --> 
                                                      	</select>
                                                 </div>  
                                                 
                                                 <div class="RLineBodyContainer">
                                                     <a  href="" data-toggle="modal" data-target=".modalFormType">
                                                         <span class="glyphicon glyphicon-edit gray"></span>
                                                      </a>
                                                 </div>      
                                    			
                                        </div> <!-- end lineFormType -->    
                                               
                                               
                                    </div>
                                 
                                 
                                 	<div class="lineBodyContainerAdd">
                                    	<button type="button" id="addFormBtn">SubmitForm</button>
                                    </div>
                                    
                                    
                                 </div> <!-- end BodyFormContainer -->
                                    
                                    
                                    
                             </div> <!-- end formContainer -->
                        

                       <div class="progress" id="contProgressBar">
                          <div class="progress-bar progress-bar-striped"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                            <p id="perecentageBar"></p>
                          </div>
                        </div>
                        
                        
                        
                        </div><!-- end rightBodyForm -->
                    
                    
                    
                   </div>
    
    
    
    
    

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


		<!-- modal windows to manage form type -->
        
        <div class="modal fade modalFormType" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  				<div class="modal-dialog modal-sm">
                	<div class="modal-header heightHeaderModal">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="closeModalBtn">&times;</button>
                    <p class="LabelModalHeader">Form Types</p>
                  </div>
   					 <div class="modal-content">
                     
                     
                     
      						<div id="displayFormType">
                            
                             <!-- display Form dynamically by ajax -->
                             
                         </div> <!-- end displayFormType -->
                         
                        	 <!-- horizontal line -->
                          <hr>
                         
                         			<div class="LineAddForm">
                                    	<div class="leftLineAddForm"><input type="text" id="Form_Type_Description" placeholder="Add Type Form"/></div>
                                        <div class="rightLineAddForm">
                                                <a href="javascript:insertTypeForm()">
                                                  <span class="glyphicon glyphicon-upload blue"></span> 
                                                </a>
                                        </div>
                                 </div><!-- end lineFormType-->
                             
                           
                             
                         
            		</div> <!-- end modal-content -->
          		</div>
        </div>





				  <!-- /////////////////////////////////////////////////// -->
                <!--------------   MODAL WINDOWS TO DISPLAY LOADING ICON ------>
                <!-- /////////////////////////////////////////////////// -->

 				<div class="modal-body" id="loading"><img src="assets/img/ajax-loader.gif" /></div>  



				  <!-- /////////////////////////////////////////////////// -->
                <!--------------   MODAL WINDOWS TO DISPLAY PDF AND DOC DOCUMENTS ------>
                <!-- /////////////////////////////////////////////////// -->


				 <div id="ModalDialog">
                 
                    <div id="boxDialog">
                            <a href="javascript:closeModal()">Close X</a>
                            <br>
                            <iframe src="" id="iframe"></iframe>
                    </div>
               </div> 



	
	<?php	include('include.php');	?>

	<!--script for this page-->
	 <script src="assets/js/Wizard_Functions/form.js"></script>