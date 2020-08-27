<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>

  	 <?php include 'global/sections/head.php';?>

  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <!-- Page Loader-->

     <?php include 'global/sections/page-loader.php';?>

    <!-- Page-->
    <div class="page">
      <!-- Page Header -->
      <header class="page-header section" data-preset='{"title":"Header Fullwidth","category":"headers","reload":true,"id":"header-fullwidth"}'>

      	<!-- RD Navbar-->
      <?php include 'global/sections/nav.php';?>
        
      </header>
      
      
<!-- *** Page Content Goes Here *** -->

      <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom bg-cover bg-image" style="background-image: url(images/baycomm/cover-walkie-4.jpg);">
        <div class="container">
          <h2 class="breadcrumbs-custom__title">Services</h2>
          <ul class="breadcrumbs-custom__path">
            <li><a href="index.php">Home</a></li>
            <li class="active">Services</li>
          </ul>
        </div>
      </section>


      <!-- Services-->
      <section class="section section-md bg-gray-4 novi-background text-center" data-preset='{"title":"Content Box 8","category":"content-boxes","reload":true,"id":"content-box-8"}'>
        <div class="container">
          <h2>Services</h2>
          <br />
          <h6>Here’s are the services we offer:</h6>
          <div class="row justify-content-md-center justify-content-lg-start row-30">
          	
            <div class="col-md-10 col-lg-4">
              <!-- Block vacancy-->
              <div class="block-vacancy">
                <h4 class="block-vacancy__title" style="text-transform: uppercase; color:#31a556;">System Design</h4>
                <br />
                <h6>Information posted here.</h6>
	               	<ul class="list-marked list-2-columns">
	                  <li>Point Number One</li>
	                  <li>Point Number Two</li>
	                  <li>Point Number Three</li>
	                  <li>Point Number Four</li>
	                </ul>
	              <a class="button button-dark-outline" href="contacts.php">Contact for More Information</a>
	           </div>
            </div>
            
            <div class="col-md-10 col-lg-4">
              <!-- Block vacancy-->
              <div class="block-vacancy">
                <h4 class="block-vacancy__title" style="text-transform: uppercase; color:#31a556;">Trunked Radio</h4>
                <br />
                <h6>Information posted here.</h6>
	               	<ul class="list-marked list-2-columns">
	                  <li>Point Number One</li>
	                  <li>Point Number Two</li>
	                  <li>Point Number Three</li>
	                  <li>Point Number Four</li>
	                </ul>
	              <a class="button button-dark-outline" href="contacts.php">Contact for More Information</a>
	        	</div>
            </div>
            
            <div class="col-md-10 col-lg-4">
              <!-- Block vacancy-->
              <div class="block-vacancy">
                <h4 class="block-vacancy__title" style="text-transform: uppercase; color:#31a556;">Engineering</h4>
                <br />
                <h6>Information posted here.</h6>
	               	<ul class="list-marked list-2-columns">
	                  <li>Point Number One</li>
	                  <li>Point Number Two</li>
	                  <li>Point Number Three</li>
	                  <li>Point Number Four</li>
	                </ul>
	              <a class="button button-dark-outline" href="contacts.php">Contact for More Information</a>
            </div>
            
          <!--end columns -->
          
          </div>
        </div>
      </section>

      
<!-- *** Page Content Ends Here *** -->

      <!-- Page Footer-->
     <?php include 'global/sections/footer.php';?>
    </div>

    </div>
    <!-- Global Mailform Output -->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>