<?php
include_once 'assets/core/init.php';
// session_start();

// if($_SESSION['UserObject'] == ""){
	// header("Location: Login.php");
// }else{
	
		// if(time() - $_SESSION['Time'] < 1800){
			// Regenerate the time other 30 minutes
			// $_SESSION['Time'] = time();
			
			// $UserObject = $_SESSION['UserObject'];
			// print_r($UserObject);
		// }else{
			// header("Location: Login.php?ExpiredSession");
		// }
// }


?>

<!--Modified by Connor Tang, 10,13,2014-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Wizard</title>
    <link href="assets/img/icon/logo.ico" rel="icon" type="image/x-icon"/>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/js/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />  
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>

  <section id="container" >
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.php" class="logo" target="_self"><img src="assets/img/logo.png" onmouseover="this.src='assets/img/logohover.png'" onmouseout="this.src='assets/img/logo.png'" alt="logo Temple" id="logoHeader1"><img src="assets/img/logoHeader2.png" alt="logo Temple" id="logoHeader2"></a>
            <!--logo end-->
            
			<!---Menu start-->
			<div id='cssmenu'>
				<ul>
				   <li>
					<a href='#'><span>Programs</span></a>
					<ul>
						<li><a href='Graduate_Programs.php'><span>Graduate</span></a></li>
						<li><a href='Undegrad_Programs.php'><span>International</span></a></li>
					</ul>
				   </li>
				   <li><a href='#'><span>Forms</span></a>
					<ul>
						<li><a href='Form_display.php'><span>Display Form</span></a></li>
						<li><a href='Form_Create.php'><span>Create Form</span></a></li>
						<li><a href='Form_PDF.php'><span>Upload PDF</span></a></li>
					</ul>				   
				   </li>
				   <li><a href='#'><span>Organizer</span></a>
					<ul>
						<li><a href='Calendar.php'><span>Calendar</span></a></li>
						<li><a href='Todo_list.php'><span>Todo List</span></a></li>
					</ul>				   
				   </li>
				   <li class='last'><a href='#'><span>Administrative</span></a>
					<ul>
						<li><a href='Students.php'><span>Students</span></a></li>
						<li><a href='Faculties.php'><span>Faculties</span></a></li>
						<li><a href='UserMangerFrame.php'><span>Permission Manager</span></a></li>
					</ul>				   
				   </li>
				</ul>
			</div>
			<!---Menu end-->
            
            <div class="top-menu">
            	<ul class="nav pull-right top-menu" id="userMenu">
                
                  <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        
                            <a data-toggle="dropdown" class="dropdown-toggle linkUser" href="index.php#">
                               <img src="assets/img/avatar.png" alt="avatar" />
                            </a>
                            

                        <ul class="dropdown-menu boxMenuUser" id="MenuUser">
                         
									<li class="userLiMenu">
										<a href="#">
											<i class="fa fa-user"></i>
											<span>Profile</span>
										</a>
									</li>
									<li class="userLiMenu">
										<a href="ajax/page_messages.html" class="ajax-link">
											<i class="fa fa-envelope"></i>
											<span>Messages</span>
										</a>
									</li>
									
									<li class="userLiMenu">
										<a href="ajax/calendar.html" class="ajax-link">
											<i class="fa fa-tasks"></i>
											<span>Tasks</span>
										</a>
									</li>
									
									<li class="userLiMenu">
										<a href="assets/php/functionLogin.php?logout">
											<i class="fa fa-power-off"></i>
											<span>Logout</span>
										</a>
									</li>
					  </ul>
                                
                                
                                
                                
                    </li> <!-- end dropdown -->
                    <li id="UserNameTopHeader">Welcome, <?php //echo $UserObject['Name']; ?> </li>
            	</ul>          
            </div>
			
			
			<!--  notification start -->
			<div class="nav notify-row" id="top_menu">    
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar" id="dropdown-task">
                            <div class="notify-arrow notify-arrow-green" id="notify-arrow-task"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">DashGum Admin Panel</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Product Development</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Payments Sent</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox" id="dropdown-inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/useravatar24.png"></span>
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/useravatar24.png"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, I need your help with this.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/useravatar24.png"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Love your new Dashboard.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/useravatar24.png"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please, answer asap.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                    
                    
                </ul>
                <!--  notification end -->
            </div>
            
             
                
          
    </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              	  	
                  <li class="mt">
                      <a class="active" href="index.php">
                          <i class="fa fa-home"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Administrative</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="Students.php">Students</a></li>
                          <li><a  href="Faculties.php">Faculties</a></li>
                          <li><a  href="UserMangerFrame.php">Permission Manager</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Organizer</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="Calendar.php">Calendar</a></li>
                          <li><a  href="Todo_list.php">Todo List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Programs</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="Undegrad_Programs.php">Undegraduate Programs</a></li>
                          <li><a  href="Graduate_Programs.php">Graduate Programs</a></li>
                          <li><a  href="International.php">International</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Forms</span>
                      </a>
                      <ul class="sub">
                      	  <li><a  href="Form_display.php">Display Forms</a></li>
                          <li><a  href="Form_Create.php">Create Form</a></li>
                          <li><a  href="Form_PDF.php">Update PDF's Form</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="UpdateData.php" >
                          <i class="fa fa-cog"></i>
                          <span>Update Data</span>
                      </a>
                  </li>
                  

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
	  <a href="#" class="scrollToTop"></a>	  