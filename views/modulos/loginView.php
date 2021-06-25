<?php 

use App\Controllers\loginController;

    if (isset($_SESSION["usuarioRUC"])){
        header('location:index.php?action=inicio');  
    }
    
    $login = new loginController();
    $pais = isset($_GET["pais"]) ? $_GET["pais"] : '';
    

?>

    <div class="main-container main-background">
      <section class="space-sm">
        <div class="container align-self-start">
          <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-7">
              <div class="card card-lg text-center border-0">
                

                <div class="card-body">
                  <div class="mb-2">
                  <div class="col-12 text-center">
                    <a href="?action=bienvenidos"><img alt="Image" src="assets/img/logo.png" class="w-100" /></a>
                    
                  </div>
                    <span class="text-uppercase primary-color">Ingresa a tu cuenta y revisa tus puntos</span>
                   
                  </div>
                  <div class="row no-gutters justify-content-center">
                    <div class="text-left col-lg-8">
                      <form method="POST" autocomplete="off">
                        <?php 
                          $login->checkLogin(); 
                        ?>
                        <div class="form-group">
                          <label for="cedula">Documento de Identidad</label>
                          <input class="form-control form-control-lg" type="text" name="cedula" id="cedula" placeholder="Documento de Identidad" required />
                        </div>
                        <div class="form-group">
                          <label for="telefono">Teléfono Celular</label>
                          <input class="form-control form-control-lg" type="telefono" name="telefono" id="telefono" placeholder="Teléfono" required/>
                          <input type="hidden" name="pais" value="<?php echo $pais?>">
                          </small>
                        </div>
                        <div class="text-center mt-3">
                          <button type="submit" class="btn btn-success btn-block primary-color-background">Ingresar</button>
                        </div>
                        <div class="text-center mt-3 mb-3">
                            <span>¿Aun no te has registrado para la promoción? <a class="primary-color" href="?action=register&pais=<?php echo $pais?>">Regístrate aqui</a>
                            </span>
                        </div>
                      </form>
                    </div>
                    
                  </div>
                  <!--end of row-->
                </div>
              </div>
              
            </div>
            <!--end of col-->
          </div>
          <!--end of row-->
        </div>
        <!--end of container-->
      </section>
      <!--end of section-->
      
      <!-- Whatsapp button  -->
      <?php require_once 'modals/whatsapp.php'?>

    </div>

    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

    <script>
        $(function () {
          $('[data-toggle="popover"]').popover()
          $("#whatspopover").popover("show");
          $("#tiendaramopopover").popover("show");
        })
     
    </script>

    <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

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

      
