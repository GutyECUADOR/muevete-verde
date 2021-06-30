<?php
if (!isset($_SESSION["usuario_cedula".APP_UNIQUE_KEY])){
    header("Location:index.php?&action=login");  
 }   
?> 

    <div id="app" class="main-container main-background">
      <section >
        <div class="container">
          <!--navbar-->
          <?php require_once 'sis_modules/header_main.php'?>

          <!--navbar-->
          <?php require_once 'sis_modules/navbarnotop.php'?>
        
          <section>
            <div class="container text-light">
              <div class="row justify-content-center text-center section-intro">
                <div class="col-12 col-md-9 col-lg-8">
                    <span class="display-5 lead mt-4 text-uppercase" style="text-shadow: rgb(8, 0, 0) 0px 1px; font-size:2rem; color: #ffd987;">
                      Pronto conocerás si eres uno de </br> los que más puntos ha acumulado
                    </span>

                    <div 
                      class="flipper" 
                      data-datetime="2021-03-16 00:00:00"
                      data-reverse="true" 
                      data-template="d|H|i|s" 
                      data-labels="Dias|Horas|Minutos|Segundos" 
                      id="modalFlipper">
                    </div>

                    

                    
                </div>
                <!--end of col-->
              </div>
              <!--end of row-->
            </div>
          </section>

          <!--end of row-->
        </div>
        <!--end of container-->
      </section>
      <!--end of section-->
    </div>
    
     <!-- Modal Producto -->
     <?php require_once 'modals/terminosModal.php'?>

      <!-- Whatsapp button  -->
      <?php require_once 'modals/whatsapp.php'?>

     
      <!-- Required vendor scripts (Do not remove) -->
      <script type="text/javascript" src="assets/js/jquery.min.js"></script>
      <script type="text/javascript" src="assets/js/popper.min.js"></script>
      <script type="text/javascript" src="assets/js/bootstrap.js"></script>
      <script type="text/javascript" src="assets/js/jquery.flipTimer.js"></script>

     
      <script>
        $(document).ready(function() {
        
          $('#modalFlipper').flipper('init');

          $('[data-toggle="popover"]').popover()
          $("#whatspopover").popover("show");
          $("#tiendaramopopover").popover("show");
        });
      </script>
    
      <!-- AOS (Animate On Scroll - animates elements into view while scrolling down) -->
      <script type="text/javascript" src="assets/js/aos.js"></script>
      <!-- Flatpickr (calendar/date/time picker UI) -->
      <script type="text/javascript" src="assets/js/flatpickr.min.js"></script>
      <!-- Flickity (handles touch enabled carousels and sliders) -->
      <script type="text/javascript" src="assets/js/flickity.pkgd.min.js"></script>
      <!-- jarallax (parallax effect and video backgrounds) -->
      <script type="text/javascript" src="assets/js/jarallax.min.js"></script>
      <script type="text/javascript" src="assets/js/jarallax-video.min.js"></script>
      <script type="text/javascript" src="assets/js/jarallax-element.min.js"></script>
      <!-- ScrollMonitor (manages events for elements scrolling in and out of view) -->
      <script type="text/javascript" src="assets/js/scrollMonitor.js"></script>
      <!-- jQuery smartWizard facilitates steppable wizard content -->
      <script type="text/javascript" src="assets/js/jquery.smartWizard.min.js"></script>
      <!-- Smooth scroll (animation to links in-page)-->
      <script type="text/javascript" src="assets/js/smooth-scroll.polyfills.min.js"></script>
      <!-- Prism (displays formatted code boxes) -->
      <script type="text/javascript" src="assets/js/prism.js"></script>
      <script type="text/javascript" src="assets/js/zoom.min.js"></script>

      <!-- Required theme scripts (Do not remove) -->
      <script type="text/javascript" src="assets/js/theme.js"></script>
    
