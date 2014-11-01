<?php
include('header.php');
?>
      
      <!--main content start-->

      <!-- HERE IS WHERE IS NECESSARY TO INCLUDE THE CONTENT -->
        
        
        <!-- Update User -->
        
        
         <div class="uploadCSVbox">
                   		<div class="Title"> <h3 class="hrUpdateCSV" >Update Student Table</h3></div>
                        <hr class="hrUpdateCSV">
                        
                            <div class="containerForm">
                                
                                
                                <form action="php/functions.php" method="post" enctype="multipart/form-data" name="CsvForm">
                                <div class="lineForm">
                                    <div class="line1Form"><input name="file" type="file" required /></div>
                                    <div class="line2Form"><input type="submit" name="updateStudentBtn" value="Upload"></div>
                                     
                                </div><!-- end lineForm -->
                             	<progress class="progress" value="0" max="100"></progress>
                                </form>
                                
                                
                             </div><!-- end containerForm -->   
                         
                                      
                                
                             
                   </div><!-- end uploadCSVbox -->
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
        
        
        
        
	<!--main content end-->
	
	<?php	include('include.php');	?>
	
	<!--script for this page-->
    <script  src="assets/js/TeamFunctions/UpdateData.js"></script>

