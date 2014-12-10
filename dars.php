<?php
include('header.php');
?>
<section id="main-content">
	<section class="wrapper"> 
	<!--main content start-->
   	<!-- INCLUDE THE CODE HERE -->
	
	
	
	
	
	
	
	<h1>Graduate Degree Audit</h1>
    
    <hr>
            <table class="myTable">
                <tr class="myTableRow">
                    <th class="myTableRowHeader"></th>
					<div id="dars-header">
                    <h3>DARS Header</h3>
                    <table style="width: 100%">
                        <tr class="myTableRow">
                            <td>
                                <ul class="labelDars">
                                    <li>Student Name: </li>
                                    <li>Nickname: </li>
                                    <li>TUid: </li>
                                    <li>Program 1: </li>
                                    <li>Program 2: </li>
                                    <li>Program Start Date: </li>
                                    <li>Expected Graduation Date: </li>
                                    <li>Email Address: </li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li id='fullName'></li>
                                    <li>Nickname</li>
                                    <li id='Student_TuID'></li>
                                    <li id='StudentProgram'></li>
                                    <li>Program2</li>
                                    <li>Program Start Date</li>
                                    <li id='ExpectedGraduation'></li>
                                    <li id='StudentEmail'></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="labelDars">
                                    <li>Hours attempted: </li>
                                    <li>Hours passed: </li>
                                    <li>GPA: </li>
                                    <li>Transfer hours: </li>
                                    <li>Cumulative Credits:</li>
                                    <li>Cumulative Quality Points: </li>
                                    <li>Number of Credits Registered: </li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li id='HoursAttempted'></li>
                                    <li id='HoursPassed'></li>
                                    <li id='GPA'></li>
                                    <li id='TransferHours'></li>
                                    <li id='CumulateCredits'></li>
                                    <li id='CumulativeQP'></li>
                                    <li id='CreditsRegistered'></li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div> <!--end dars-header-->
                </tr>
                
				 <hr>
         
					<div id="AcademicTab">
                    	<h4>Academic Information</h4>
                	</div>
                    
               	<hr>
                
                
                
              
            
               <div role="tabpanel" id="AcademicTabDiv">
               
 <ul id="myTab" class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#list-1-tabs-1" id="classes-tab" role="tab" data-toggle="tab" aria-controls="list-1-tabs-1" aria-expanded="false">Current Classes</a></li>
	  
      <li role="presentation"><a href="#list-1-tabs-2" role="tab" id="complete-tab" data-toggle="tab" aria-controls="list-1-tabs-2">Completed</a></li>
      
      <li role="presentation"><a href="#list-1-tabs-3" role="tab" id="RCourses-tab" data-toggle="tab" aria-controls="list-1-tabs-3">Core Courses</a></li>
	  
	  <li role="presentation"><a href="#list-1-tabs-6" role="tab" id="Didactic-tab" data-toggle="tab" aria-controls="list-1-tabs-6">Didactic Courses</a></li>
      
      <li role="presentation"><a href="#list-1-tabs-4" role="tab" id="Requirements-tab" data-toggle="tab" aria-controls="list-1-tabs-4">Core Remaining</a></li>
        
      <li role="presentation"><a href="#list-1-tabs-5" role="tab" id="Transfer-tab" data-toggle="tab" aria-controls="list-1-tabs-5">Transfer</a></li>
		

		
      
      
    </ul>
    
    
    <div id="myTabContent" class="tab-content">
    
      <div role="tabpanel" class="tab-pane fade active in" id="list-1-tabs-1" aria-labelledby="classes-tab">
        
        <p>The current classes section.</p>
        <p>The classes a student is currently taking will be added here.</p>
							<form name="CurrentClassesForm">
								<label>Course: </label>
								<select name="Courses"></select>
								<button id="addcourse">Add another course</button>
							</form>
      </div>
      
      <div role="tabpanel" class="tab-pane fade" id="list-1-tabs-2" aria-labelledby="complete-tab">
			
			<table class="table table-striped"> 
				<tr class = "danger"> 
					<td> Course Name </td>
					<td> Course Number </td>
					<td> Section Number </td>
					<td> Student Grade </td>
					<td> Course Description </td>
					<td> Course Start Date </td>			
				</tr>
			
				<tbody id="CourseInformation">	
				<!--- Info filled with AJAX/Jquery				--->
				</tbody>	
			</table>
			
			
			
      </div>
      
       <div role="tabpanel" class="tab-pane fade" id="list-1-tabs-3" aria-labelledby="RCourses-tab">
	   
			<table class="table table-striped"> 
				<tr class = "danger"> 
					<td> Course Number </td>
					<td> Course Name </td>
					<td> Course Description </td>
				</tr>
			
			<tbody id="RequiredCoursesInfo">	
				<!--- Info filled with AJAX/--->
			</tbody>
			</table>
      </div>
      
      <div role="tabpanel" class="tab-pane fade" id="list-1-tabs-4" aria-labelledby="Requirements-tab">
			<table class="table table-striped"> 
				<tr class = "danger"> 
					<td> Course Number </td>
					<td> Course Name </td>
					<td> Course Description </td>
				</tr>
			
			<tbody id="CourseRemaining">	
				<!--- Info filled with AJAX/--->
				
			</tbody>
			</table>
			
      </div>
	  
	  <div role="tabpanel" class="tab-pane fade" id="list-1-tabs-6" aria-labelledby="Didactic-tab">
		<p> Select five, but choose at most four for inclusion in Qualifying Exam: </p>
			<table class="table table-striped"> 
				<tr class = "danger"> 
					<td> Course Number </td>
					<td> Course Name </td>
					<td> Course Description </td>
				</tr>
			
			<tbody id="DidacticCourses">	
				<!--- Info filled with AJAX/--->
				
			</tbody>
			</table>
		   
      </div>
	  
       <div role="tabpanel" class="tab-pane fade" id="list-1-tabs-5" aria-labelledby="Transfer-tab">
        	<p>The transfer section.</p>
           <p>This section will display a list the student's tranfered classes if they have any.</p>
		   
		   <table class="table table-striped"> 
				<tr class = "danger"> 
					<td> Course Number </td>
					<td> Course Name </td>
					<td> Course Description </td>
				</tr>
			
			<tbody id="">	
				<!--- Info filled with AJAX/--->
				
			</tbody>
			</table>
		   
      </div>
      
      
    </div>
  </div> <!-- end tabpanel -->
                
                
                
                
                
             <!-- breaking line to identify differents areas -->
             
             
             <br>
                
                
                
                
                
                
                
       
       
              
                 <hr>
					<div id="AcademicFormTab">
						<h4>Forms (PhD students only):</h4>
					</div>
				  <hr>
				
                
                
                
                
                
                
                
              
                            
                              <div role="tabpanel" id="AcademicFormTabDiv">
               
 <ul id="myTab" class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#list-2-tabs-1" id="Qualify-tab" role="tab" data-toggle="tab" aria-controls="list-2-tabs-1" aria-expanded="false">Qualifying Exam</a></li>
      <li role="presentation"><a href="#list-2-tabs-2" role="tab" id="PrelimI-tab" data-toggle="tab" aria-controls="list-2-tabs-2">Prelim I</a></li>
      
      <li role="presentation"><a href="#list-2-tabs-3" role="tab" id="PrelimII-tab" data-toggle="tab" aria-controls="list-2-tabs-3">Prelim II</a></li>
      
        <li role="presentation"><a href="#list-2-tabs-4" role="tab" id="Dissertation-tab" data-toggle="tab" aria-controls="list-2-tabs-4">Dissertation Defense</a></li>
      
      
    </ul>
    
    
    <div id="myTabContent" class="tab-content">
    
      <div role="tabpanel" class="tab-pane fade active in" id="list-2-tabs-1" aria-labelledby="Qualify-tab">
       			<p>The Qualifying Exam section</p>
              <p>This section will contain forms pertaining to a student's qualifying exam.</p>
      </div>
      
      <div role="tabpanel" class="tab-pane fade" id="list-2-tabs-2" aria-labelledby="PrelimI-tab">
       		 	<p>The Prelim I section</p>
              <p>This section will contain forms pertaining to a student's Prelim I presentation.</p>
      </div>
      
       <div role="tabpanel" class="tab-pane fade" id="list-2-tabs-3" aria-labelledby="PrelimII-tab">
        		<p>The Prelim II section</p>
             	<p>This section will contain forms pertaining to a student's Prelim II presentation.</p>
      </div>
      
      <div role="tabpanel" class="tab-pane fade" id="list-2-tabs-4" aria-labelledby="Dissertation-tab">
        		<p>The Dissertation Defense section</p>
             	<p>This section will contain forms pertaining to a student's Dissertation Defense presentation.</p>
      </div>
      
      
      
    </div>
  </div> <!-- end tabpanel -->
                
                
                
                <br>
                
                
                
                
                
           
           

                <hr>
                	<div id="NotesTab">
                    	<h4>Notes</h4>
                	</div>
              	 <hr>
				
               
              <div role="tabpanel" id="NotesTabDiv">
               
 <ul id="myTab" class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#list-3-tabs-1" id="StudentNotes-tab" role="tab" data-toggle="tab" aria-controls="list-3-tabs-1" aria-expanded="false">Qualifying Exam</a></li>
      <li role="presentation"><a href="#list-3-tabs-2" role="tab" id="Tab2-tab" data-toggle="tab" aria-controls="list-3-tabs-2">Prelim I</a></li>
      
      <li role="presentation"><a href="#list-3-tabs-3" role="tab" id="Tab3-tab" data-toggle="tab" aria-controls="list-3-tabs-3">Prelim II</a></li>
      
       
    </ul>
    
    
    <div id="myTabContent" class="tab-content">
    
      <div role="tabpanel" class="tab-pane fade active in" id="list-3-tabs-1" aria-labelledby="StudentNotes-tab">
       			 <p>The Student Notes section</p>
				<p>This is the area to create, view and edit notes about students.</p>
      </div>
      
      <div role="tabpanel" class="tab-pane fade" id="list-3-tabs-2" aria-labelledby="Tab2-tab">
       		 	<p>Tab #2</p>
              
      </div>
      
       <div role="tabpanel" class="tab-pane fade" id="list-3-tabs-3" aria-labelledby="Tab3-tab">
        		<p>Tab #3</p>
      </div>
      
     
      
      
      
    </div>
  </div> <!-- end tabpanel -->
                
                
                
                <br>
              
              
              
              
              <hr>
					<div id="ExamsTab"> 
						<h4>Qualifying Exams (PhD students only):</h4> 
					</div> 
				<hr>

               
               
               
               
               
               
                <div role="tabpanel" id="ExamsTabDiv">
               
 <ul id="myTab" class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#list-4-tabs-1" id="StudentNotes-tab" role="tab" data-toggle="tab" aria-controls="list-4-tabs-1" aria-expanded="false">Course Options</a></li>
      <li role="presentation"><a href="#list-4-tabs-2" role="tab" id="Tab22-tab" data-toggle="tab" aria-controls="list-4-tabs-2">Tab 22</a></li>
      
      <li role="presentation"><a href="#list-4-tabs-3" role="tab" id="Tab23-tab" data-toggle="tab" aria-controls="list-4-tabs-3">Tab 23</a></li>
      
       
    </ul>
    
    
    <div id="myTabContent" class="tab-content">
    
      <div role="tabpanel" class="tab-pane fade active in" id="list-4-tabs-1" aria-labelledby="StudentNotes-tab">
       			 <p>The Course Options section.</p>
               <p>Here it will display all the courses eligible for the qualifying exam.  Then there would be options to check the ones there were on the qualifying exam and add a grade.</p>
      </div>
      
      <div role="tabpanel" class="tab-pane fade" id="list-4-tabs-2" aria-labelledby="Tab22-tab">
       		 	<p>Tab #2 Content</p>
              
      </div>
      
       <div role="tabpanel" class="tab-pane fade" id="list-4-tabs-3" aria-labelledby="Tab23-tab">
        		<p>Tab #2 Content</p>
      </div>
      
     
      
      
      
    </div>
  </div> <!-- end tabpanel -->
                
                
                
                <br>

	
	
	
	
	
	
	
	<!--main content end-->
	</section>
</section>

	<!-- HIDE INPUT TO SAVE STUDENT ID -->
    	<input type="hidden" id="inputStudent_Id" value="<?php if(isset($_GET['Student_Id'])){ echo $_GET['Student_Id'];}?>">
	
	<?php	include('include.php');	?>

	<!--script for this page-->
	<script src="assets/js/Wizard_Functions/dars.js"></script> 
    
   