
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
   
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		    <form class="form-login">
		        <h2 class="form-login-heading">sign in now</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" placeholder="Username" id="username" autofocus>
		            <br>
		            <input type="password" class="form-control" placeholder="Password" id="password">
		            <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="https://accounts.temple.edu/selfcare/login.jsp" target="_blank"> Forgot Password?</a>
		
		                </span>
		            </label>
		            <button class="btn-theme btn-block" type="button" id="login_btn"><i class="fa fa-lock"></i> SIGN IN</button>
		            <hr>
		            
		    
		        </div>
		</form>
		         
             
               <!-- Modal 3 LOGIN EXPIRED -->
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
                  
                  
                  
                <div class="modal-body" id="loading"><img src="assets/img/ajax-loader.gif" /></div>  
                  
                  
		
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/Wizard_Functions/login.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>
    
    
    <!-- OPEN MODAL WINDOWS SESSION EXPIRED -->
    
    <?php

	if(isset($_GET['ExpiredSession'])){
		
		?>
        	<script>
				$('#boxMessageModal').html("Session expired, login again");
				$('#modalExpiration').click();
		    </script>
        
		<?php
    }

?>



  </body>
</html>
