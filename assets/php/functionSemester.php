<?php       
header('Content-type: text/json');
header("Access-Control-Allow-Origin:*");
require_once(dirname(__FILE__)).'/../core/init.php';





if(isset($_POST['getGradStudents'])){
	
	
	
	$results = array();
	
	$getGradStudent = new GradStudent();
	$Result_GradStudents = $getGradStudent->get_GradStudents();
	
	if($Result_GradStudents != 0){
		
		$results = $Result_GradStudents;
		$results['Status'] = "success";
		echo json_encode($results);
		
	}else{
		
		$results['Status'] = "error";
		echo json_encode($results);
		
	}
	
	
	
}



if(isset($_POST['semesters'])){
	
	
	$Semester = $_POST['semesters'];
	$results = array();
	
	$getGradStudent = new GradStudent();
	$Result_GradStudents = $getGradStudent->get_GradStudents_by_semester($Semester);
	
	if($Result_GradStudents != 0){
		
		$results = $Result_GradStudents;
		$results['Status'] = "success";
		echo json_encode($results, JSON_FORCE_OBJECT);
		
	}else{
		
		$results['Status'] = "error";
		echo json_encode($results);
		
	}
	
	
	
}


/* 
        if(isset($_POST['semesters']) === true && empty($_POST['semesters']) === false){
		require "/../core/connect.php";
                
		$GradStudentID = $sql_connection->prepare("
			SELECT GraduateStudentID
			FROM GRADUATE_STUDENT_TYPE
			WHERE `GRADUATE_STUDENT_TYPE`.`TermCodeStart` = '" . mysql_real_escape_string(trim($_POST['semesters'])) . "'
		");
		$GradStudentID->execute();
                
                //Header for Grad Student
                echo "<div class='lineHeader'>
                <div class='blockName'><i class='fa fa-user'></i>Student Name</div>

                <div class='blockCollege'><i class='fa fa-book'></i> College</div>
                <div class='blockAcademicStatus'><i class='fa fa-folder-open'></i> Academic Status </div>
                <div class='blockGPA'><i class='fa fa-star'></i> GPA</div>


                <div class='blockEmail'><i class='fa fa-envelope'></i> Email</div>
                <div class='tuidBlook'><i class='fa fa-key'></i> TU-ID</div>
                <div class='Action_Blook'><i class='fa fa-cogs'></i> Action</div>
                </div> <!-- end lineHeader -->"; // End of Grad Student Header
                
                //Table for Grad Student
                echo "<div class='bodyTable'>
                <div id='gradStudent'><a id='gradStudent'>Chapter 4</a>
                <table class='table table-striped table-advance table-hover draggable'>
                <tbody class='searchable' id='StudentTable'>";

                //Gets Grad Student base on semester
                $x = 0;
                while($row = $GradStudentID->fetch()){
                    $GradStudentQuery = $sql_connection->prepare("
                        SELECT GraduateStudentID, GraduateStudentNickname, GraduateApplicantID, GraduateStudentProgramStartDate,
                        GraduateStudentExpectedGraduationDate, GraduateStudentEmail, GraduateStudentSex, 
                        GraduateStudentAddressStreetLine1, GraduateStudentAddressStreetLine2, GraduateStudentAddressCity,
                        GraduateStudentAddressState, GraduateStudentAddressZip, GraduateStudentAddressPhoneNumber, 
                        GraduateStudentNotes, GraduateStudentRecievedFellowship, GraduateStudentDateAppliedToGraduate,
                        GraduateStudentInternshipCompanies
                        
                        FROM graduate_student
                        
                        WHERE `graduate_student`.`GraduateStudentID` = '" . trim($row[0]) . "'
                    ");
                    $GradStudentQuery->execute();
                    $GradStudent = $GradStudentQuery->fetch();
                    echo " <tr>"
                    . "<td>" . $GradStudent[0] . "</td>"
                    . "<td>" . $GradStudent[1] . "</td>"
                    . "<td>" . $GradStudent[2] . "</td>"
                    . "<td>" . $GradStudent[3] . "</td>"
                    . "<td>" . $GradStudent[4] . "</td>"
                    . "<td>" . $GradStudent[5] . "</td>"
                    . "<td>" . $GradStudent[6] . "</td>"
                    . "<td>" . $GradStudent[7] . "</td>"
                    . "<td>" . $GradStudent[8] . "</td>"
                    . "<td>" . $GradStudent[9] . "</td>"
                    . "<td>" . $GradStudent[10] . "</td>"
                    . "<td>" . $GradStudent[11] . "</td>"
                    . "<td>" . $GradStudent[12] . "</td>"
                    . "<td>" . $GradStudent[13] . "</td>"
                    . "<td>" . $GradStudent[14] . "</td>"
                    . "<td>" . $GradStudent[15] . "</td>"
                    . "<td>" . $GradStudent[16] . "</td>"
                    . "</tr>";
                }
                echo "</tbody>
                </table>
                </div>
                </div> <!-- end bodyTable -->"; // End of Grad Student Table
                
                
                $GradStudentInfo = $sql_connection->prepare("
			SELECT GraduateStudentID, StudentTypeID
			FROM graduate_student_type
			WHERE `graduate_student_type`.`TermCodeStart` = '" . mysql_real_escape_string(trim($_POST['semesters'])) . "'
		");
		$GradStudentInfo->execute();
                
                //Header for TA
                echo "<div class='lineHeader'>

                <div class='blockName'><i class='fa fa-user'></i> TA Name</div>

                <div class='blockCollege'><i class='fa fa-book'></i> College</div>
                <div class='blockAcademicStatus'><i class='fa fa-folder-open'></i> Academic Status </div>
                <div class='blockGPA'><i class='fa fa-star'></i> GPA</div>


                <div class='blockEmail'><i class='fa fa-envelope'></i> Email</div>
                <div class='tuidBlook'><i class='fa fa-key'></i> TU-ID</div>
                <div class='Action_Blook'><i class='fa fa-cogs'></i> Action</div>
                </div> <!-- end lineHeader -->"; // End of TA Header
                
                //Table for TA
                echo "<div class='bodyTable'>
                <div id='TA'>
                <table class='table table-striped table-advance table-hover draggable'>
                <tbody class='searchable' id='StudentTable'>";
                
                //Gets TA
                while($studentTypeID = $GradStudentInfo->fetch()){
                    
                    if($studentTypeID[1] == 3){
                        $TAGradName = $sql_connection->prepare("
                        SELECT GraduateStudentNickname
                        FROM graduate_student
                        WHERE `graduate_student`.`GraduateStudentID` = '" . trim($studentTypeID[0]) . "'
                        ");
                        $TA = $sql_connection->prepare("
                        SELECT TAHalfOrFull, TAStipendLevel, TARequisitionCompletedDate, 
                        TARequistionSubmittedDate, TAAwardLetterRecievedDate, TAAwardLetterReturnedDate,
                        TATuitionRemissionCompletedDate, TATuitionRemissionSumbittedtoCollegeDate, TATuitionRemissionSubmittedToBursar
                        
                        FROM teaching_assistant
                        WHERE `teaching_assistant`.`GraduateStudentID` = '" . trim($studentTypeID[0]) . "'
                        ");
                        $TAGradName->execute();
                        $TA->execute();
                        
                        $TAName = $TAGradName->fetch();
                        $TAinfo = $TA->fetch();
                        echo "<tr>"
                        . "<td>" . $TAName[0] . "</td>"
                        . "<td>" . $TAinfo[0] . "</td>"
                        . "<td>" . $TAinfo[1] . "</td>"
                        . "<td>" . $TAinfo[2] . "</td>"
                        . "<td>" . $TAinfo[3] . "</td>"
                        . "<td>" . $TAinfo[4] . "</td>"
                        . "<td>" . $TAinfo[5] . "</td>"
                        . "<td>" . $TAinfo[6] . "</td>"
                        . "<td>" . $TAinfo[7] . "</td>"
                        . "<td>" . $TAinfo[8] . "</td>"
                        . "</tr>";
                    }
                }
                echo "</tbody>
                </table>
                </div>
                </div> <!-- end bodyTable -->"; // End of TA Table
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                $GradStudentInfo = $sql_connection->prepare("
			SELECT GraduateStudentID, StudentTypeID
			FROM graduate_student_type
			WHERE `graduate_student_type`.`TermCodeStart` = '" . mysql_real_escape_string(trim($_POST['semesters'])) . "'
		");
		$GradStudentInfo->execute();
                
                //Header for RA
                echo "<div class='lineHeader'>

                <div class='blockName'><i class='fa fa-user'></i> RA Name</div>

                <div class='blockCollege'><i class='fa fa-book'></i> College</div>
                <div class='blockAcademicStatus'><i class='fa fa-folder-open'></i> Academic Status </div>
                <div class='blockGPA'><i class='fa fa-star'></i> GPA</div>


                <div class='blockEmail'><i class='fa fa-envelope'></i> Email</div>
                <div class='tuidBlook'><i class='fa fa-key'></i> TU-ID</div>
                <div class='Action_Blook'><i class='fa fa-cogs'></i> Action</div>
                </div> <!-- end lineHeader -->"; // End of RA Header
                
                //Table for RA
                echo "<div class='bodyTable'>
                <div id='TA'>
                <table class='table table-striped table-advance table-hover draggable'>
                <tbody class='searchable' id='StudentTable'>";
                
                //Gets RA
                while($studentTypeID = $GradStudentInfo->fetch()){
                    
                    if($studentTypeID[1] == 2){
                        $RAGradName = $sql_connection->prepare("
                        SELECT GraduateStudentNickname
                        FROM graduate_student
                        WHERE `graduate_student`.`GraduateStudentID` = '" . trim($studentTypeID[0]) . "'
                        ");
                        $RA = $sql_connection->prepare("
                        SELECT RAOfficeLocation, RAHalfOrFull, RAStipendLevel, 
                        RARequisitionCompleted, RARequisitionSubmitted, RAAwardLetterRecieved, 
                        RAAwardLetterReturned, RATuitionRemissionCompleted, RATuitionRemissionSubmittedToBursar
                        
                        FROM research_assistant
                        WHERE `research_assistant`.`GraduateStudentID` = '" . trim($studentTypeID[0]) . "'
                        ");
                        $RAGradName->execute();
                        $RA->execute();
                        
                        $RAName = $RAGradName->fetch();
                        $RAinfo = $RA->fetch();
                        echo "<tr>"
                        . "<td>" . $RAName[0] . "</td>"
                        . "<td>" . $RAinfo[0] . "</td>"
                        . "<td>" . $RAinfo[1] . "</td>"
                        . "<td>" . $RAinfo[2] . "</td>"
                        . "<td>" . $RAinfo[3] . "</td>"
                        . "<td>" . $RAinfo[4] . "</td>"
                        . "<td>" . $RAinfo[5] . "</td>"
                        . "<td>" . $RAinfo[6] . "</td>"
                        . "<td>" . $RAinfo[7] . "</td>"
                        . "<td>" . $RAinfo[8] . "</td>"
                        . "</tr>";
                    }
                }
                echo "</tbody>
                </table>
                </div>
                </div> <!-- end bodyTable -->"; // End of RA Table
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                //Header for Courses
                echo "<div class='lineHeader'>

                <div class='blockName'><i class='fa fa-book'></i> Course</div>

                <div class='blockCollege'><i class='fa fa-book'></i> College</div>
                <div class='blockAcademicStatus'><i class='fa fa-folder-open'></i> Academic Status </div>
                <div class='blockGPA'><i class='fa fa-star'></i> GPA</div>


                <div class='blockEmail'><i class='fa fa-envelope'></i> Email</div>
                <div class='tuidBlook'><i class='fa fa-key'></i> TU-ID</div>
                <div class='Action_Blook'><i class='fa fa-cogs'></i> Action</div>
                </div> <!-- end lineHeader -->";//End of Courses Header
                
                //Table for Courses
                echo "<div class='bodyTable'>
                <div id='courses'><a id='course'>Course</a>
                <table class='table table-striped table-advance table-hover draggable'>
                <tbody class='searchable' id='StudentTable'>";
                
                $courseQuery = $sql_connection->prepare("
			SELECT CourseID, CourseStartDate, CourseName, CourseNumber, CourseDescription, OrganizationID, TermCode
			FROM course
			WHERE `course`.`TermCode` = '" . mysql_real_escape_string(trim($_POST['semesters'])) . "'
		");
		$courseQuery->execute();
                
                while($course = $courseQuery->fetch()){
                    echo "<tr>"
                    . "<td>" . $course[0] . "</td>"
                    . "<td>" . $course[1] . "</td>"
                    . "<td>" . $course[2] . "</td>"
                    . "<td>" . $course[3] . "</td>"
                    . "<td>" . $course[4] . "</td>"
                    . "<td>" . $course[5] . "</td>"
                    . "<td>" . $course[6] . "</td>"
                    . "</tr>";
                }
                echo "</tbody>
                </table>
                </div>
                </div> <!-- end bodyTable -->"; // End of Course Table
	}
	
	*/
?>