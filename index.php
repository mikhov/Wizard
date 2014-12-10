<?php
include('header.php');
?>

	<!--script for this page-->
   
   
	
   
<section id="main-content">
	<section class="wrapperIndex"> 
	<!--main content start-->
   	<!-- INCLUDE THE CODE HERE -->

    
   
    
     <div id="myCarousel" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">
            <div class="active item">
                    <img src="assets/img/Temple_Img/ImageWizard4.png" alt="Img Temple" />
                    <div class="carousel-caption ">
                        <h4 class="back-light">Wizard is a student record tracking system for the CIS Department of Temple University to track independent studies, Master and Ph.D. project</h4>
                   </div>
            </div>
            <div class="item">
            		<img src="assets/img/Temple_Img/ImageWizard1.png" alt="Img Temple" />
                  <div class="carousel-caption ">
                    <h4 class="back-light">Wizard is design to be used by admins, students and instructors. Wizard system is able to tracking students, faculties, student progress an academic program tracking. </h4>
                 </div>
            </div>
            <div class="item">
            
            		<img src="assets/img/Temple_Img/ImageWizard2.png" alt="Img Temple" />
                    
                  <div class="carousel-caption ">
                    <h4 class="back-light">Wizard is design to be used in all kind of devices like tablet, phones or computer</h4>
               	</div>
            </div>
          </div>
          <!-- Carousel nav -->
          <a class="left controls" href="#myCarousel" data-slide="prev">&lsaquo;</a>
          <a class="right controls" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
   
	<h4 class="labelIndex">Welcome to Wizard</h4>
    
	<!--main content end-->
	</section>
</section>
	
	<?php	include('include.php');	?>
    
    <script>
    $('.carousel').carousel({
	  interval: 5000
	})
    </script>
  
  