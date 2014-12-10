
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Juan Huertas-Fernandez">
   

    <title>Wizard</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->   
     <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquert.form.js"></script> 
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="Register-page">
	  	<div class="container">
	  	
		      <form action="assets/PHP/functionLogin.php" method="post" enctype="multipart/form-data" id="formNewUser">
              	
		        <h2 class="form-RequestPass-heading" id="RequestPasswordTitle">Request Password</h2>
		        <div class="login-wrap" id="RequestBox">
                
                
                	<!-- This box is the menu to hold the image -->
                	<div class="panel panel-default" id="boxImgRequest">
                        	
                           <div class="media-body" id="imgBox">
                            	<img  class="media-object" src="assets/img/noImg.png" alt="Userimg" id="BoxUserImg"/ >
                           </div>
                           <div id="inputFileRequest">
                           		<input type="file" class="form-control" name="file" id="file">
                                
                                
                                <div class="progress">
                              <div class="progress-bar progress-bar-striped active"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                <span class="sr-only">0% Complete</span>
                              </div>
                            </div>
                        	</div>
                	</div>
                
		            <input type="text" class="form-control" name="EmailNewUser" placeholder="Email" id="TempleEmailRequest" 
                    value="<?php if($_GET['Email_Request'] != "" || $_GET['Email_Request'] != null){ echo $_GET['Email_Request']; } ?>" readonly>
		            <br>
		            <input type="password" class="form-control" placeholder="Password" name="password_Request" id="password_Request" autofocus required>
                    <br>
                    <input type="password" class="form-control" placeholder="Re-Password" name="re_password_Request" id="re_password_Request" required>
		            <br>
                    
              
                    <input type="hidden" name="Student_Id" value="<?php if($_GET['StudentId'] != "" || $_GET['StudentId'] != null){ echo $_GET['StudentId']; } ?>">
                    
		            <button class="btn btn-theme btn-block" name="NewUserRegister" type="submit" id="NewUserRegister"><i class="fa fa-lock"></i> REQUEST PARSWORD</button>
		            <hr>
		            
		            
		            
		
		        </div> <!-- end RequestBox -->
		
		       
		      </form> 
                  
                     <!-- Modal 3 AlertBox-->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModalMessages" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Wizard Alert</h4>
                                  <a data-toggle="modal" id="modalMessages" href="RequestPassword.php#myModalMessages"></a>
		                      </div>
                               <div class="modal-body" id="bodyAlertMessageBox">
		                          <h4 class="modal-dialog" id="boxMessageModalRequestPass"></h4>
								
		                      </div>
		                      
		                      
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
                  
                  
                  
                  
                  
                  
			  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->

    <script src="assets/js/TeamFunctions/login.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
       // $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>
 
    
    


  </body>
</html>
