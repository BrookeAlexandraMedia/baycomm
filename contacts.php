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
      <section class="breadcrumbs-custom bg-cover bg-image" style="background-image: url(images/baycomm/radio-grey.jpg);">
        <div class="container">
          <h2 class="breadcrumbs-custom__title">Contacts</h2>
          <ul class="breadcrumbs-custom__path">
            <li><a href="index.html">Home</a></li>
            <li class="active">Contacts</li>
          </ul>
        </div>
      </section>

      <!-- Get in Touch-->
      <section class="section section-lg bg-default novi-background">
        <div class="container">
          <div class="layout-bordered">
            <div class="layout-bordered__main text-center">
              <div class="layout-bordered__main-inner">
                <h3>Get in Touch</h3>
                <p>We are available 24/7 by fax, e-mail or by phone. You can also use our quick contact form to ask a question about our services and projects.</p>
                <!-- RD Mailform-->
                <form method="post" action="email/contact-form.php">
                  <div class="row align-items-md-end row-20">
                  	
                    <div class="col-md-12">
                      <div class="form-wrap">
                        <input class="form-input" id="contact-first-name" type="text" name="name" data-constraints="@Required">
                        <label class="form-label" for="contact-first-name">Name</label>
                      </div>
                    </div>
                    
                    <div class="col-md-12">
                      <div class="form-wrap">
                        <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                        <label class="form-label" for="contact-email">E-mail</label>
                      </div>
                    </div>
                    
                    <div class="col-md-12">
                      <div class="form-wrap">
                        <input class="form-input" id="contact-subject" type="text" name="subject" data-constraints="@Required">
                        <label class="form-label" for="contact-subject">Subject</label>
                      </div>
                    </div>
                    
                    <!--<div class="col-md-6">
                      <div class="form-wrap">
                        <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Numeric @Required">
                        <label class="form-label" for="contact-phone">Phone</label>
                      </div>
                    </div> -->
                    
                    <div class="col-sm-12">
                      <div class="form-wrap">
                        <label class="form-label" for="contact-message">Your Message</label>
                        <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <button class="button button-block button-primary" type="submit" name="submit">Send Message</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="layout-bordered__aside">
              <div class="layout-bordered__aside-item">
                <p class="heading-8">Get social </p>
                <ul class="list-inline-xs">
                  <li><a class="icon icon-sm icon-default fa fa-facebook" href="#"></a></li>
                  <li><a class="icon icon-sm icon-default fa fa-twitter" href="#"></a></li>
                  <li><a class="icon icon-sm icon-default fa fa-google" href="#"></a></li>
                  <li><a class="icon icon-sm icon-default fa fa-youtube" href="#"></a></li>
                </ul>
              </div>
              <div class="layout-bordered__aside-item">
                <p class="heading-8">Phone</p>
                <div class="unit flex-row unit-spacing-xxs">
                  <div class="unit-left"><span class="icon novi-icon icon-sm icon-primary material-icons-local_phone"></span></div>
                  <div class="unit-body"><a href="tel:#">Toll-Free: 1 (800) 825-0332</a></div>
                </div>
                
                <div class="unit flex-row unit-spacing-xxs">
                  <div class="unit-left"><span class="icon novi-icon icon-sm icon-primary material-icons-local_phone"></span></div>
                  <div class="unit-body"><a href="tel:#">Wilmington, DE: 1 (302) 254-8100</a></div>
                </div>
                
                <div class="unit flex-row unit-spacing-xxs">
                  <div class="unit-left"><span class="icon novi-icon icon-sm icon-primary material-icons-local_phone"></span></div>
                  <div class="unit-body"><a href="tel:#">Philadelphia Metro Area: 1 (610) 358-3620</a></div>                  
                </div>
                
                <div class="unit flex-row unit-spacing-xxs">
                  <div class="unit-left"><span class="icon novi-icon icon-sm icon-primary material-icons-local_phone"></span></div>
                  <div class="unit-body"><a href="tel:#">South Jersey: 1 (609) 365-1850</a></div>                                    
                </div>
                
                
              </div>
              <div class="layout-bordered__aside-item">
                <p class="heading-8">E-mail</p>
                <div class="unit flex-row unit-spacing-xxs">
                  <div class="unit-left"><span class="icon novi-icon icon-sm icon-primary mdi mdi-email-outline"></span></div>
                  <div class="unit-body"><a href="mailto:#">info@fleetcall.net</a></div>
                </div>
              </div>
              <div class="layout-bordered__aside-item">
                <p class="heading-8">Address</p>
                <div class="unit flex-row unit-spacing-xxs">
                  <div class="unit-left"><span class="icon novi-icon icon-sm icon-primary material-icons-location_on"></span></div>
                  <div class="unit-body"><a href="#">Wilmington, DE</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Google Map-->
      <section class="section" data-preset='{"title":"Map fullwidth","category":"maps","reload":true,"id":"map-fullwidth"}'>
        <!--Please, add the data attribute data-key="YOUR_API_KEY" in order to insert your own API key for the Google map.-->
        <!--Please note that YOUR_API_KEY should replaced with your key.-->
        <!--Example: <div class="google-map-container" data-key="YOUR_API_KEY">-->
        <div class="google-map-container" data-zoom="5" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-styles="[{&quot;featureType&quot;:&quot;landscape&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:60}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:40},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;administrative.province&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;lightness&quot;:30}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ef8c25&quot;},{&quot;lightness&quot;:40}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b6c54c&quot;},{&quot;lightness&quot;:40},{&quot;saturation&quot;:-40}]},{}]">
          <div class="google-map"></div>
          <ul class="google-map-markers">
            <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png"></li>
          </ul>
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